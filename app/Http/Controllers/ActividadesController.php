<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\BlogPost;

class ActividadesController extends Controller
{
    public function index(){
        $blog_posts = BlogPost::all();
        foreach($blog_posts as $blog_post){
            echo json_encode(($blog_post->blogImageHeader()));
        }
        return view('actividades', ['blog_posts' => $blog_posts]);
    }
}
