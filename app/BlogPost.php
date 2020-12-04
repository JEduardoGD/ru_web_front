<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogImageHeader;
use App\BlogVideoHeader;

class BlogPost extends Model
{
    public function blogImageHeaders()
    {
        return $this->hasMany(BlogImageHeader::class, 'blog_post_id', 'id');
    }
}
