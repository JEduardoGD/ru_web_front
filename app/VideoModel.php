<?php

namespace App;
use App\BlogVideoHeader;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    public function blogVideoHeader()
    {
        return $this->belongsTo(BlogVideoHeader::class);
    }
}
