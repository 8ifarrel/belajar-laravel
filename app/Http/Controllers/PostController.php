<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = "$category->name Category Posts";
        } elseif (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = "Post by $author->name";
        } else {
            $title = "All Post";
        }

        return view('posts', [
            "title" => $title,
            "active" => 'posts',
            "posts" => Post::with(['author', 'category'])->latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            'active' => 'posts',
            "post" => $post
        ]);
    }

    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }

    // public function category(Category $category)
    // {
    //     return view('posts', [
    //         'title' => "$category->name Category Posts",
    //         'active' => 'posts',
    //         'posts' => $category->posts->load('category', 'user')
    //     ]);
    // }

    // public function author(User $user)
    // {
    //     return view('posts', [
    //         'title' => "Posts by $user->name",
    //         'active' => 'posts',
    //         'posts' => $user->posts->load('category', 'user')
    //     ]);
    // }
}
