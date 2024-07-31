<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;


class FavButton extends Component
{   
    public $eventId;
    public $isFavorited;

    public function mount($eventId)
    {
        $this->eventId = $eventId;
        $this->isFavorited = Favorite::where('event_id', $eventId)
            ->where('user_id', Auth::id())
            ->exists();
    }

    public function toggleFavorite()
    {
        $userId = Auth::id();

        dd($userId);
        
        if ($this->isFavorited) {
            Favorite::where('event_id', $this->eventId)
                ->where('user_id', $userId)
                ->delete();
    
            $this->isFavorited = false;
        } else {
            if (!Favorite::where('event_id', $this->eventId)
                ->where('user_id', $userId)
                ->exists()) {
                Favorite::create([
                    'event_id' => $this->eventId,
                    'user_id' => $userId,
                ]);
    
                $this->isFavorited = true;
            }
        }
    }
    

    public function render()
    {
        return view('livewire.fav-button');
    }
}
