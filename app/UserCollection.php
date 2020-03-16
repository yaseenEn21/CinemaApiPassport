<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCollection extends Model
{
    protected $fillable = ['user_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

}
