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
        $careerjobs = CareerJob::orderBy('created_at', 'desc')->with('creator')->paginate(10);
        return view('admin.careerjob.index', ['careerjobs' => $careerjobs]);
    }

    public function create()
    {
        //
        return view('admin.careerjob.create');
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        CareerJob::create([
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'department' => $request->department,
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
        $careerjob = CareerJob::find($id);
        return view('admin.careerjob.edit', ['careerjob' => $careerjob]);
    }

    public function update(Request $request, $id)
    {
        $careerjob = CareerJob::find($id);
        $this->validator($request)->validate();
        $careerjob->update($request->only(['title', 'description', 'location', 'department']));
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
            "department" => "required"
        ]);
    }
}
