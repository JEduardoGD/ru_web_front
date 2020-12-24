<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ActividadesController extends Controller
{
    public function index(){
        $newArrayBlogs = createBlogPosts();
        return view('actividades', ['blog_posts' => $newArrayBlogs]);
    }
}