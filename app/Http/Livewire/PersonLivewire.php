<?php

namespace App\Http\Livewire;

use App\Models\Compte;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class PersonLivewire extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
	public $first_name;
	public $last_name;
	public $addresse;
	public $telephone;
	public $type_personne;
	public $sexe;
	public $email;
	public $searchKey;

	public function mount(){
		
	}

    public function render()
    {
    	$searchKey =  '%'.$this->searchKey.'%';

    	$personnes = Person::where(function($query) use($searchKey){
    		$query->where('first_name','like',$searchKey)
    			  ->orWhere('last_name','like', $searchKey);

    	})->latest()->paginate();
    	
        return view('livewire.person-livewire',[
        	'personnes' => $personnes

        ]);
    }

    protected $rules = [
    	'first_name' => 'required',
    	'last_name' => 'required',
    	'addresse' => 'required',
    	'telephone' => 'required',
    	'type_personne' => 'required',
    	'sexe' => 'required',
    	'email' => 'required',

    ];

    public function savePersonne(){
    	$this->validate();

    	try {
    		DB::beginTransaction();

    		$personne = Person::create([

    			'first_name' => $this->first_name,
    			'last_name' => $this->last_name,
    			'addresse' => $this->addresse,
    			'telephone' => $this->telephone,
    			'type_personne' => $this->type_personne,
    			'email' => $this->email,
    			'sexe' => $this->sexe,


    		]);

    		Compte::create([
    			'person_id' => $personne->id,
    			'name' => $this->generateCompte(),
    			'montant' => $personne->id

    		]);

    		$this->reset();

    		DB::commit();
    		
    	} catch (\Exception $e) {

    		DB::rollback();

    		dump($e->getMessage());
    		
    	}

    }

    private function generateCompte()
    {
    	$comp = str_pad(rand(0,999999), 6,0,  STR_PAD_LEFT);

    	while (Compte::where('name','=',$comp)->first()) {
    		# code...
    		$comp = str_pad(rand(0,999999), 6,0,  STR_PAD_LEFT);
    	}

    	return $comp;
    }
}
