<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\Favorite;



class FavoriteButton extends Component
{

    public function render()
    {
        return view('livewire.favorite-button');
    }
}
