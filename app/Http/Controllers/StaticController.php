<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CareerJob;
use App\Models\Post;
use App\Models\Video;
use App\Models\Feedback;
use Validator;

class StaticController extends Controller
{
    public function home()
    {
        $videos = Video::orderBy('created_at', 'desc')->with(['creator', 'category'])->limit(6)->get();
        return view('home', ['videos' => $videos, 'title' => '首页']);
    }

    public function join()
    {
        $careerjobs = CareerJob::orderBy('created_at', 'desc')->get();
        return view('join', ['careerjobs' => $careerjobs, 'title' => '加入']);
    }

    public function team()
    {
        return view('team', ['title' => '团队']);
    }

    public function contact()
    {
        return view('contact', ['title' => '联系']);
    }

    public function suceess()
    {
        return view('suceess', ['title' => '留言']);
    }

    public function contactSubmit(Request $request)
    {
        $this->contactValidator($request)->validate();
        Feedback::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'content' => $request->input('content'),
            ]
        );
        return redirect()->action('StaticController@suceess');
    }

    protected  function contactValidator(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required'
        ]);
    }

    public function service()
    {
        return view('service', ['title' => '服务']);
    }


    public function news()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('news.index', ['posts' => $posts, 'title' => '文章']);
    }

    public function newsShow($id)
    {
        $post = Post::find($id);
        return view('news.show', ['post' => $post, 'title' => '文章']);
    }

    public function video(Request $request)
    {
        $resource = Video::query();
        if (!empty($request->input('category_id'))) {
            $resource = $resource->where('category_id', $request->input('category_id'));
        }
        $videos = $resource->orderBy('created_at', 'desc')->get();
        return view('video.index', ['videos' => $videos, 'title' => '视频']);
    }

    public function videoShow($id)
    {
        $video = Video::find($id);
        return view('video.show', ['video' => $video, 'title' => '视频']);
    }

    public function zshuang() {
        return view('zshuang');    
    }

}
