<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	$posts=\App\Post::orderBy('created_at','desc')->take(10)->get();
        $info=\App\AboutMe::first();

    	return view('home.index',compact('posts','info'));
    }

    public function post(\App\Post $post){
    	return view('home.post',['post'=>$post]);
    }

    public function posts(){
    	$posts=\App\Post::orderBy('created_at','desc')->paginate(10);
    	return view('home.posts',compact('posts'));
    }


}

