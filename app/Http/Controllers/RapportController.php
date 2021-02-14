<?php 

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;



/**
 * 
 */
class RapportController extends Controller
{
	
	public function index(){

		$personnes = Person::all();
		return view('rapport.index',compact('personnes'));
	}
}