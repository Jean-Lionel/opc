<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventCourse extends Component
{
	public $postCount;

    protected $listeners = ['postAdded' => 'incrementPostCount'];


     public function incrementPostCount()
    {
        $this->postCount = $this->postCount ++;
    }


    public function render()
    {
        return view('livewire.event-course');
    }
}
