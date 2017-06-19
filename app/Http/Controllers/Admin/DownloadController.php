<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Download;
use Validator;

class DownloadController extends Controller
{
    public function index() {
        $download =  Download::oldest()->first();
        return view('admin.download.index', 
                ['download' => $download]);
    }

    public function update(Request $request, $id)
    {
        $download = Download::find($id);
        $download->update($request->only(['aura']));
        return redirect()->action('Admin\DownloadController@index');
    }
}
