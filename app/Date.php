<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    //
    public function posts() {
        return $this->belongsTo(Post::class);
    }
}
