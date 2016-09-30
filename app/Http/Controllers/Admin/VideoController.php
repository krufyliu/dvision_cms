<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Video;
use Validator;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->with('creator')->paginate(10);
        return view('admin.video.index', ['videos' => $videos]);
    }

    public function create()
    {
        //
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        $request->user()->videos()->save($request->only(['title', 'cover_image', 'url', 'description', 'category_id']));
        return redirect('/admin/videos');
    }

    public function show($id)
    {
        return view('admin.video.show', ['video' => Video::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.video.edit', ['video' => Video::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->validator($request)->validate();
        $post = Post::find($id);
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
        return Validator::make($request->all(), [
            'title' => 'required',
            'cover_image' => 'required',
            'url' => 'required',
            'category_id' => 'required|integer|exists:video_categories,id'
        ]);
    }
}
