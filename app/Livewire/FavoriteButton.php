<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteButton extends Component
{
    public $eventId;
    public $isFavorited;

    public function mount($eventId, $isFavorited)
    {
        $this->eventId = $eventId;
        $this->isFavorited = $isFavorited;
    }

    public function toggleFavorite()
    {
        $userId = Auth::id();

        if ($this->isFavorited) {
            Favorite::where('event_id', $this->eventId)
                ->where('user_id', $userId)
                ->delete();

            $this->isFavorited = false;
        } else {
            Favorite::create([
                'event_id' => $this->eventId,
                'user_id' => $userId,
            ]);

            $this->isFavorited = true;
        }
    }

    public function render()
    {
        return view('livewire.favorite-button');
    }
}
