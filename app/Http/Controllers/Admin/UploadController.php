<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class UploadController extends Controller
{

    public function storeImage(Request $request)
    {
        $path = $request->file('file')->store('', 'public');

        return '/storage/' . $path;
    }
}
