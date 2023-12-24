<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $title    = ' in ' . $category->name;
        }
        if (request('author'))
        {
            $author = User::firstWhere('username', request('author'));
            $title  = ' by ' . $author->name;
        }

        return view('front-end.posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::latest()->get(),
            "posts" => Post::latest()->filter(request(['cari', 'category', 'author']))
                        ->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('front-end.post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}