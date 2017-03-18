<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function dates() {
        return $this->hasOne(Date::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'Post_Tag','post_id','tag_id');
    }
}
