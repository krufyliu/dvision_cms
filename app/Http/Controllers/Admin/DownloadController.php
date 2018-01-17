<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Download;
use Validator;

class DownloadController extends Controller
{
    public function index()
    {
        $download =  Download::oldest()->first();
        $download->mini8 = $download->aura['mini8'];
        $download->aura20 = $download->aura['aura20'];
        return view(
            'admin.download.index',
                ['download' => $download]
        );
    }

    public function update(Request $request, $id)
    {
        $download = Download::find($id);
        $download->update(['aura' => [ 'mini8' => $request->input('mini8'), 'aura20' => $request->input('aura20')]]);
        return redirect()->action('Admin\DownloadController@index');
    }
}
