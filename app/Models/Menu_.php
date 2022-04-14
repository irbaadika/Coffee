<?php

namespace App\Models;

class Menu
{
    private static $list_menu = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "cat" => "Kategori Pertama",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque placeat libero numquam illum deserunt itaque sunt soluta sapiente quisquam dolor. Ipsa dolorem ad hic, vel id esse eaque eius possimus dicta est? Eos optio nihil iste officiis fugiat beatae? Ratione magnam velit error qui, corporis id distinctio modi rem assumenda?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "cat" => "Kategori Kedua",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et deserunt ipsa perferendis asperiores dolorem quasi illo quia maxime veniam impedit? Reprehenderit facere corporis vitae laborum magni. Optio, voluptates quaerat impedit ea harum repellat amet sit dolorum voluptatem unde alias labore quasi reiciendis aliquid. Sequi velit perspiciatis ea qui dignissimos! Eos, iste at possimus asperiores veniam illo. Ducimus libero ipsum ex a non sequi velit ea magnam obcaecati at ut molestiae asperiores, suscipit tenetur architecto expedita veritatis, repellat corporis quasi impedit. Nemo a illum recusandae, quidem, voluptatibus tempora vitae odit fugit aperiam nesciunt amet aut iste nisi pariatur consequatur! Nobis, sit?"
        ]
    ];

    public static function all(){
        return collect(self::$list_menu);
    }

    public static function find($slug){
        $menus = static::all();
        return $menus->firstWhere('slug',$slug);
    }
}
