<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use Livewire\Component;

class FormationComponent extends Component
{
    public $title;
    public $date_debut;
    public $date_fin;
    public $identification;

    public function render()
    {
        $formations = Formation::latest()->paginate();
        return view('livewire.formation-component',[
            'formations' => $formations

        ]);
    }

    protected $rules = [
        'title' => 'required', 
        'date_debut' => 'date', 
        'date_fin' => 'date', 
    ]; 

    public function saveFormation(){
        $this->validate();

        if($this->identification){
            $formation = Formation::find($this->identification);

            $formation->update(
                [
                'title' => $this->title, 
                'date_debut' => $this->date_debut, 
                'date_fin' => $this->date_fin,
                ]
            );

        }else{
           $d = Formation::create(
            [
                'title' => $this->title, 
                'date_debut' => $this->date_debut, 
                'date_fin' => $this->date_fin,
            ]
        );
        }
         $this->reset();

    }

    public function supprimerFormation($id){
        Formation::find($id)->delete();
    }

    public function modifierFormation($id){

        $formation = Formation::find($id);

        $this->identification = $formation->id;
        $this->title = $formation->title;
        $this->date_debut = $formation->date_debut;
        $this->date_fin = $formation->date_fin;

    }
}
