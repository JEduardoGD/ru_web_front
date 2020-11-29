<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImageHeader extends Model
{
    public function blogPost()
    {
        return $this->hasMany(BlogPost::class);
    }
}
