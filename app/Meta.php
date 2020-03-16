<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $fillable = ['key', 'value', 'movie_id'];

    public function move()
    {
        return $this->belongsTo(Movie::class);
    }


}
