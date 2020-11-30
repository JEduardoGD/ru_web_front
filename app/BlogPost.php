<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public function blogImageHeader()
    {
        return $this->hasMany(BlogImageHeader::class);
    }
    
    public function BlogVideoHeader()
    {
        return $this->hasMany(BlogVideoHeader::class);
    }
}
