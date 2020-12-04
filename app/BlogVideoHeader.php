<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogPost;

class BlogVideoHeader extends Model
{
    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
    public function videoModel()
    {
        return $this->hasOne(VideoModel::class, 'video_models_id', 'id');
    }
}
