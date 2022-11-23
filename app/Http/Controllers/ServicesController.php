<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('categories', [
            "title"=>"Services",
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('category', [
            'title'=> 'Services',
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }
}