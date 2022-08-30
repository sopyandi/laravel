<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function home()
    {
        return view('home',[
            "title"=>"Home"
            ]);
    }
    public function about()
    {
        return view('about' ,[
            "title"=>"About",
            "name"=>"Rian Sopyandi",
            "gmail"=>"sopyandirian12@gmail.com",
            "img"=>"anwar.jpg"
        
            ]);
    }
    public function blog()
    {
        return view('blog', [
            "title"=>"Blog",
            "blog" => Post::all()
            
        ]);
    }
    public function singgle(Post $post)
    {
        return view('single',[
            "title" => "Single Blog",
            "single_blog" => $post
         ]);
    }
}
