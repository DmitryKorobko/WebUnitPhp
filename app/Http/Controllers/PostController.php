<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Post;

class PostController extends Controller
{
    /**
     * Show the post by id.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the list of posts.
     *
     * @return View
     */
    public function index()
    {
        $posts = Post::get();

        return view('post.index', ['posts' => $posts]);
    }
}
