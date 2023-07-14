<?php

namespace App\Models;

class Post
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Franco Turangan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo qui tenetur quis commodi sequi laboriosam, ratione excepturi tempora, iste autem, error aliquam? Sit labore optio eligendi. Quo placeat assumenda repellat sapiente, sunt commodi nisi odio nobis id qui, animi cupiditate porro hic? Ab totam nisi velit a, optio perspiciatis? Fugit harum voluptate, accusantium qui debitis repellat corporis possimus fuga ab atque aperiam quae tempora esse modi hic. Blanditiis, ipsam veritatis adipisci molestiae dolorem dicta quos ipsum, sint, laudantium est magni.",
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-Post-Kedua",
            "author" => "Turangan Josua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo qui tenetur quis commodi sequi laboriosam, ratione excepturi tempora, iste autem, error aliquam? Sit labore optio eligendi. Quo placeat assumenda repellat sapiente, sunt commodi nisi odio nobis id qui, animi cupiditate porro hic? Ab totam nisi velit a, optio perspiciatis? Fugit harum voluptate, accusantium qui debitis repellat corporis possimus fuga ab atque aperiam quae tempora esse modi hic. Blanditiis, ipsam veritatis adipisci molestiae dolorem dicta quos ipsum, sint, laudantium est magni, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo qui tenetur quis commodi sequi laboriosam, ratione excepturi tempora, iste autem, error aliquam? Sit labore optio eligendi. Quo placeat assumenda repellat sapiente, sunt commodi nisi odio nobis id qui, animi cupiditate porro hic? Ab totam nisi velit a, optio perspiciatis? Fugit harum voluptate, accusantium qui debitis repellat corporis possimus fuga ab atque aperiam quae tempora esse modi hic. Blanditiis, ipsam veritatis adipisci molestiae dolorem dicta quos ipsum, sint, laudantium est magni",
    
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }

}
