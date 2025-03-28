<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\Car\BusesLocation;
use App\Models\Location;
use App\Service\Location\LocationService;
use App\Traits\MessageTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Modules\Guest\Entities\Buses;
use Modules\Guest\Entities\Vehicle;

class GuestBusesController extends Controller
{
    use MessageTrait;

    public function index()
    {
        $buses = Buses::with('vehicle', 'starting', 'destination')
            ->where('b_guest_id', get_data_user('users'))
            ->orderByDesc('id')->get();

        $viewData = [
            'buses' => $buses
        ];

        return view('guest::buses.index', $viewData);
    }

    public function create()
    {
        LocationService::getInstance()->recursive(0,1, $locations);
        $vehicles  = Vehicle::where('v_guest_id', get_data_user('users'))->get();
        $viewData  = [
            'locations' => $locations,
            'vehicles'  => $vehicles,
        ];
        return view('guest::buses.create', $viewData);
    }

    public function store(Request $request)
    {
        try {
            $data               = $request->except(['_token', 'b_starting_point_id', 'b_time_start', 'b_destination_id', 'b_time_stop']);
            $data['created_at'] = Carbon::now();
            $data['b_price']    = (int)str_replace(',', '', $request->b_price);
            $data['b_guest_id'] = get_data_user('users');
            $buses              = Buses::create($data);
            if ($buses) {
                $this->syncLocation($request->b_starting_point_id, $request->b_time_start, $request->b_destination_id, $request->b_time_stop, $buses, $request);
            }
            $this->showMessagesSuccess("Thêm mới thành công");
        } catch (\Exception $exception) {
            $this->showMessagesError("Thêm mới thất bại");
            Log::error("[GuestBusesController store] :" . $exception->getMessage());
        }

        return redirect()->back();
    }

    public function syncLocation($starting, $timeStart, $destination, $timeStop, $buses, $request)
    {
        \DB::table('buses_locations')->where('bl_buses_id', $buses)->delete();

        if (!empty($starting) && !empty($timeStart)) {
            $buses->b_starting_point_id = $starting[0];
            $buses->b_time_start        = $timeStart[0];
            $buses->save();

            foreach ($starting as $key => $location) {
                $mapStart = $request->mapStart;
                if(isset($mapStart[$key]))
                {
                    BusesLocation::find($mapStart[$key])
                    ->update([
                        'bl_buses_id'    => $buses->id,
                        'bl_location_id' => $location,
                        'bl_time'        => $timeStart[$key] ?? null,
                        'bl_type'        => BusesLocation::TYPE_STARTING
                    ]);
                }else{
                    BusesLocation::insert([
                        'bl_buses_id'    => $buses->id,
                        'bl_location_id' => $location,
                        'bl_time'        => $timeStart[$key] ?? null,
                        'bl_type'        => BusesLocation::TYPE_STARTING
                    ]);
                }
            }
        }

        if (!empty($destination) && !empty($timeStop)) {
            $buses->b_destination_id = $destination[0];
            $buses->b_time_stop      = $timeStop[0];
            $buses->save();

            foreach ($destination as $key => $location) {
                $mapStop = $request->mapStop;
                if(isset($mapStop[$key]))
                {
                    BusesLocation::find($mapStop[$key])->update([
                        'bl_buses_id'    => $buses->id,
                        'bl_location_id' => $location,
                        'bl_time'        => $timeStop[$key] ?? null,
                        'bl_type'        => BusesLocation::TYPE_DESTINATION
                    ]);
                }else{
                    BusesLocation::insert([
                        'bl_buses_id'    => $buses->id,
                        'bl_location_id' => $location,
                        'bl_time'        => $timeStop[$key] ?? null,
                        'bl_type'        => BusesLocation::TYPE_DESTINATION
                    ]);
                }
            }
        }
    }

    public function edit($id)
    {
        $buses     = Buses::findOrFail($id);
        LocationService::getInstance()->recursive(0,1, $locations);
        $vehicles  = Vehicle::where('v_guest_id', get_data_user('users'))->get();
        // lấy địa chỉ và time đi
        $mapsStart = BusesLocation::with('location')
            ->where([
                'bl_buses_id' => $id,
                'bl_type'     => BusesLocation::TYPE_STARTING
            ])->get();

        $mapsStop = BusesLocation::with('location')
            ->where([
                'bl_buses_id' => $id,
                'bl_type'     => BusesLocation::TYPE_DESTINATION
            ])->get();

        $viewData = [
            'locations' => $locations,
            'vehicles'  => $vehicles,
            'mapsStart' => $mapsStart,
            'mapsStop'  => $mapsStop,
            'buses'     => $buses,
        ];

        return view('guest::buses.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        try {
            $buses = Buses::find($id);
            $data               = $request->except(['_token', 'b_starting_point_id', 'b_time_start', 'b_destination_id', 'b_time_stop','mapStop','mapStart']);
            $data['updated_at'] = Carbon::now();
            $data['b_price']    = (int)str_replace(',', '', $request->b_price);
            $buses->find($id)->update($data);

            $this->syncLocation($request->b_starting_point_id, $request->b_time_start, $request->b_destination_id, $request->b_time_stop, $buses, $request);
            $this->showMessagesSuccess("Cập nhật thành công");
        } catch (\Exception $exception) {
            $this->showMessagesError("Cập nhật thất bại");
            Log::error("[GuestBusesController update] :" . $exception->getMessage());
        }

        return redirect()->back();
    }

    public function deleteItemLocation($id, Request $request)
    {
        if ($request->ajax()) {
            $location = BusesLocation::findOrFail($id);
            if ($location) $location->delete();

            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return  redirect()->back();
    }

    public function delete($id, Request $request)
    {
        if ($request->ajax()) {
            $busts = Buses::findOrFail($id);
            if ($busts) {
                \DB::table('buses_locations')->where('bl_buses_id', $id)->delete();
                $busts->delete();
            }

            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return  redirect()->back();
    }



    protected function getLocations($type, $id = 0)
    {
        $buses     = Buses::find($id);
        LocationService::getInstance()->recursive(0,1, $locations);
        $vehicles  = Vehicle::where('v_guest_id', get_data_user('users'))->get();

        $viewData = [
            'locations' => $locations,
            'vehicles'  => $vehicles,
            'buses'     => $buses,
        ];

        $html = view('guest::buses.include._inc_location_s', $viewData)->render();
        if ($type == 2) {
            $html = view('guest::buses.include._inc_location_d', $viewData)->render();
        }
        return response()->json($html);
    }
}
