<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\BlogPost;
use App\BlogImageHeader;
use App\BlogVideoHeader;
use App\VideoModel;
use App\User;

class ActividadesController extends Controller
{
    public function index(){
        $blog_posts = BlogPost::orderBy('id', 'DESC')->get();
        
        $typeOfHeader = null;
        $header = null;

        $newArrayBlogs = Array();

        foreach($blog_posts as $blog_post){
            $newArrayBlog = new class{};
            $typeOfHeader = null;
            $header = null;

            $blogImages = BlogImageHeader::where('blog_post_id', $blog_post->id)->get();
            $user = User::where('id', $blog_post->user_id)->first();

            if($blogImages->count() > 0){
                $typeOfHeader = 'image';
                $header = env('BUCKET_HTTP_URL')."/blog/".$blog_post->id."/headers/".$blogImages[0]->filename;
            }

            $blogVideo = BlogVideoHeader::where('blog_post_id', $blog_post->id)->first();
            if(!is_null($blogVideo)){
                $blogVideo = BlogVideoHeader::where('blog_post_id', $blog_post->id)->first();
                $videoModel = VideoModel::where('id', $blogVideo->video_models_id)->first();
                $typeOfHeader = 'video';
                $header = str_replace("[[video_code]]", $blogVideo->video_code, $videoModel->iframe_code);
                $header = str_replace("[[video_title]]", $blogVideo->video_title, $header);
            }

            $newArrayBlog->id = $blog_post->id;
            $newArrayBlog->tags = $blog_post->tags;
            $newArrayBlog->title = $blog_post->title;
            $newArrayBlog->author = $user->name;
            $newArrayBlog->date = $blog_post->created_at;
            $newArrayBlog->typeOfHeader = $typeOfHeader;
            $newArrayBlog->header = $header;
            $newArrayBlog->short_html = $blog_post->short_html;
            $newArrayBlog->html = $blog_post->html;
            $newArrayBlog->link = strtolower(urlencode(str_replace(' ', '-', $blog_post->title)));
            
            array_push($newArrayBlogs, $newArrayBlog);
        }
        return view('actividades', ['blog_posts' => $newArrayBlogs]);
    }
}