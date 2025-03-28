<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\User;
use App\Traits\MessageTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class GuestInfoController extends Controller
{
    use MessageTrait;
    public function index()
    {
        $user = User::find(get_data_user('users'));

        return view('guest::info.index', compact('user'));
    }

    public function store(Request $request)
    {
        try{
            $user               = User::find(get_data_user('users'));
            $user->name         = $request->name;
            $user->email        = $request->email;
            $user->address      = $request->address;
            $user->name_support = $request->name_support;
            $user->about_price = $request->about_price;
            if ($request->avatar) {
                $image = upload_image('avatar');
                if ($image['code'] == 1)
                    $user->avatar = $image['name'];

            }

            if ($request->password) $user->password = bcrypt($request->password);
            $user->save();
            $this->showMessagesSuccess('Cập nhật thành công');
        }catch (\Exception $exception)
        {
            Log::error("Update info Guest:GuestInfoController ". $exception->getMessage());
            $this->showMessagesError("Cập nhật thất bại");
        }

        return redirect()->route('get_guest.info');
    }
}
