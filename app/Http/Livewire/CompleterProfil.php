<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

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
    public $identification;
    public $selectMember;
    

    public function render()
    {
        $user = Auth::user();
        return view('livewire.completer-profil',[
            'user' => $user
        ]);
    }
}
