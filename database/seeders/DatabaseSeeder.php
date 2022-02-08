<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        // User::create([
        //     'name' => 'sandika',
        //     'email' => 'sandika@gmail.com',
        //     'password' => bcrypt('23232')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => ' Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, nostrum sequi veniam voluptate quas inventore.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum et soluta beatae incidunt animi dolores nam quae veritatis quas dicta voluptatibus nulla ex delectus, magni odit cumque molestias aliquam a porro sed laborum voluptas? Nam, culpa est explicabo delectus eius consequuntur nesciunt debitis ab rem sed repellat dolorum omnis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => ' Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, nostrum sequi veniam voluptate quas inventore.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum et soluta beatae incidunt animi dolores nam quae veritatis quas dicta voluptatibus nulla ex delectus, magni odit cumque molestias aliquam a porro sed laborum voluptas? Nam, culpa est explicabo delectus eius consequuntur nesciunt debitis ab rem sed repellat dolorum omnis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => ' Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, nostrum sequi veniam voluptate quas inventore.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum et soluta beatae incidunt animi dolores nam quae veritatis quas dicta voluptatibus nulla ex delectus, magni odit cumque molestias aliquam a porro sed laborum voluptas? Nam, culpa est explicabo delectus eius consequuntur nesciunt debitis ab rem sed repellat dolorum omnis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        Post::factory(20)->create();
    }
}
