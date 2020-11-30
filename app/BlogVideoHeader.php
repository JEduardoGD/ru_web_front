<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogVideoHeader extends Model
{
    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
