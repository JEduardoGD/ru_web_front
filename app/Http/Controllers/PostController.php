<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index($title){

        //$createBlogPosts = createBlogPosts();
        createBlogPosts();
        
        return view('post', []);
    }
}
