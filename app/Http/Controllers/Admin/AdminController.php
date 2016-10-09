<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        $this->validator($request)->validate();
        Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'need_change_password' => true
        ]);
        return redirect('/admin/admins');
    }

    public function edit(Admin $admin)
    {
        return view('admin.admin.edit', compact('admin'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $this->updateValidator($request)->validate();
        $admin = $request->user();
        $admin->name = $request->input('name');
        if (!empty($request->input('new_password'))) {
            $admin->password = bcrypt($request->input('new_password'));
        }
        $admin->save();
        Session::flash('flash_message_success', '信息更新成功');
        return redirect()->back();
    }

    protected function validator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6'
        ]);
        return $validator;
    }

    protected function updateValidator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'old_password' => 'required',
        ]);
        $validator->sometimes('new_password', 'min:6|confirmed', function($input) {
           return !empty($input->new_password);
        });
        $validator->after(function($validator) use ($request) {
            if (!password_verify($request->input('old_password'), $request->user()->getAuthPassword())) {
                $validator->errors()->add('old_password', "原始密码不正确");
            }
        });
        $validator->setAttributeNames([
           'new_password' => '新密码'
        ]);
        return $validator;
    }
}
