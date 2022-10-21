<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agung Septiana",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, sunt eligendi laborum nam quasi deserunt amet fuga corporis animi reiciendis quam incidunt delectus minus, quos aliquam obcaecati quas, consequuntur in nulla! Adipisci, reiciendis. Laboriosam laudantium nam totam consectetur, iusto provident vitae, labore, corporis illo error aspernatur quasi? Quia, officia qui, accusantium dolore amet placeat deleniti earum delectus odio quod eos aut error necessitatibus perferendis, rerum excepturi recusandae. Harum, voluptatibus quisquam soluta earum, commodi laudantium fugit quo ipsa, enim ipsam eum?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Xiao yan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit ea in accusamus. At illo dolorem magni recusandae molestiae incidunt ut, sit a dicta consequatur asperiores fugiat? Doloribus vero voluptatem minus! Nulla explicabo voluptatum consequatur et beatae omnis, rerum cupiditate fugit temporibus, animi dolorem? Nemo omnis fugit in dicta animi iure consequuntur, vitae hic officiis saepe placeat non nihil, illum nisi quidem sed sint ut libero quia eos maxime unde pariatur perferendis! Animi harum et magnam reiciendis officia velit, autem reprehenderit sapiente aliquam totam eum explicabo soluta ullam omnis vitae facere nobis voluptates dolor placeat. Odio officiis consequatur consectetur ducimus id."
        ]
    ];


    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    
}
