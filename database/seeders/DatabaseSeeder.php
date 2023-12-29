<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Farrel Sirah',
        //     'email' => 'farrelsirah@gmail.com',
        //     'password' => bcrypt('mautauaja18')
        // ]);

        // User::create([
        //     'name' => 'Ahmad Dhafin',
        //     'email' => 'adhafin@gmail.com',
        //     'password' => bcrypt('mautauaja18')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Data Analysis',
            'slug' => 'data-analysis'
        ]);

        Category::create([
            'name' => 'Multimedia',
            'slug' => 'multimedia'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Cara Install Python',
        //     'slug' => 'cara-install-python',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam. Veniam provident nesciunt accusantium fugiat nam praesentium commodi. </p><p>Voluptatibus doloremque eius numquam porro laboriosam quae culpa quisquam quos aliquid perspiciatis, reprehenderit architecto ipsam ullam laborum nihil aut nemo fuga! Temporibus asperiores ipsum voluptatem praesentium nisi qui! Laudantium totam corporis voluptates fugit soluta fuga! Velit culpa excepturi eaque necessitatibus nobis iure nihil tempore voluptatem minus accusamus quisquam reprehenderit.</p><p>Odio possimus error amet eius mollitia ab quis facilis? Fugiat, corrupti quisquam facilis natus porro sunt quo libero! Quo ullam at eos placeat necessitatibus a, sequi porro autem, nulla amet eaque ut, modi cupiditate voluptas praesentium magnam odit quibusdam saepe. Illum repudiandae repellendus ea consequatur praesentium ducimus nostrum. Non eaque molestias quibusdam, laudantium architecto aspernatur asperiores? Eos dolor iste recusandae expedita error obcaecati eveniet in!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Memahami Pointer C++ dengan Mudah',
        //     'slug' => 'memahami-pointer-cpp-dengan-mudah',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam. Veniam provident nesciunt accusantium fugiat nam praesentium commodi. </p><p>Voluptatibus doloremque eius numquam porro laboriosam quae culpa quisquam quos aliquid perspiciatis, reprehenderit architecto ipsam ullam laborum nihil aut nemo fuga! Temporibus asperiores ipsum voluptatem praesentium nisi qui! Laudantium totam corporis voluptates fugit soluta fuga! Velit culpa excepturi eaque necessitatibus nobis iure nihil tempore voluptatem minus accusamus quisquam reprehenderit.</p><p>Odio possimus error amet eius mollitia ab quis facilis? Fugiat, corrupti quisquam facilis natus porro sunt quo libero! Quo ullam at eos placeat necessitatibus a, sequi porro autem, nulla amet eaque ut, modi cupiditate voluptas praesentium magnam odit quibusdam saepe. Illum repudiandae repellendus ea consequatur praesentium ducimus nostrum. Non eaque molestias quibusdam, laudantium architecto aspernatur asperiores? Eos dolor iste recusandae expedita error obcaecati eveniet in!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Membuat Linked List dalam C++',
        //     'slug' => 'membuat-linked-list-dalam-cpp',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam. Veniam provident nesciunt accusantium fugiat nam praesentium commodi. </p><p>Voluptatibus doloremque eius numquam porro laboriosam quae culpa quisquam quos aliquid perspiciatis, reprehenderit architecto ipsam ullam laborum nihil aut nemo fuga! Temporibus asperiores ipsum voluptatem praesentium nisi qui! Laudantium totam corporis voluptates fugit soluta fuga! Velit culpa excepturi eaque necessitatibus nobis iure nihil tempore voluptatem minus accusamus quisquam reprehenderit.</p><p>Odio possimus error amet eius mollitia ab quis facilis? Fugiat, corrupti quisquam facilis natus porro sunt quo libero! Quo ullam at eos placeat necessitatibus a, sequi porro autem, nulla amet eaque ut, modi cupiditate voluptas praesentium magnam odit quibusdam saepe. Illum repudiandae repellendus ea consequatur praesentium ducimus nostrum. Non eaque molestias quibusdam, laudantium architecto aspernatur asperiores? Eos dolor iste recusandae expedita error obcaecati eveniet in!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Belajar dari Pengalaman',
        //     'slug' => 'belajar-dari-pengalaman',
        //     'category_id' => 4,
        //     'user_id' => 2,
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis? A beatae unde cupiditate rerum itaque repellendus omnis voluptate fuga recusandae quis molestiae libero vitae ipsum hic quam. Veniam provident nesciunt accusantium fugiat nam praesentium commodi. </p><p>Voluptatibus doloremque eius numquam porro laboriosam quae culpa quisquam quos aliquid perspiciatis, reprehenderit architecto ipsam ullam laborum nihil aut nemo fuga! Temporibus asperiores ipsum voluptatem praesentium nisi qui! Laudantium totam corporis voluptates fugit soluta fuga! Velit culpa excepturi eaque necessitatibus nobis iure nihil tempore voluptatem minus accusamus quisquam reprehenderit.</p><p>Odio possimus error amet eius mollitia ab quis facilis? Fugiat, corrupti quisquam facilis natus porro sunt quo libero! Quo ullam at eos placeat necessitatibus a, sequi porro autem, nulla amet eaque ut, modi cupiditate voluptas praesentium magnam odit quibusdam saepe. Illum repudiandae repellendus ea consequatur praesentium ducimus nostrum. Non eaque molestias quibusdam, laudantium architecto aspernatur asperiores? Eos dolor iste recusandae expedita error obcaecati eveniet in!</p>'
        // ]);
    }
}
