<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'name', 'description', 'release_date', 'rating', 'ticket_price', 'country', 'Genre', 'photo', 'wallpaper'
    ];
}
