<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost ()
    {
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }
}
