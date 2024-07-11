<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\EventCategory;
use App\Models\Ticket;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'date', 'user_id', 'location', 'start_time', 'end_time', 'image', 'category', 'slug'];

    public static function boot(){
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->name);
        });

        static::updating(function ($event) { 
            $event->slug = Str::slug($event->name);
        });
    }

    public function category(){
        return $this->belongsTo(EventCategory::class);
    }

    public function getFormattedDateAttribute(){
        return Carbon::parse($this->attributes['date'])->format('l, F jS');

    }

    public function getFormattedStartTimeAttribute()
    {
        return Carbon::parse($this->attributes['start_time'])->format('g:i A');
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}