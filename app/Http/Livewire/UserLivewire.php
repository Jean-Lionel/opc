<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserLivewire extends Component
{
	public $name;
	public $email;
	public $password;
	public $user_name;
	public $role;
	public $roles_users =[];
	public $identification;


	public function mount(){
		$this->roles_users = ['DEFAULT', 'ADMINISTRATEUR','SECRETAIRE', 'COMPTABLE'];

	}

    public function render()
    {
    	$users = User::latest()->paginate();

        return view('livewire.user-livewire',[
        	'users' => $users

        ]);
    }

    protected $rules = [

    	'name' => 'required',
        'email' => 'email|unique:users,email',
        'password' => 'required|min:5',
        'user_name' => 'required|unique:users,user_name',
        'role' => 'required'

    ];

    public function saveUser(){
    	$this->validate();

    	if($this->identification)
    	{
    		$user = User::find($this->identification);

    		$user->name = $this->name;
    		$user->email = $this->email;
    		$user->user_name = $this->user_name;
    		$user->role = $this->role;

    		$user->save();

    	}else{

    	User::create([

    		'name' => $this->name,
        	'email' => $this->email,
        	'password' => Hash::make($this->password),
        	'user_name' => $this->user_name,
        	'role' => $this->role

    	]);

    	}

    }

    public function updateUser($user){
    	$user = User::find($user);

    	$this->identification = $user->id;
    	$this->name = $user->name;
    	$this->email = $user->email;
    	$this->password = $user->password;
    	$this->user_name = $user->user_name;

    }
}
