<?php
 
namespace App\Http\Livewire;

use Livewire\Component;

class CabinetLivewire extends Component
{
	public $name;
	public $order_number;
	public $addresse;
	public $type_personne;
	public $type_enregistrement;
	public $valider;


    public function render()
    {
        return view('livewire.cabinet-livewire');
    }

    public function saveCabinet(){
    	dd("Je suis cool");
    }
}
