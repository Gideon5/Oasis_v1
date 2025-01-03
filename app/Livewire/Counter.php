<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{   
    public $count = 1;

    // #[Layout('layouts.app')] //relative to the component rendered in
    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    
    public function render()
    {
        return view('livewire.counter');
    }

    
}
