<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.feedback.index', ['feedbacks' => $feedbacks]);
    }

    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return $this->successJsonResponse();
    }


    protected function successJsonResponse(array $extra = null) {
        $ret = ['err_code' => '0', 'err_msg' => 'SUCCESS'];
        if (!empty($extra)) {
            array_merge($ret, $extra);
        }
        return response()->json($ret);
    }

    protected function errorJsonResponse($code, $message) {
        return response()->json(['err_code' => $code, 'err_msg' => $message]);
    }
}
