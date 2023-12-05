<?php

namespace App\Models;

class Post
{
        private static $blog_posts = [
            [
                "title" => "Judul Post Achmad",
                "slug" => "judul-post-pertama",
                "author" => "Achmad Ifal",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius distinctio neque dolorem. Similique accusantium molestias, id excepturi quas nostrum ad aperiam quidem commodi magni libero odio, fugiat eaque beatae repellat vel? Porro, debitis veritatis assumenda modi illo quis labore, delectus natus voluptate explicabo quidem distinctio quisquam deleniti? Esse at sapiente harum? Blanditiis rem unde veritatis facilis error id magni dignissimos aliquid vero, quos quas odio accusantium, dolores provident sequi perspiciatis nam reiciendis neque eligendi fugit eum ipsa? Cumque accusamus excepturi dignissimos inventore, optio dolorum numquam atque vel animi. Non optio molestias minus quam accusantium vel commodi quaerat, magni soluta. Odio."
            ],
            [
                "title" => "Judul Post Ifal",
                "slug" => "judul-post-kedua",
                "author" => "Al Farazy",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius distinctio neque dolorem. Similique accusantium molestias, id excepturi quas nostrum ad aperiam quidem commodi magni libero odio, fugiat eaque beatae repellat vel? Porro, debitis veritatis assumenda modi illo quis labore, delectus natus voluptate explicabo quidem distinctio quisquam deleniti? Esse at sapiente harum? Blanditiis rem unde veritatis facilis error id magni dignissimos aliquid vero, quos quas odio accusantium, dolores provident sequi perspiciatis nam reiciendis neque eligendi fugit eum ipsa? Cumque accusamus excepturi dignissimos inventore, optio dolorum numquam atque vel animi. Non optio molestias minus quam accusantium vel commodi quaerat, magni soluta. Odio."
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
