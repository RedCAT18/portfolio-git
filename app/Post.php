<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function categories() {
        return $this->belongsTo('App\Category');
    }

    public function images() {
        return $this->hasMany('App\Image');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
