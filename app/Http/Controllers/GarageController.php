<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use App\Models\Vote;
use App\Models\VoteDetail;
use Illuminate\Http\Request;
use Modules\Guest\Entities\Buses;

class GarageController extends Controller
{
    public function getGarageDetail($slug, $id)
    {
        $garage = User::find($id);
        $albums = Image::where('user_id', $garage->id)->limit(3)->get();
        $guests = User::where('is_guest', User::GUEST)->limit(8)->get();

        // lấy đánh giá
        $votes = Vote::with('user:id,name')->where('v_user_id', $id)->orderByDesc('id')->paginate(10);

        // Thống kê chi tiết đánh giá
        $voteDetail = VoteDetail::groupBy('v_type')
            ->where('v_id', $id)
            ->select(\DB::raw('count(v_number) as count_number'), \DB::raw('sum(v_number) as total'))
            ->addSelect('v_type')
            ->get()->toArray();

        $ratingDefault = $this->mapRatingDefault();

        foreach ($voteDetail as $key => $item) {
            $ratingDefault[$item['v_type']] = $item;
        }

        $buses = Buses::with('vehicle', 'starting', 'destination')
            ->where('b_guest_id', get_data_user('users'))
            ->orderByDesc('id')->get();

        $typeVote = (new VoteDetail())->getType();
        $viewData = [
            'garage'        => $garage,
            'guests'        => $guests,
            'albums'        => $albums,
            'buses'         => $buses,
            'votes'         => $votes,
            'typeVote'      => $typeVote,
            'ratingDefault' => $ratingDefault
        ];

        return view('pages.garage.index', $viewData);
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
