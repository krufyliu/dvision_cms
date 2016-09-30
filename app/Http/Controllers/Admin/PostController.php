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
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'cover_image' => $request->cover_image,
                'status' => 1,
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
        return view('admin.post.edit', ['post' => Post::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validator($request)->validate();
        $post->update($request->only(['title', 'cover_image', 'content']));
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
            'content' => 'required'
        ]);
    }
}
