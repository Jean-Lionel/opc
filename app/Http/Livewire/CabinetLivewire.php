<?php

namespace App\Http\Livewire;

use App\Models\Cabinet;
use Livewire\Component;

class CabinetLivewire extends Component
{
	public $name;
	public $order_number;
	public $telephone;
	public $annee_debut;
	public $identification;

	protected $rules = [
		'name' => 'required',
		'order_number' => 'required',
		'annee_debut' => 'required',
		'telephone' => 'required',
	];
    public function render()
    {
    	$cabinets = Cabinet::latest()->paginate();
        return view('livewire.cabinet-livewire',
        	[
        		'cabinets' => $cabinets
        	]
    	);
    }

    public function saveCabinet(){
    	$this->validate();

    	$data = [
    		'name' => $this->name,
			'order_number' => $this->order_number,
			'annee_debut' => $this->annee_debut,
			'telephone' => $this->telephone,
    	];

    	if($this->identification){
    		Cabinet::find($this->identification)->update($data);

    	}else{
    		Cabinet::create($data);
    	}
    }

    public function modifierCabinet($id){
    		 $cabinet = Cabinet::find($id);
    	     $this->name = $this->name;
			 $this->order_number = $this->order_number;
			 $this->annee_debut = $this->annee_debut;
			 $this->telephone = $this->telephone;
			 $this->identification = $this->id;
    }
}
