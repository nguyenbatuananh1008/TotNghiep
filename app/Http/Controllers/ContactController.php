<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\User;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $pageContent = RenderPageContent::getPage();
        if ($pageContent) {
            RenderMetaSeo::init([
                'title'       => $pageContent->title_seo,
                'description' => $pageContent->description_seo,
                'avatar'      => pare_url_file($pageContent->avatar),
                'robots'      => $pageContent->seo
            ]);
        }
        $guests   = User::where('is_guest', User::GUEST)->limit(8)->get();
        $routes   = Route::orderByDesc('id')
            ->limit(8)->get();
        $viewData = [
            'pageContent' => $pageContent,
            'guests'      => $guests,
            'routes'      => $routes,
        ];
        return view('pages.static.index', $viewData);
    }
}
