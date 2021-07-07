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
        Excel::create(date('YmdHi') . '用户留言', function($excel) {
            $excel->setTitle('量子视觉官网用户留言');
            $excel->setCreator('');
            $excel->setDescription('量子视觉官网用户留言Excel导出');
            $excel->sheet('First sheet', function($sheet) {
                $data = $this->prepareExcelData();
                $sheet->rows($data);
                $endLine = count($data)+1;
                $sheet->cells("A1:F1", function($cells) {
                    $cells->setBackground('#3aafd6');
                });
                $sheet->setFontFamily('MicrosoftYahei');
                $sheet->setAutoSize(true);
                for($i = 1; $i <= $endLine; $i++) {
                    $sheet->setWidth("E", 94);
                    $sheet->cells("A{$i}:F{$i}", function($cells) {
                        $cells->setAlignment('left');
                        $cells->setValignment('top');

                    });
                }
            });
        })->export('xls');
    }

    public function utf8_str_split($str, $split_len = 1) {
        if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
            return FALSE;
    
        $len = mb_strlen($str, 'UTF-8');
        if ($len <= $split_len)
            return array($str);
    
        preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);
    
        return $ar[0];
    }

    protected function prepareExcelData() {
        $headers = [
            'type' => '类型',
            'name' => '公司或个人名称',
            'phone' => '联系电话',
            'email' => '联系邮箱',
            'content' => '留言内容',
            'created_at' => '留言时间'
        ];
        $data = Feedback::orderBy('created_at', 'desc')->get()->map(function($f, $k) {
            $sub_content = $this->utf8_str_split($f->content, 50);
            $new_content = join("\n", $sub_content);
            return [
                $f->getTypeString(), $f->name, $f->phone, $f->email, $new_content, $f->created_at
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
