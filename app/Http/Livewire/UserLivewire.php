<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserLivewire extends Component
{
	public $name;
	public $email;
	public $password;
	public $user_name;
	public $role;

    public function render()
    {
        return view('livewire.user-livewire');
    }

    protected $rules = [

    	'name' => 'required',
        'email' => 'email|unique:users,email',
        'password' => 'required',
        'user_name' => 'required|unique:users,user_name',
        'role' => 'required'

    ];

    public function saveUser(){
    	$this->validate();


    	User::create([

    		'name' => $this->name,
        	'email' => $this->email,
        	'password' => $this->password,
        	'user_name' => $this->password,
        	'role' => $this->role

    	])

    }
}
