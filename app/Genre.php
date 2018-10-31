<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'title'
    ];

    public function films()
    {
        return $this->belongsToMany('App\Film', 'film_genres', 'genre_id', 'film_id');
    }
}
