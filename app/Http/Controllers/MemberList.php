<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Models\Compte;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $search = \Request::get('key');
        $classement = \Request::get('classement');
        $people = Person::where(function($query) use ( $search , $classement ){
            $query->where('first_name', 'like', '%'. $search .'%');
            if( $classement != null){
                $query->where('first_name', 'like', '%'. $search .'%')
                      ->where('table_name', '=', $classement);
            }
        })->orWhere('order_number', '=',$search )->paginate(80);  
        return view('people.member-list', compact('people', 'search', 'classement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('people.register-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate( [
        'first_name' => 'required',
        'addresse' => 'required',
        'telephone' => 'required',
        'type_personne' => 'required',
        'email' => 'required',
        'nif' => 'required',
        'debut_activite' => 'required',
        'table_name' => 'required',
    
    ]);
        //dd($request->all());
// Textes complets     id  order_number    first_name  addresse    sexe    email   telephone   nif type_personne   debut_activite  table_name  type_enregistrement
        
       $personne = Person::create([
                'first_name' => $request->first_name,
                'addresse' => $request->addresse,
                'telephone' => $request->telephone,
                'type_personne' => $request->type_personne,
                'email' => $request->email,
                'sexe' => $request->sexe,
                'nif' => $request->nif,
                'order_number' => $request->order_number,
                'debut_activite' => $request->debut_activite,
                'type_enregistrement' => 'WEB',
                'table_name' => $request->table_name,
            ]);

        Compte::create([
                'person_id' => $personne->id,
                'name' => $this->generateCompte(),
                'montant' => $personne->id

         ]);

        return back();

    }

    private function generateCompte()
    {
        $comp = str_pad(rand(0,999999), 6,0,  STR_PAD_LEFT);
        while (Compte::where('name','=',$comp)->first()) {
            # code...
            $comp = str_pad(rand(0,999999), 6,0,  STR_PAD_LEFT);
        }

        return $comp;
    }


    public function ajouterMember(Request $request){

        $data = $request->all();
        $content = json_decode($data['membres']); 
        $a = $this->getMember($content );
        Person::insert($a);
        dump("Reussi");

        return "OK";
    }

    public function ajouterCabinet(Request $request){

        $data = $request->all();
        $content = json_decode($data['cabinets']);
        $cabinets = $this->getCabinet($content);
        Cabinet::insert($cabinets);
        return response('Enregistrment reussi', 200)
                  ->header('Content-Type', 'text/plain');
        
    }

    private function getCabinet($data)
    {
        $xcode = [];

        foreach($data as $value){
            // dd($value);
            if(isset($value->name) and $value->name != ""){
                $xcode[] = [
                    'name' => $value->name,
                    'order_number' => $value->order_number,
                    'annee_debut' => $value->annee_debut,
                    'telephone' => $value->telephone,
                    'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime(), 
                ];
            }
        }

        return $xcode;
    }


    private function getMember($data){

        $xcode = [];

        foreach ($data as $key => $value) {

            // dd($value->order_number);
            # code...

            if(isset($value->order_number)){

                 $xcode[] = [

                  "order_number" => $value->order_number, 
                  "first_name" => $value->first_name, 
                  "addresse" => $value->addresse, 
                  "sexe" => $value->sexe, 
                  "email" => $value->email, 
                  "telephone" => $value->telephone, 
                  "nif" => $value->nif, 
                  "type_personne" => $value->type_personne, 
                  "debut_activite" => $value->debut_activite, 
                  "table_name" => $value->table_name, 
                  "type_enregistrement" => 'IMPORTATION',
                  'created_at' => new \DateTime(), 
                  'updated_at' => new \DateTime(), 
                  // "updated_at" => Carbon::now(), 
                  // "deleted_at" =>null, 

            ];

            }
           
        }

        return $xcode;

    }
}
