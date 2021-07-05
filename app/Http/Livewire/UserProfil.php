<?php

namespace App\Http\Livewire;

use App\Models\Compte;
use App\Models\Paiment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfil extends Component
{

    public function render()
    {
        $user = Auth::user();
        $compte = $user->compte ?? new Compte;

        $paiments =  Paiment::where('compte_id', '=',$compte->id ?? 0)->paginate();
        return view('livewire.user-profil',[
            'compte' => $compte,
            'paiments' => $paiments
        ]);
    }
}
