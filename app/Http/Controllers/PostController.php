<?php

namespace App\Http\Controllers;

use App\Models\AuthorInfo;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::query()->where([['active', '=', 1], ['showcase', '=', 1]])->whereDate('published_at', '<', Carbon::now())
        ->orderBy('published_at', 'asc')->paginate(4);
        $author = AuthorInfo::first();
        return view('home', compact(['posts', 'author']));
    }

    public function indexProjects()
    {
        $posts = Post::query()->where('active', '=', 1)->whereDate('published_at', '<', Carbon::now())
        ->orderBy('created_at', 'desc')->paginate(6);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
