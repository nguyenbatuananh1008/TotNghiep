<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use App\Traits\MessageTrait;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class GuestAlbumImageController extends Controller
{
    use MessageTrait;
    public function index()
    {
        $guest = User::find(get_data_user('users'));

        $images = \DB::table('images')->where('user_id', $guest->id)->get();

        return view('guest::album.index', compact('guest','images'));
    }

    public function store(Request $request)
    {
        try {
            if ($images = $request->images) {
                $this->syncAlbumImageAndProduct($images, get_data_user('users'));
            }
            $this->showMessagesSuccess("Cập nhật thành công");
        } catch (\Exception $exception) {
            $this->showMessagesError("Cập nhật thất bại");
            Log::error("[GuestAlbumImageController store]: " . $exception->getMessage());
        }
        return redirect()->back();
    }

    public function syncAlbumImageAndProduct($files, $userID)
    {
        foreach ($files as $key => $fileImage) {

            $ext    = $fileImage->getClientOriginalExtension();
            $extend = [
                'png', 'jpg', 'jpeg', 'PNG', 'JPG'
            ];

            if (!in_array($ext, $extend)) return false;

            $filename = date('Y-m-d__') . Str::slug($fileImage->getClientOriginalName()) . '.' . $ext;
            $path     = public_path() . '/uploads/' . date('Y/m/d/');
            if (!\File::exists($path)) {
                mkdir($path, 0777, true);
            }
            $fileImage->move($path, $filename);
            \DB::table('images')
                ->insert([
                    'name'       => $fileImage->getClientOriginalName(),
                    'slug'       => $filename,
                    'user_id'    => $userID,
                    'created_at' => Carbon::now()
                ]);
        }
    }


    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $image = Image::findOrFail($id);
            if ($image) $image->delete();

            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }
}
