<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use App\Traits\MessageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Guest\Http\Requests\GuestRequestDrive;

class GuestDriveController extends Controller
{
    use MessageTrait;

    public function index()
    {
        $drives     = User::where('is_drive', 1)->orderByDesc('id')->get();
        $levelDrive = (new User())->levelDrive;

        $viewData = [
            'drives'     => $drives,
            'levelDrive' => $levelDrive
        ];
        return view('guest::drive.index', $viewData);
    }

    public function create()
    {
        return view('guest::drive.create');
    }

    public function store(GuestRequestDrive $request)
    {
        try {
            $user = User::create([
                'name'     => $request->name,
                'slug'     => Str::slug($request->name),
                'email'    => $request->email,
                'phone'    => $request->phone,
                'guest_id' => get_data_user('users'),
                'password' => bcrypt($request->password),
                'is_drive' => 1
            ]);
            $this->showMessagesSuccess("Thêm mới thành công");
        } catch (\Exception $exception) {
            $this->showMessagesError("Thêm mới thất bại");
        }

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {

            $user = User::where([
                'guest_id' => get_data_user('users'),
                'is_drive' => 1
            ])->first();

            if ($user) {
                $user->is_drive = 0;
                $user->guest_id = 0;
                $user->save();
            }

            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }

}
