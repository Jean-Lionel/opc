<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormationComponent extends Component
{
    public $title;
    public $date_debut;
    public $date_fin;
    
    public function render()
    {
        return view('livewire.formation-component');
    }
}
