<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;


class FavButton extends Component
{   
    public $event_id;
    public $is_favorite;

  

    public function mount($event_id)
    {
        $this->event_id = $event_id;
        if(Auth::check()){
            $this->is_favorite = Auth::user()->favorites()->where('event_id', $event_id)->exists();
        }
        else {
            $this->is_favorite = false;
        }
    }

    public function toggleFavorite()
    {   

        //fix the favorites on the dashboard
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $userId = Auth::id();
        
        if ($this->is_favorite) {
            Favorite::where('event_id', $this->event_id)
                ->where('user_id', $userId)
                ->delete();
    
            $this->is_favorite = false;
        } else {
            if (!Favorite::where('event_id', $this->event_id)
                ->where('user_id', $userId)
                ->exists()) {
                Favorite::create([
                    'event_id' => $this->event_id,
                    'user_id' => $userId,
                    'is_favorite' => true
                ]);
    
                $this->is_favorite = true;
            }
        }
    }
    

    public function render()
    {
        return view('livewire.fav-button');
    }
}
