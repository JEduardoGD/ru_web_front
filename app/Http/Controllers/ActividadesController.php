<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ActividadesController extends Controller
{
    public function index(){
        $blog_posts = DB::table('blog_post')->get();
        foreach($blog_posts as $blog_post){
            
        }
        return view('actividades', ['blog_posts' => $blog_posts]);
    }
}
