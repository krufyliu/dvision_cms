<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CareerJob;
use Validator;

class CareerJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerjobs = CareerJob::orderBy('created_at', 'desc')->with('creator')->paginate(10);
        return view('admin.careerjob.index', ['careerjobs' => $careerjobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.careerjob.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
