<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'media_format',
        'length',
        'release_year',
        'rating',
    ];

    public function directors()
    {
        return $this->belongsToMany('App\Director');
    }

}
