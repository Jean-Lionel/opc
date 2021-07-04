<?php

namespace App\Http\Livewire;

use App\Models\Paiment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfil extends Component
{

    public function render()
    {
        $user = Auth::user();
        $compte = $user->compte;

        $paiments =  Paiment::where('compte_id', '=',$compte->id)->paginate();
        return view('livewire.user-profil',[
            'compte' => $compte,
            'paiments' => $paiments
        ]);
    }
}
