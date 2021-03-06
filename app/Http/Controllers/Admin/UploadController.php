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

    public function storeFile(Request $request)
    {
        $output_dir = storage_path()."/app/public/";
        if(isset($_FILES["myfile"]))
        {
            $ret = array();

            if(!is_array($_FILES["myfile"]["name"])) //single file
            {
                $fileName = $request->file('myfile')->store('', 'public');
                $ret[]= $fileName;
            }
            else  //Multiple files, file[]
            {
              $allFiles = $request->allFiles();
              foreach($allFiles as $file) {
                $fileName = $request->file('myfile')->store('', 'public');
                $ret[]= $fileName;
              }

            }
            return json_encode($ret);
         }
    }

    public function deleteFile(Request $request)
    {
        $output_dir = storage_path()."/app/public/";
        if(isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name']))
        {
            $fileName =$_POST['name'];
            $fileName=str_replace("..",".",$fileName); //required. if somebody is trying parent folder files
            $filePath = $output_dir. $fileName;
            if (file_exists($filePath))
            {
                unlink($filePath);
            }
            return "Deleted File ".$fileName." success";
        }

    }
}
