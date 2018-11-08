<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    public function posts()
    {
        $this->belongsToMany('App\Post', 'post_category_pivots');
    }
}
