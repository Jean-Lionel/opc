<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Models\Compte;
use App\Models\Person;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $status = \Request::get('status');

        $people = Person::where(function($query) use ( $search , $classement,  $status ){
             $query->where('first_name', 'like', '%'.$search .'%');

            if($classement && $status){
                $query->where('status', '=', $status)
                      ->where('table_name', '=', $classement );
             }
            else if($classement)
                $query->where('table_name', '=', $classement );

            else if($status)
                 $query->where('status', '=', $status);
        })->orWhere('order_number','=', $search)->paginate(50);

        return view('people.member-list', compact('people', 'search', 'classement','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $list_members = $this->getMember($content );

        try {
            DB::beginTransaction();
            foreach($list_members as $membre){
                $personne = Person::create($membre);

                 $compte = Compte::create([
                        'person_id' => $personne->id,
                        'name' => $this->generateCompte(),
                        'montant' => doubleval($membre['montant']),
                        'motif' => $membre['motif']
                    ]);
                    User::create([
                    'name' =>  $personne->first_name,
                    'email' => $personne->email,
                    'user_name' =>  $personne->order_number,
                    'email_verified_at' => now(),
                    'compte_id' => $compte->id,
                    'role' => 'MEMBRE',
                    'password' => Hash::make('12345678'), // password
                    'remember_token' => Str::random(10),
                    ]);
                }
           DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            
        }

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
        // dd($data[0]);

        $xcode = [];

        foreach ($data as $key => $value) {

            
            # code...
            if(isset($value->order_number)){
                 $xcode[] = [

                  "order_number" => $value->order_number ?? null, 
                  "first_name" => $value->first_name ?? null, 
                  "addresse" => $value->addresse ?? null, 
                  "sexe" => $value->sexe ?? null, 
                  "email" => $value->email ?? null, 
                  "telephone" => $value->telephone ?? null, 
                  "nif" => $value->nif ?? null, 
                  "type_personne" => $value->type_personne ?? null, 
                  "debut_activite" => $value->debut_activite ?? null, 
                  "table_name" => $value->table_name ?? null, 
                  "status" => $value->status ?? null, 
                  "type_enregistrement" => 'IMPORTATION',
                  "motif" => $value->motif ?? 0,
                  "montant" => $value->montant ?? 0,
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
