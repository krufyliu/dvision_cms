<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Models\VideoCategory;

class VideoCategoryController extends Controller
{
    public function store(Request $request)
    {
        $this->validator($request)->validate();
        $videoCategory = new VideoCategory();
        $videoCategory->title  = $request->input('title');
        $videoCategory->creator_id = $request->user()->id;
        $videoCategory->save();
        return response()->json([
            'err_code' => '0',
            'err_msg' => 'SUCCESS',
            'category' => $videoCategory
        ]);
    }

    protected function validator(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'title' => 'required|unique:video_categories'
        ]);
        $validator->setAttributeNames([
            'title' => '分类名'
        ]);
        return $validator;
    }
}
