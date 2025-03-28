<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use App\Models\Location;
use App\Models\Route;
use App\Models\User;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $guests    = User::where('is_guest',User::GUEST)->limit(8)->get();
        $locations = Location::where('loc_parent_id',0)->get();


        // Menu nổi bật vi tri 1
        $menuOne = Menu::where([
            'm_hot'      => 1,
            'm_position' => 1
        ])->first();

        if ($menuOne) {
            $articlesHotOne = Article::where('a_menu_id', $menuOne->id)
                ->orderByDesc('id')
                ->limit(10)
                ->get();
        }

        // Menu nổi bật vi tri 2
        $menuTwo = Menu::where([
            'm_hot'      => 1,
            'm_position' => 2
        ])->first();

        if ($menuTwo) {
            $articlesHotTwo = Article::where('a_menu_id', $menuTwo->id)
                ->orderByDesc('id')
                ->limit(10)
                ->get();
        }

        $pageContent = RenderPageContent::getPage();
        if ($pageContent) {
            RenderMetaSeo::init([
                'title'       => $pageContent->title_seo,
                'description' => $pageContent->description_seo,
                'avatar'      => pare_url_file($pageContent->avatar),
                'robots'      => $pageContent->seo
            ]);
        }

        $routes = Route::orderByDesc('id')
            ->limit(8)->get();

        $viewData = [
            'articlesHotTwo' => $articlesHotTwo ?? [],
            'articlesHotOne' => $articlesHotOne ?? [],
            'pageContent'    => $pageContent,
            'menuOne'        => $menuOne,
            'menuTwo'        => $menuTwo,
            'routes'         => $routes,
            'guests'         => $guests,
            'locations'      => $locations
        ];
        return view('pages.home.index', $viewData);
    }
}
