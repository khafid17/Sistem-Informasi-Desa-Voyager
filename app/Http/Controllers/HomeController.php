<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;
use\App\Pangkat;

class HomeController extends Controller
{
    public function index(){
        return view('home');       
    }
    public function publikasi(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('publikasi', compact('posts'));
    }
    public function post($slug){
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('post', compact('post'));
    }
    public function desa(){
        return view('desa');       
    }
    public function perangkat(){
        $pangkats = Pangkat::orderBy('id', 'asc')->paginate(3);
        return view('perangkat', compact('pangkats'));      
    }

}
