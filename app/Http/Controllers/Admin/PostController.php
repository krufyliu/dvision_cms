<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use Validator;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->with('creator')->paginate(10);
        return view('admin.post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.post.create_or_update');
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        Post::create([
                'title' => $request->input('title'),
                'link' => $request->input('link'),
                'cover_image' => $request->input('cover_image'),
                'status' => 1,
                'content' => '',
                'creator_id' => $request->user()->id
            ]
        );
        return redirect()->action('Admin\PostController@index');
    }

    public function show($id)
    {
        // return view('admin.post.show', ['post' => Post::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.post.create_or_update', ['post' => Post::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validator($request)->validate();
        $post->update($request->only(['title', 'cover_image', 'link']));
        return redirect()->action('Admin\PostController@index');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->action('Admin\PostController@index');
    }

    protected  function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'title' => 'required',
            'cover_image' => 'required',
            'link' => 'required'
        ]);
    }
}
