<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Blog Pertama",
            "slug" => "blog-pertama",
            "author" => "Farrel Sirah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum laboriosam odio pariatur sed, labore iure. Similique distinctio, sed perferendis cum possimus ipsam pariatur, temporibus magnam ducimus, sint amet optio error alias. Porro sint odit qui, consectetur quaerat quia fugiat ad quo facilis nihil aut harum possimus mollitia tenetur cum rerum ipsum eligendi impedit soluta voluptatibus. Odit reiciendis id officia autem beatae, porro rem laboriosam sint officiis eum tempore est?"
        ],
        [
            "title" => "Blog Kedua",
            "slug" => "blog-kedua",
            "author" => "Lenggo Geni",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi magni eveniet provident quod unde, officiis illo blanditiis numquam quisquam velit neque molestiae repellat, nulla quae aliquam doloremque? Suscipit ea nostrum praesentium, iusto sint expedita, sit vitae assumenda cum voluptatum saepe modi labore amet itaque temporibus corporis repellendus consectetur! Aut earum incidunt impedit excepturi itaque quasi placeat temporibus quaerat neque consectetur. Mollitia eum distinctio odio iure iste non. Aperiam placeat magnam saepe eligendi voluptas optio consequatur, ipsum, nihil quos atque vel aliquam repellendus? Eaque fugiat deleniti sint voluptatum. Harum neque perferendis velit quasi placeat, alias libero, esse odio eveniet consequuntur qui?"
        ]
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
