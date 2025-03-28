<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if(get_data_user('users')) return redirect()->route('get_user.info');

        return view('pages.auth.login');
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('phone', 'password');

        if (\Auth::guard('users')->attempt($data))
        {
            \Session::flash('toastr', [
                'type'    => 'success',
                'message' => 'Đăng nhập thành công'
            ]);


            if(get_data_user('users','is_guest')  == 1) return redirect()->route('get_guest.index');
            return redirect()->route('get_user.info');
        }

        \Session::flash('toastr', [
            'type'    => 'error',
            'message' => 'Đăng nhập thất bại'
        ]);

        return redirect()->back()->withInput()->with(['error_login' => 'Email/Số điện thoại hoặc mật khẩu sai!']);
    }

    public function getLogout()
    {
        \Auth::guard('users')->logout();
        return redirect('/');
    }
}
