<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Farrel Sirah",
        "email" => "farrelsirah@gmail.com",
        "image" => "chika-fujiwara.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
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
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $blog_post = [
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

    $current_post = [];
    foreach($blog_post as $post ) {
        if($post["slug"] === $slug) {
            $current_post = $post;
        }
    }

    return view('post', [
        "title" => $current_post["title"],
        "post" => $current_post
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
