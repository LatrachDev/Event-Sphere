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
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function tickets()
    // {
    //     return $this->hasMany(Ticket::class);
    // }
}
