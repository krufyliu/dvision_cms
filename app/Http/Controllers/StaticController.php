<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CareerJob;
use App\Models\Post;

class StaticController extends Controller
{
    public function join()
    {
        $careerjobs = CareerJob::orderBy('created_at', 'desc')->get();
        return view('join', ['careerjobs' => $careerjobs]);
    }

    public function news()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('news.index', ['posts' => $posts]);
    }

    public function newsShow($id)
    {
        $post = Post::find($id);
        return view('news.show', ['post' => $post]);
    }

}
