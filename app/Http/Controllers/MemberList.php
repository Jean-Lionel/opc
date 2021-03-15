<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Person;
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

        })->orWhere('order_number', '=',$search )->paginate();
        
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajouterMember(Request $request){

        dd($request->all());
    }
}
