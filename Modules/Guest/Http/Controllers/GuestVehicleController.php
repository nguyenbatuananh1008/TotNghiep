<?php

namespace Modules\Guest\Http\Controllers;

use App\Traits\MessageTrait;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Guest\Entities\Vehicle;

class GuestVehicleController extends Controller
{
    use MessageTrait;
    public function index()
    {
        $vehicles = Vehicle::where('v_guest_id', get_data_user('users'))->orderByDesc('id')->get();

        $viewData = [
            'vehicles' => $vehicles
        ];

        return view('guest::vehicle.index', $viewData);
    }

    public function create()
    {
        return view('guest::vehicle.create');
    }

    public function store(Request $request)
    {
        try{
            $data = $request->except(['_token', 'v_avatar','v_map']);
            $data['v_slug'] = Str::slug($request->v_name);
            $data['v_guest_id'] = get_data_user('users');
            if ($request->v_avatar) {
                $image = upload_image('v_avatar');
                if ($image['code'] == 1)
                    $data['v_avatar'] = $image['name'];

            }
            if ($request->v_map) {
                $image = upload_image('v_map');
                if ($image['code'] == 1)
                    $data['v_map'] = $image['name'];
            }

            $data['created_at'] = Carbon::now();
            Vehicle::insert($data);

            \DB::table('users')->where('id', get_data_user('users'))->update([
                'is_guest' => 1
            ]);
            $this->showMessagesSuccess("Thêm mới thành công");
        }catch (\Exception $exception)
        {
            $this->showMessagesError("Thêm mới thất bại");
            Log::error("[GuestVehicleController store] :". $exception->getMessage());
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        return view('guest::vehicle.update', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except(['_token', 'v_avatar','v_map']);
            $data['v_slug'] = Str::slug($request->v_name);
            if ($request->v_avatar) {
                $image = upload_image('v_avatar');
                if ($image['code'] == 1)
                    $data['v_avatar'] = $image['name'];
            }
            if ($request->v_map) {
                $image = upload_image('v_map');
                if ($image['code'] == 1)
                    $data['v_map'] = $image['name'];
            }
            $data['updated_at'] = Carbon::now();
            Vehicle::find($id)->update($data);
            $this->showMessagesSuccess("Cập nhật thành công");
        }catch (\Exception $exception)
        {
            $this->showMessagesError("Cập nhật thất bại");
            Log::error("[GuestVehicleController update] :". $exception->getMessage());
        }

        return redirect()->back();
    }
}
