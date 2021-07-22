<?php

namespace App\Http\Livewire;

use App\Models\Compte;
use App\Models\Paiment;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PaimentLivewire extends Component
{

	public $montant;
	public $compteName;
	public $person_id;
	public $compte_id;
	public $type_cotisation;
	public $compte;
    public $searchValue;
    public $description;

    public function render()
    {
        $keySearch = $this->searchValue;

    	// $paiments = Paiment::where(function($query) use ($keySearch){
     //        $query->where('transaction_code','=',$keySearch);

     //    })->latest()->paginate();
     
        $paiments = Paiment::latest()->paginate();
        return view('livewire.paiment-livewire',['paiments' => $paiments]);
    }

    protected $rules = [
    	'montant' => 'required|numeric|min:0'
    ];

    public function updatedCompteName($val){
    	
    	$this->compte = Compte::where('name','=',$val)->first();
    }

    public function savePaiment(){
    	$this->validate();
    	try {
    		DB::beginTransaction();
    		Paiment::create([
    			'montant' => $this->montant,
                'description' => $this->description,
    			'compte_name' => $this->compte->name,
    			'compte_id' => $this->compte->id,
    			'person_id' => $this->compte->person->id,
    			'type_cotisation' => $this->type_cotisation,
    			'transaction_code' => $this->generateTransactionCode()
    		]);
    		DB::commit();
    		$this->reset();
    		
    	} catch (\Exception $e) {
    		BD::rollback();
    		dump($e->getMessage());
    		
    	}

    }

    private function generateTransactionCode() : string
    {
    	//this will generate 15 random number 
    	
    	$code = $comp = str_pad(rand(0,999999999999), 15,0,  STR_PAD_LEFT);
    	while (Paiment::where('transaction_code','=',$code )->first()) {
    		# code...
    		$code = $comp = str_pad(rand(0,999999999999), 15,0,  STR_PAD_LEFT);
    	}
    	return $code;

    }

    public function annulerPaiement($id){
      Paiment::find($id)->delete();
    }
}
