<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Models\Video;
use App\Models\VideoCategory;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->with(['creator', 'category'])->paginate(10);
        return view('admin.video.index', ['videos' => $videos]);
    }

    public function create()
    {
        //
        $categories = VideoCategory::all();
        return view('admin.video.create_or_update', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        $request->user()->videos()->create($request->only(['title', 'cover_image', 'url', 'description', 'category_id']));
        return redirect('/admin/videos');
    }

    public function show($id)
    {
        return view('admin.video.show', ['video' => Video::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.video.create_or_update', ['video' => Video::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->validator($request)->validate();
        $post = Video::find($id);
        $post->update($request->only(['title', 'cover_image', 'url', 'description', 'category_id']));
        return redirect('/admin/videos');
    }

    public function destroy($id)
    {
        Video::find($id)->delete();
        return redirect('/admin/videos');
    }

    protected function validator(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'title' => 'required',
            'cover_image' => 'required',
            'url.audio' => 'required|url',
            'url.video_720p' => 'required|url',
            'url.video_1080p' => 'required|url',
            'category_id' => 'required|integer|exists:video_categories,id'
        ]);
        $validator->setAttributenames([
            'url.audio' => '音频链接',
            'url.video_720p' => '720P视频链接',
            'url.video_1080p' => '1080P视频链接',
            'category_id' => '分类',
        ]);
        return $validator;
    }
}
