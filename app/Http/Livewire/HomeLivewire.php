<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class HomeLivewire extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
	
	public $searchKey;
	public $table_name;
    public $date_fin;
    public $date_debut;
   

    public function render()
    {
    	$searchKey =  '%'.$this->searchKey.'%';
        $date_fin = $this->date_fin;       
        $date_d = $this->date_debut;       
        $table_name = $this->table_name;  

        // dd($date_d );     

    	$personnes = Person::where(function($query) use($searchKey , $date_d,  $table_name , $date_fin){
    		$query->where(function($query) use($searchKey){
               
                $query->where( 'first_name','like',$searchKey)
                    ->orWhere('order_number','=',$searchKey)
                    ->orWhere('telephone','like',$searchKey);

            })->where(function($query) use (  $date_d,  $table_name , $date_fin){
                $query->where('table_name', '=', $table_name);
                if($date_d and $date_fin){
                    $query->whereBetween('debut_activite', [ $date_d, $date_fin]);
                }
            });

    	})->latest()->paginate();
    	
        return view('livewire.home-livewire',[
        	'personnes' => $personnes

        ]);
    }

}
