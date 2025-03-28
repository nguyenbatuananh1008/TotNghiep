<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\User;
use App\Traits\MessageTrait;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class GuestAboutController extends Controller
{
    use MessageTrait;
    public function index()
    {
        $guest = User::find(get_data_user('users'));
        return view('guest::about.index', compact('guest'));
    }

    public function store(Request $request)
    {
        try{
            $guest = User::find(get_data_user('users'));
            $guest->about = $request->about;
            $guest->save();
            $this->showMessagesSuccess("Cập nhật thành công");
        }catch (\Exception $exception)
        {
            $this->showMessagesError("Cập nhật thất bại");
            Log::error("[GuestAboutController: ]". $exception->getMessage());
        }

        return redirect()->back();
    }
}
