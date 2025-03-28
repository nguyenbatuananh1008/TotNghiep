<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Configuration;
use App\Models\System\PayHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $presenter = $request->presenter;
        return view('pages.auth.register', compact('presenter'));
    }

    public function postRegister(RegisterRequest $request)
    {
        try {
            $configuration = Configuration::first();
            $is_guest      = 0;
            if ($request->is_guest)
                $is_guest = 1;

            $user = User::create([
                'name'     => $request->name,
                'slug'     => Str::slug($request->name),
                'email'    => $request->email,
                'phone'    => $request->phone,
                'point'    => $configuration->point_register ?? 0,
                'password' => bcrypt($request->password),
                'is_guest' => $is_guest,
            ]);

            if (!$user) return redirect()->back();
            $html = "Tài khoản được cộng thêm " . ($configuration->point_register ?? 0) . " từ việc đăng ký lần đầu";
            PayHistory::insert([
                'ph_user_id'     => $user->id,
                'ph_credit'      => $configuration->point_register ?? 0,
                'ph_balance'     => $user->point,
                'ph_status'      => 1,
                'ph_month'       => date('m'),
                'ph_type'        => PayHistory::TYPE_REGISTER,
                'ph_meta_detail' => $html,
                'ph_year'        => date('Y'),
                'created_at'     => Carbon::now()
            ]);

            // Tìm người giới thiệu
            if ($presenter = $request->presenter) {
                $presenter  = (int)$presenter;
                $userFriend = User::find($presenter);
                if ($userFriend) {
                    $user->presenter_id = $presenter;
                    $user->save();
                }
            }

            if (\Auth::guard('users')->loginUsingId($user->id)) {
                \Session::flash('toastr', [
                    'type'    => 'success',
                    'message' => 'Đăng ký thành công'
                ]);

                if ($is_guest == 1) return redirect()->route('get_guest.index');
                return redirect()->route('get_user.info');
            }
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
        }

        return redirect('/');
    }
}
