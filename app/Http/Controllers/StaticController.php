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

    public function aura()
    {
        return view('aura', ['title' => 'AURA 专业级VR拍摄设备']);
    }

    public function aurawork()
    {
        return view('aura_work', ['title' => 'AURA WORK - AURA 专用监看、控制软件']);
    }

    public function aurastudio()
    {
        return view('aura_studio', ['title' => 'AURA STUDIO - AURA 专用 VR 制作软件']);
    }

    public function service()
    {
        return view('service', ['title' => '服务']);
    }

    public function about()
    {
        return view('about', ['title' => '关于我们']);
    }

    public function download()
    {
        return view('download', ['title' => '软件下载']);
    }

    public function join()
    {
        $careerjobs = CareerJob::orderBy('created_at', 'asc')->get();
        return view('join', ['careerjobs' => $careerjobs, 'title' => '人才招聘']);
    }

    public function team()
    {
        return view('team', ['title' => '团队']);
    }

    public function contact()
    {
        return view('contact', ['title' => '联系我们']);
    }

    public function contact_order()
    {
        return view('contact_order', ['title' => '订购']);
    }

    public function success()
    {
        return view('success', ['title' => '提交成功']);
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
        return redirect()->action('StaticController@success');
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

    public function news()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('news', ['posts' => $posts, 'title' => '新闻']);
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
        return view('video', ['videos' => $videos, 'title' => '内容']);
    }

    public function videoShow($id)
    {
        $video = Video::find($id);
        return view('video.show', ['video' => $video, 'title' => $video->title . ' 内容']);
    }

    public function zshuang() {
        return view('zshuang');    
    }

}
