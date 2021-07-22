<?php

namespace App\Http\Livewire;

use App\Mail\TestMail;
use App\Models\Compte;
use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;



class PersonLivewire extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
	public $first_name;
	public $order_number;
	public $last_name;
    public $montant;
	public $addresse;
	public $telephone;
	public $type_personne;
	public $sexe;
    public $status;
	public $email;
	public $searchKey;
    public $motif;
    public $nif;
    public $debut_activite;
    public $table_name;
    public $identification;
    public $selectMember;
    public $searchTable;
    public $devise;
    public $showForm = false;



    public function toogleShowForm(){
        $this->showForm = ! $this->showForm;

    }
    public function render()
    {
    	$searchKey =  '%'.$this->searchKey.'%';
        $t = $this->searchTable;
       // dump($t);
    	$personnes = Person::where(function($query) use($t){
            if($t)
             $query->where('table_name','=',$t);

    	})->where('first_name','like',$searchKey)->paginate(10);
        return view('livewire.person-livewire',[
        	'personnes' => $personnes

        ]);
    }

    protected $rules = [
    	'first_name' => 'required',
    	// 'addresse' => 'required',
    	// 'telephone' => 'required',
    	// 'type_personne' => 'required',
    	// 'sexe' => 'required',
    	// 'email' => 'required',
     //    'nif' => 'required',
     //    'debut_activite' => 'required',
           'table_name' => 'required',
           'status' => 'required',
     //    'order_number' => 'required',
    ];

    public function savePersonne(){
    	$this->validate();
    	try {
    		DB::beginTransaction();
            if($this->identification){
                    //dd($this->devise);

                $personne = Person::find($this->identification);
                $personne->update([
                'first_name' => $this->first_name,
                'addresse' => $this->addresse,
                'telephone' => $this->telephone,
                'type_personne' => $this->type_personne,
                'email' => $this->email,
                'sexe' => $this->sexe,
                'nif' => $this->nif,
                'order_number' => $this->order_number,
                'debut_activite' => $this->debut_activite,
                'table_name' => $this->table_name,
                'status' => $this->status,
                ]);

                $personne->compte->devise = $this->devise;
                $personne->compte->motif = $this->motif;
                $personne->compte->save();

            }else{
                $personne = Person::create([
                'first_name' => $this->first_name,
                'addresse' => $this->addresse,
                'telephone' => $this->telephone,
                'type_personne' => $this->type_personne,
                'email' => $this->email,
                'sexe' => $this->sexe,
                'nif' => $this->nif,
                'order_number' => $this->order_number,
                'debut_activite' => $this->debut_activite,
                'table_name' => $this->table_name,
                'status' => $this->status,
            ]);
                $compte = Compte::create([
                    'person_id' => $personne->id,
                    'name' => $this->generateCompte(),
                    'montant' => $personne->id,
                    'devise' => $this->devise,
                    'motif' => $this->motif,

                ]);
                User::create([
                'name' => $this->first_name,
                'email' => $this->email,
                'email_verified_at' => now(),
                'compte_id' => $compte->id,
                'role' => 'MEMBRE',
                'user_name' => $this->order_number,
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                ]);
            }

    		

    		$this->reset();

    		DB::commit();
    		
    	} catch (\Exception $e) {

    		DB::rollback();

    		dump($e->getMessage());
    		
    	}

    }

   
    public function modifierPersonne($id){
        $person = Person::find($id);
        $this->identification = $person->id;
        $this->status = $person->status;
        $this->montant = $person->compte->montant;
        $this->first_name = $person->first_name;
        $this->order_number = $person->order_number;
        $this->telephone = $person->telephone;
        $this->addresse = $person->addresse;
        $this->type_personne = $person->type_personne;
        $this->sexe = $person->sexe;
        $this->motif = $person->compte->motif;
        $this->nif = $person->nif;
        $this->email = $person->email;
        $this->debut_activite = $person->debut_activite;
        $this->table_name = $person->table_name;
        $this->toogleShowForm();
    }

    public function supprimerPersonne($value)
    {
        $personne = Person::find($value);
        $personne->delete();
        # code...
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

    public function validerPersonner($id)
    {
        
    try {
        DB::beginTransaction();
        $personne = Person::find($id);
        $randPassword = Str::random(8);
        $user = User::create([
            'name' => $personne->first_name,
            'email' => $personne->email,
            'password' => Hash::make($randPassword),
            'user_name' => $personne->first_name,
            'role' => "MEMBRE"

        ]);

        $details = [
        'user_name' => $user->email,
        'password' => $randPassword ,
        'body' => 'This is a simple email for jean lionel'

    ];
    \Mail::to($user->email)->send(new TestMail($details));
    echo "Email has been sent";

      $personne->update(['valider' => 'VALIDER']);
      $personne->save();
    DB::commit();  
    } catch (\Exception $e) {
        dump($e->getMessage());
        DB::rollback();
    }
    }
    public function showInformationFormMember($id)
    {
        $this->selectMember = Person::find($id);
    }
}
