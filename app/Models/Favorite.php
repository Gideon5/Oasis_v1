<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\User;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'event_id'];

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }


}
