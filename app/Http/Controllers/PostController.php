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
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {    
        return view('post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }

    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::with('category')->all()
        ]); 
    }

    public function category(Category $category)
    {
        return view('posts', [
            'title' => "$category->name Category Posts",
            'posts' => $category->posts->load('category', 'user')
        ]);
    }

    public function author(User $user)
    {
        return view('posts', [
            'title' => "Posts by $user->name",
            'posts' => $user->posts->load('category', 'user')
        ]);
    }
}
