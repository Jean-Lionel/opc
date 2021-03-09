<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	
	public function index(){

		return view("site.index");
	}

	public function createMember(){

		return view("site.register");
	}

	public function contact(){
		return view("site.contact");
	}

	public function annuaire(){
		return view("site.annuaire");
	}

	public function actualite(){
		return view("site.actualites");
	}
}