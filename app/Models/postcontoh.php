<?php

namespace App\Models;





class post {
     private static $blog_post = [
        [
        "title" => "Facebook",
        "slug" => "facebook",
        "author" => "Nico Ariest Putra",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi culpa alia
        s cumque ea consectetur. Earum, maxime dolorem nesciunt, minima incidunt praesentium molestias nostrum soluta asperiores voluptates eum consequuntur necessitatibus consectetur.",
        ],
        [
        "title" => "Instagram",
        "slug" => "instagram",
        "author" => "Nico Ariest ",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi fugiat minima non nostrum tempora, obcaecati unde laboriosam sapiente vel, rerum repellat nobis necessitatibus voluptatibus aliquid temporibus, dignissimos blanditiis hic et iure cupiditate. Recusandae, cupiditate perferendis. Totam quia dolorum eligendi voluptate, natus possimus ad porro nobis corporis magnam at ullam, aliquid provident. Voluptatum cupiditate vel iste maiores tenetur laborum hic, quisquam iusto quae et eaque temporibus reprehenderit quo nam omnis nesciunt consectetur nemo facere atque dignissimos eveniet impedit ducimus quidem. Perferendis asperiores corrupti adipisci atque eligendi ipsum id nam mollitia, enim et, dignissimos porro. Veritatis at velit esse voluptatibus nemo sequi?",
        ]
    ];
    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug) {
        $posts = static::all();
return $posts->firstWhere('slug', $slug);
    }
}
