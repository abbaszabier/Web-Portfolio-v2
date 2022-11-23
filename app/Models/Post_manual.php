<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post 
{
   private static $portfolio_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Abbas Zabier Mohammad",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur est possimus pariatur dignissimos nam a eum perspiciatis quidem dolore cumque.",
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Abbas Zabier Mohammad",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur est possimus pariatur dignissimos nam a eum perspiciatis quidem dolore cumque. Amet consectetur adipisicing elit, perspiciatis quidem dolore cumque."
    ]
];

    public static function all(){
        return collect(self::$portfolio_posts);
    }

    public static function find($slug){
        $portfolio_posts = static::all();
        return $portfolio_posts->firstWhere('slug', $slug);
    }
}