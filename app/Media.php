<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['movie_id', 'source', 'type', 'quality'];

    public function media()
    {
        return $this->belongsTo(Movie::class);
    }

}
