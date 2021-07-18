<?php 

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class RapportController extends Controller
{
	public function index(){
		$personnes = Person::all();
		return view('rapport.index',compact('personnes'));
	}

	public function cloturer(){
		$comptes = Compte::all();

		try {

			DB::beginTransaction();
				foreach($comptes as $compte){
					$compte->montant += $compte->payement_annuel;
					$compte->save();
				}
			DB::commit();
		} catch (\Exception $e) {
			dd($e->getMessage());
			DB::rollback();
		}
		return back();
	}

	public function rapport(){
		return view('rapport.liste');
	}
}