<?php

namespace App\Http\Livewire;

use App\Models\Compte;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class CompleterProfil extends Component
{
    public $first_name;
    public $order_number;
    public $last_name;
    public $addresse;
    public $telephone;
    public $type_personne;
    public $sexe;
    public $status;
    public $email;
    public $searchKey;
    public $nif;
    public $debut_activite;
    public $table_name;
    public $password;
    public $identification;
    public $selectMember;


    public function mount(){
        $user = Auth::user();

        $compte = Compte::where('id','=',  $user->compte_id)->first();
         $personne = $compte->person;

         $this->selectMember = $personne;

        $this->first_name = $personne->first_name;
        $this->order_number = $personne->order_number;
        $this->last_name = $personne->last_name;
        $this->addresse = $personne->ad;
        $this->telephone = $personne->telephone;
        $this->type_personne = $personne->type_personne;
        $this->sexe = $personne->sexe;
        $this->status = $personne->status;
        $this->email = $personne->email;
        $this->nif = $personne->nif;
        $this->debut_activite = $personne->debut_activite;
        $this->table_name = $personne->table_name;

    }


    public function render()
    {
        $user = null;
        
        return view('livewire.completer-profil',[
            'user' => $user
        ]);
    }

    public function saveInformation(){

        $personne = $this->selectMember;

        $personne->addresse  = $this->addresse;
        $personne->sexe = $this->sexe ;
        $personne->email = $this->email ;
        $personne->telephone = $this->telephone;
        $personne->nif = $this->nif ;
        $personne->type_personne = $this->type_personne ;
        $personne->debut_activite = $this->debut_activite ;

        if($this->password && $this->email){
            $password =  Hash::make($this->password);

            $user = $personne->compte->user;
            $user->password =  $password;
            $user->email =  $this->email;
            $user->save();
        }

        $personne->save();
        
    }
}
