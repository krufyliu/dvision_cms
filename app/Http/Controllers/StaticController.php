<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CareerJob;
use App\Models\Post;
use App\Models\Video;

class StaticController extends Controller
{
    public function home()
    {
        $videos = Video::orderBy('created_at', 'desc')->with(['creator', 'category'])->limit(6)->get();
        return view('home', ['videos' => $videos]);
    }

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

    public function video(Request $request)
    {
        $resource = Video::query();
        if (!empty($request->input('category_id'))) {
            $resource = $resource->where('category_id', $request->input('category_id'));
        }
        $videos = $resource->orderBy('created_at', 'desc')->get();
        return view('video.index', compact('videos'));
    }

    public function videoShow($id)
    {
        $video = Video::find($id);
        return view('video.show', ['video' => $video]);
    }

}
