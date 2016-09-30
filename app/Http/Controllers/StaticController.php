<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CareerJob;

class StaticController extends Controller
{
    public function join()
    {
        $careerjobs = CareerJob::orderBy('created_at', 'desc')->get();
        // return view('admin.careerjob.index', ['careerjobs' => $careerjobs]);
        return view('join', ['careerjobs' => $careerjobs]);
    }

}
