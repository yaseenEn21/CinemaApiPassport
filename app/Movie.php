<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'story','year','rating', 'length','cover'];

    public function metas()
    {
        return $this->hasMany(Meta::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function collections()
    {
        return $this->belongsToMany(UserCollection::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    
}
