<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'name', 'description', 'release_date', 'rating', 'ticket_price', 'country', 'Genre', 'photo'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment', 'film_id', 'id');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre', 'film_genres', 'film_id', 'genre_id')->withTimestamps();
    }
}
