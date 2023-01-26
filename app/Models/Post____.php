<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Indra",
            "slug" =>  "judul-post-pertama",
            "author" => "Indra Triyadi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat magnam beatae aspernatur velit quia saepe. Accusantium consequatur magnam aliquid mollitia fugiat nostrum vero a nisi eius fugit dolorum laboriosam praesentium in error, odio possimus. Ex quo corporis neque minima repudiandae. Harum assumenda veniam repudiandae commodi quae dolore error libero voluptates perferendis modi repellat beatae numquam laborum, mollitia ipsum a, obcaecati tempore quam. Hic soluta id quaerat quidem blanditiis at aperiam repellat sed amet, voluptate reiciendis laboriosam nesciunt similique modi quia molestias explicabo obcaecati quod dolores rerum, possimus excepturi fugit officiis? Nulla perspiciatis culpa velit odio totam debitis id ad eaque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Indra Triyadi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat magnam beatae aspernatur velit quia saepe. Accusantium consequatur magnam aliquid mollitia fugiat nostrum vero a nisi eius fugit dolorum laboriosam praesentium in error, odio possimus. Ex quo corporis neque minima repudiandae. Harum assumenda veniam repudiandae commodi quae dolore error libero voluptates perferendis modi repellat beatae numquam laborum, mollitia ipsum a, obcaecati tempore quam. Hic soluta id quaerat quidem blanditiis at aperiam repellat sed amet, voluptate reiciendis laboriosam nesciunt similique modi quia molestias explicabo obcaecati quod dolores rerum, possimus excepturi fugit officiis? Nulla perspiciatis culpa velit odio totam debitis id ad eaque?"
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