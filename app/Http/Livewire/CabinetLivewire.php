<?php
 
namespace App\Http\Livewire;

use App\Models\Cabinet;
use Livewire\Component;

class CabinetLivewire extends Component
{
	public $name;
	public $order_number;
	public $addresse;
	public $telephone;
	public $annee_debut;
	public $valider;
    public $identification;


    protected $rules = [
        'name' => 'required',
        'order_number' => 'required',
        'telephone' => 'required',
        'annee_debut' => 'required',

    ];


    public function render()
    {
        return view('livewire.cabinet-livewire');
    }

    public function saveCabinet(){
        
        $this->validate();
    	$data = [
            'name' => $this->name,
            'order_number' => $this->order_number,
            'telephone' => $this->telephone,
            'annee_debut' => $this->annee_debut,
        ];

        if($this->identification)
        {
            Cabinet::find($this->identification)->update($data);

        }else{
            Cabinet::create($data);

        }
    }
}
