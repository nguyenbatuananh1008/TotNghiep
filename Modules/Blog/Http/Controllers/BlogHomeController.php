<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Blog\Article;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;

class BlogHomeController extends BlogController
{
    public function index()
    {
        // Bài viết banner
        $articles = Article::with('menu:id,m_name,m_slug')->orderByDesc('id')
            ->orderByDesc('id')
            ->select('id', 'a_name', 'a_description', 'a_view', 'a_slug', 'a_avatar', 'created_at', 'a_menu_id')
            ->paginate(20);

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
            'articles'    => $articles,
            'pageContent' => $pageContent
        ];

        return view('blog::home.index', $viewData);
    }
}
