<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Location;
use App\Models\User;
use App\Models\Vote;
use App\Models\VoteDetail;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Guest\Entities\Buses;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $buses = Buses::with('vehicle', 'starting', 'destination', 'guest');
        if ($v_type = $request->v_type) {
            $buses->whereHas('vehicle', function ($qr) use ($v_type) {
                $qr->where('v_type', $v_type);
            });
        }

        if ($v_action = $request->v_a) {
            $buses->whereHas('vehicle', function ($qr) use ($v_action) {
                $qr->where('v_action', $v_action);
            });
        }

        if ($s = $request->s)
            $buses->where('b_starting_point_id', (int)$s);

        if ($d = $request->d)
            $buses->where('b_destination_id', (int)$d);

//        $timeCurrent = Carbon::now()->format('H:m:s');

        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        if ($time_start = $request->t_start) {
            $time_start = $dt->create(0, 0, 0, $time_start, 0, 0)->format('H:m:s');
            $buses->whereTime('b_time_start', '>=', $time_start);
        }

        if ($time_stop = $request->t_stop) {
            $time_stop = $dt->create(0, 0, 0, $time_stop, 0, 0)->format('H:m:s');
            $buses->whereTime('b_time_stop', '<=', $time_stop);
        }

        if ($w = $request->w)
            $buses->where('b_vehicle_id', $w);

        if ($sort = $request->sort)
        {
            switch ($sort)
            {
                case 2:
                    $buses->orderBy('id','asc');
                    break;
                case 3:
                    $buses->orderBy('b_price','desc');
                    break;
                case 4:
                    $buses->orderBy('b_price','asc');
                    break;
                case 5:
                    $buses->orderBy('b_time_start','asc');
                    break;
                case 6:
                    $buses->orderBy('b_time_start','desc');
                    break;
                default:
                    $buses->orderByDesc('id');
            }
        }

        $buses = $buses->paginate(10);

        $locations = Location::where('loc_parent_id', 0)->get();
        $guests    = User::where('is_guest', User::GUEST)
            ->orderByDesc('id')->get();

        $pageContent = RenderPageContent::getPage();
        if ($pageContent) {
            RenderMetaSeo::init([
                'title'       => $pageContent->title_seo,
                'description' => $pageContent->description_seo,
                'avatar'      => pare_url_file($pageContent->avatar),
                'robots'      => $pageContent->seo
            ]);
        }

        $viewData = [
            'buses'       => $buses,
            'locations'   => $locations,
            'guests'      => $guests,
            'pageContent' => $pageContent,
            'query'       => $request->query()
        ];

        return view('pages.search.index', $viewData);
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $key = $request->key;
            Log::info($key);
            $data = config('data.estate_2');
            $item = $data[$key];
            $html = view('pages.search.include._inc_content_quick_view', compact('item'))->render();

            return response(['html' => $html]);
        }

        return view('pages.detail.index');
    }

    public function renderInfo(Request $request)
    {
        $bustsID = $request->get('pj_id');
        if ($bustsID) {
            $busts  = Buses::findOrFail($bustsID);
            $garage = User::find($busts->b_guest_id);
            $albums = Image::where('user_id', $garage->id)->limit(3)->get();

            // lấy đánh giá
            $userID = $busts->b_guest_id;
            $votes  = Vote::with('user:id,name')->where('v_user_id', $userID)->orderByDesc('id')->paginate(10);

            // Thống kê chi tiết đánh giá
            $voteDetail = VoteDetail::groupBy('v_type')
                ->where('v_id', $userID)
                ->select(\DB::raw('count(v_number) as count_number'), \DB::raw('sum(v_number) as total'))
                ->addSelect('v_type')
                ->get()->toArray();

            $ratingDefault = $this->mapRatingDefault();

            foreach ($voteDetail as $key => $item) {
                $ratingDefault[$item['v_type']] = $item;
            }
            $typeVote = (new VoteDetail())->getType();
            $viewData = [
                'garage'        => $garage,
                'albums'        => $albums,
                'busts'         => $busts,
                'votes'         => $votes,
                'typeVote'      => $typeVote,
                'ratingDefault' => $ratingDefault
            ];
            sleep(.5);
            return response([
                'html' => view('pages.search.include._inc_content_quick_view')->with($viewData)->render(),
            ]);
        }
    }

    private function mapRatingDefault()
    {
        $ratingDefault = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDefault[$i] = [
                "count_number" => 0,
                "total"        => 0,
                "v_type"       => 1
            ];
        }
        return $ratingDefault;
    }
}
