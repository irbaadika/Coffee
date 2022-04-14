<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Irba Adika Jaya',
            'username' => 'irbaadika',
            'email' => 'irbaadika@gmail.com',
            'password' => bcrypt('irba12345')
        ]);

        Category::create([
            'name' => 'Beverages',
            'slug' => 'beverages'
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);

        Menu::create([
            'title' => 'Caffe Latte',
            'slug' => 'caffe-latte',
            'category_id' => 1,
            'pendek' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cum saepe tempore quo vero debitis rerum dolorum perspiciatis tempora. Provident.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam maiores velit inventore. Asperiores, corporis. Deserunt, praesentium incidunt animi, totam dignissimos maiores numquam perferendis dolores eaque vero voluptatum iure vel odio in dolorem ipsum ratione repellendus necessitatibus ad nemo magni officia cumque facilis? Quia, non quos neque fugiat inventore tempora!'
        ]);
        Menu::create([
            'title' => 'Espresso',
            'slug' => 'espresso',
            'category_id' => 1,
            'pendek' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cum saepe tempore quo vero debitis rerum dolorum perspiciatis tempora. Provident.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam maiores velit inventore. Asperiores, corporis. Deserunt, praesentium incidunt animi, totam dignissimos maiores numquam perferendis dolores eaque vero voluptatum iure vel odio in dolorem ipsum ratione repellendus necessitatibus ad nemo magni officia cumque facilis? Quia, non quos neque fugiat inventore tempora!'
        ]);
        Menu::create([
            'title' => 'Green Tea',
            'slug' => 'green-tea',
            'category_id' => 1,
            'pendek' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cum saepe tempore quo vero debitis rerum dolorum perspiciatis tempora. Provident.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam maiores velit inventore. Asperiores, corporis. Deserunt, praesentium incidunt animi, totam dignissimos maiores numquam perferendis dolores eaque vero voluptatum iure vel odio in dolorem ipsum ratione repellendus necessitatibus ad nemo magni officia cumque facilis? Quia, non quos neque fugiat inventore tempora!'
        ]);
        Menu::create([
            'title' => 'Oreo Cheesecake',
            'slug' => 'oreo-cheesecake',
            'category_id' => 2,
            'pendek' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cum saepe tempore quo vero debitis rerum dolorum perspiciatis tempora. Provident.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam maiores velit inventore. Asperiores, corporis. Deserunt, praesentium incidunt animi, totam dignissimos maiores numquam perferendis dolores eaque vero voluptatum iure vel odio in dolorem ipsum ratione repellendus necessitatibus ad nemo magni officia cumque facilis? Quia, non quos neque fugiat inventore tempora!'
        ]);
        Menu::create([
            'title' => 'Sandwich',
            'slug' => 'sandwich',
            'category_id' => 2,
            'pendek' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident cum saepe tempore quo vero debitis rerum dolorum perspiciatis tempora. Provident.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam maiores velit inventore. Asperiores, corporis. Deserunt, praesentium incidunt animi, totam dignissimos maiores numquam perferendis dolores eaque vero voluptatum iure vel odio in dolorem ipsum ratione repellendus necessitatibus ad nemo magni officia cumque facilis? Quia, non quos neque fugiat inventore tempora!'
        ]);
    }
}
