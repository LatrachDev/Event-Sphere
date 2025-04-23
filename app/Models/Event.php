<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_time',
        'category_id',
        'price',
        'number_of_tickets',
        'image',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::created(function ($event) {
            $event->user->increment('events_count');
        });

        static::deleted(function ($event) {
            $event->user->decrement('events_count');
        });
    }


    // public function tickets()
    // {
    //     return $this->hasMany(Ticket::class);
    // }
}
