<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Feedback;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportExcel()
    {
        Excel::create('用户留言', function($excel) {
            $excel->setTitle('量子视觉官网用户留言');
            $excel->setCreator('');
            $excel->setDescription('量子视觉官网用户留言Excel导出');
            $excel->sheet('First sheet', function($sheet) {
                $data = $this->prepareExcelData();
                $sheet->rows($data);
                $endLine = count($data)+1;
                for($i = 1; $i <= $endLine; $i++) {
                    $sheet->setSize("A{$i}", 30, 30);
                    $sheet->setSize("B{$i}", 30, 30);
                    $sheet->setSize("C{$i}", 30, 30);
                    $sheet->setSize("D{$i}", 30, 30);
                    $sheet->setSize("E{$i}", 30, 30);
                }
            });
        })->export('xls');
    }

    protected function prepareExcelData() {
        $headers = [
            'name' => '公司或个人名称',
            'phone' => '联系电话',
            'email' => '联系邮箱',
            'content' => '留言内容',
            'created_at' => '留言时间'
        ];
        $data = Feedback::all()->map(function($f, $k) {
            return [
                $f->name, $f->phone, $f->email, $f->content, $f->created_at
            ];
        })->all();
        array_unshift($data, array_values($headers));
        return $data;
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
