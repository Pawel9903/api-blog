<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function postCategories()
    {
        $this->belongsToMany('App\PostCategory', 'post_category_pivots');
    }
}
