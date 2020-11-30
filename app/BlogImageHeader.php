<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImageHeader extends Model
{
    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
