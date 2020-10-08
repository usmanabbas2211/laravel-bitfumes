<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(Request $req){
        $blog=Blog::find(4);
        dd($blog);
    }
}
