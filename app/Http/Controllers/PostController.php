<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {
        if ($request->category) {
            $posts = Post::latest()->where('category', $request->category)->paginate(5);
        } else {
            $posts = Post::latest()->paginate(5);
        }

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post) {

        $related_posts = Post::latest()->where('category', $post->category)->orderBy('created_at', 'desc')->take(3)->get();

        return view('posts.show', [
            'post' => $post,
            'related_posts' => $related_posts
        ]);
    }
}
