<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Ticket extends Model
{
    protected $fillable = ['price','type', 'ticket_quantity' , 'event_id'];
    
    use HasFactory;

    
    public static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            $ticket->tickets_sold = 0;
            $ticket->tickets_left = $ticket->ticket_quantity;
        });

    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

}
