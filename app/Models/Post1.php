<?php

namespace App\Models;


class Post1
{
    private static $blog_posts = [
        [
            "title" => "Judul First Post",
            "slug" => "first-post",
            "author" => "Dendi Paugus Sukmaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias reprehenderit corrupti consectetur voluptatum, assumenda cumque, amet explicabo dignissimos dicta atque rerum incidunt ut. Quae deserunt tenetur nam totam consequuntur aperiam debitis excepturi ut modi hic quaerat provident in quas minus voluptates expedita velit repellat, fugit obcaecati assumenda! Unde ad eaque sapiente reprehenderit delectus culpa molestiae similique, eos ea veritatis amet aliquid odio praesentium deserunt atque sed minus! Optio, ab quos?"
        ],
        [
            "title" => "Judul Second Post",
            "slug" => "second-post",
            "author" => "John Doe",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laudantium id sint nam obcaecati. Magni veritatis voluptate quaerat voluptas! Quasi eligendi dolores eum praesentium omnis laborum doloribus deserunt. Ab maiores fuga voluptates qui molestiae delectus non, quos placeat at eveniet ratione ipsam, distinctio tempora numquam sed deserunt reprehenderit, mollitia ipsa?" 
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
