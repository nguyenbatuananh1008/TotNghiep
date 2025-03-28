<?php

namespace Modules\Drive\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DriveLoginController extends Controller
{
    public function getLogin()
    {
        return view('drive::auth.login');
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('phone', 'password');

        if (\Auth::guard('drives')->attempt($data))
        {
            \Session::flash('toastr', [
                'type'    => 'success',
                'message' => 'Đăng nhập thành công'
            ]);


            return redirect()->route('get_drive.dashboard');
        }

        \Session::flash('toastr', [
            'type'    => 'error',
            'message' => 'Đăng nhập thất bại'
        ]);

        return redirect()->back()->withInput()->with(['error_login' => 'Email/Số điện thoại hoặc mật khẩu sai!']);
    }
}
