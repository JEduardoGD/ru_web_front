<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\BlogPost;

class ActividadesController extends Controller
{
    public function index(){
        $xxxx = BlogPost::all();
        foreach($xxxx as $blog_post){
            
        }
        return view('actividades', ['xxxx' => $xxxx]);
    }
}
