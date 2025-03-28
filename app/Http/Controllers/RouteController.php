<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Route;
use App\Models\User;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Guest\Entities\Buses;

class RouteController extends Controller
{
    public function index($slug, $id, Request $request)
    {
        $route = Route::find($id);
        if (!$route) return abort(404);

        $buses = Buses::with('vehicle', 'starting', 'destination', 'guest');

        if ($v_type = $request->v_type) {
            $buses->whereHas('vehicle', function ($qr) use ($v_type) {
                $qr->where('v_type', $v_type);
            });
        }

        $buses->where('b_starting_point_id',$route->starting_point_id) ;
        if ($s = $request->s) $buses->where('b_starting_point_id', (int)$s);


        $buses->where('b_destination_id',$route->destination_id) ;
        if ($d = $request->d) $buses->where('b_destination_id', (int)$d);


//        $timeCurrent = Carbon::now()->format('H:m:s');
//
//        $buses->whereTime('b_time_start', '<=', $timeCurrent)
//            ->whereTime('b_time_stop', '>=', $timeCurrent);

        if ($w = $request->w)
            $buses->where('b_vehicle_id', $w);

        $buses = $buses
            ->orderByDesc('id')->paginate(10);

        $locations = Location::all();
        $guests    = User::where('is_guest', User::GUEST)
            ->orderByDesc('id')->get();

        $pageContent = RenderPageContent::getPage();
        $meta        = [
            'title' => $route->name
        ];
        RenderMetaSeo::init($meta);

        $viewData = [
            'buses'       => $buses,
            'locations'   => $locations,
            'guests'      => $guests,
            'pageContent' => $pageContent,
            'query'       => $request->query(),
            'route'       => $route
        ];

        return view('pages.route.index', $viewData);
    }
}
