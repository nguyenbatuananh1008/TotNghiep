<?php

namespace App\Http\Controllers;

use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;


class AboutController extends Controller
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
        $viewData = [
            'pageContent' => $pageContent
        ];
        return view('pages.static.index', $viewData);
    }
}
