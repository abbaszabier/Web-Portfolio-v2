<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest();

        if(request('search')){
            $posts -> where('title', 'like', '%' . request('search') . '%' );
        }
        return view('portfolio', [
            "title"=>"Portfolio",
            "posts" => $posts->get()
        ]);
    }

    // public function search(Request $request){
    //     $search = $request('search');
    //     $keysearch = DB::table('posts')
    //     -> where('title', 'like', '%' . $search . '%' )->get();
    //     echo $keysearch;
    // }
    
    public function show(Post $post){
        return view('post', [
            "title" => "Portfolio",
            "post"=> ($post)
        ]);
    }
}