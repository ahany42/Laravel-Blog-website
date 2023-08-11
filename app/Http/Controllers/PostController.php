<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(){
        $posts = Post::all();
        return view('Home',['posts' => $posts]);
    }
}