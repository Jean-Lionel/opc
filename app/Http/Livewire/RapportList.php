<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;

class RapportList extends Component
{

    public $table_name;
    public $current_status;
    public $searchKey;

    public function render()
    {

        $classement = $this->table_name;
        $status = $this->current_status;
        $search  = $this->searchKey;

        $membres = Person::where(function($query) use ( $search , $classement,  $status ){
             $query->where('first_name', 'like', '%'.$search .'%');

            if($classement && $status){
                $query->where('status', '=', $status)
                      ->where('table_name', '=', $classement );
             }
            else if($classement)
                $query->where('table_name', '=', $classement );

            else if($status)
                 $query->where('status', '=', $status);
        })->orWhere('order_number','=', $search)->paginate();

         $membres_all = Person::where(function($query) use ( $search , $classement,  $status ){
             $query->where('first_name', 'like', '%'.$search .'%');

            if($classement && $status){
                $query->where('status', '=', $status)
                      ->where('table_name', '=', $classement );
             }
            else if($classement)
                $query->where('table_name', '=', $classement );

            else if($status)
                 $query->where('status', '=', $status);
        })->orWhere('order_number','=', $search)->get();


        return view('livewire.rapport-list', [
            'membres' => $membres,
            'membres_all' => $membres_all,

        ]);
    }
}
