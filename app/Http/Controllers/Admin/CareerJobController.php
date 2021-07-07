<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CareerJob;
use Validator;

class CareerJobController extends Controller
{

    public function index()
    {
        $career_jobs = CareerJob::orderBy('created_at', 'desc')->with('creator')->paginate(10);
        return view('admin.career_job.index', ['career_jobs' => $career_jobs]);
    }

    public function create()
    {
        return view('admin.career_job.create_or_update');
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        CareerJob::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'location' => $request->input('location'),
                'cover_image' => $request->input('cover_image'),
                'department' => $request->input('department'),
                'status' => 1,
                'creator_id' => $request->user()->id
            ]
        );
        return redirect()->action('Admin\CareerJobController@index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $career_job = CareerJob::find($id);
        return view('admin.career_job.create_or_update', ['career_job' => $career_job]);
    }

    public function update(Request $request, $id)
    {
        $career_job = CareerJob::find($id);
        $this->validator($request)->validate();
        $career_job->update($request->only(['title', 'description', 'cover_image', 'location', 'department']));
        return redirect()->action('Admin\CareerJobController@index');
    }

    public function destroy($id)
    {
        CareerJob::find($id)->delete();
        return redirect()->action('Admin\CareerJobController@index');
    }

    protected function validator(Request $request)
    {
        return Validator::make($request->all(), [
            "title" => "required",
            "description" => "required",
            "location" => "required",
            "department" => "required",
            "cover_image" => "required"
        ]);
    }
}
