<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use Illuminate\Http\Request;

class SiteController extends Controller
{
	
	public function index(){

		return view("site.index");
	}
	public function condition(){

			return view("site.condition");
	}

	public function publicite(){

		return view("site.publicite");
	}
	public function category(){

		return view("site.category");
	}

	public function cabinet(){
		$cabinets = Cabinet::orderBy('order_number','ASC')->get();
		// return $cabinets;
		return view("site.cabinet",['cabinets' => $cabinets]);
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