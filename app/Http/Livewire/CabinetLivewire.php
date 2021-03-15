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


    protected $rules = [
        'name' => 'required',
        'order_number' => 'required',
        'addresse' => 'addresse',
        'type_personne' => 'required',
        'type_enregistrement' => 'required',

    ];


    public function render()
    {
        return view('livewire.cabinet-livewire');
    }


    public function saveCabinet(){
    	$data = [
            'name' => $this->name,
            'order_number' => $this->order_number
        ];
    }
}
