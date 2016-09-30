<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConfigController extends Controller
{
    public function create()
    {
        return view('admin.config.create');
    }
}
