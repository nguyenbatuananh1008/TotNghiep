<?php

namespace Modules\Admin\Http\Controllers\System;

use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use App\Models\Category;
use App\Models\Ecommerce\Product;
use App\Models\System\NavBar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;

class AdminNavbarController extends AdminController
{
    public function index()
    {
        $navbars  = NavBar::orderBy('nb_sort', 'asc')
            ->get();
        $viewData = [
            'navbars' => $navbars
        ];
        return view('admin::pages.navbar.index', $viewData);
    }

    public function create()
    {
        $type = (new NavBar())->getType();

        $viewData = [
            'type' => $type,
        ];
        return view('admin::pages.navbar.create', $viewData);
    }

    public function getType(Request $request, $type)
    {
        if ($request->ajax()) {
            switch ($type) {
                case NavBar::TYPE_URL:
                    $html = view('admin::pages.navbar.include.inc_url')->render();
                    break;

                case NavBar::TYPE_MENU:
                    $menus = Menu::all();
                    $html  = view('admin::pages.navbar.include.inc_menu', compact('menus'))->render();
                    break;

                case NavBar::TYPE_ARTICLE:
                    $articles = Article::all();
                    $html     = view('admin::pages.navbar.include.inc_article', compact('articles'))->render();
                    break;
            }

            return response()->json($html);
        }
    }

    public function store(Request $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $navBar             = NavBar::create($data);
        if ($navBar) {
            $this->renderURL($navBar);
        }
        $this->showMessagesSuccess('Thêm dữ liệu thành công');

        return redirect()->back();
    }

    public function renderURL($navBar)
    {
        $type = $navBar->nb_type;
        $url  = $navBar->nb_url;
        switch ($type) {
            case NavBar::TYPE_MENU:
                $menu = Menu::find($navBar->nb_id);
                $url  = route('get_blog.render', ['slug' => $menu->m_slug . '-m']);
                break;

            case NavBar::TYPE_ARTICLE:
                $article = Article::find($navBar->nb_id);
                $url     = route('get_blog.render', ['slug' => $article->a_slug . '-a']);
                break;
        }
        $navBar->nb_url = $url;
        $navBar->save();
    }

    public function edit($id)
    {
        $navBar = NavBar::find($id);
        $type   = (new NavBar())->getType();

        $viewData = [
            'type'   => $type,
            'navBar' => $navBar
        ];

        return view('admin::pages.navbar.update', $viewData);
    }

    public function update($id, Request $request)
    {
        $navBar =  NavBar::find($id);
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $navBar->fill($data)->save();
        if ($navBar) {
            $this->renderURL($navBar);
        }
        $this->showMessagesSuccess('Thêm dữ liệu thành công');

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $nav = NavBar::findOrFail($id);
            if ($nav) $nav->delete();

            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
