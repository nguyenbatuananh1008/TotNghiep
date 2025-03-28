<?php

namespace App\Providers;

use App\Models\Blog\Menu;
use App\Models\Configuration;
use App\Models\System\NavBar;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
       try {
           if($this->app->environment() != 'local') URL::forceScheme('https');
           $menuBlog      = Menu::orderBy('m_sort', 'asc')->get();
           $configuration =  Configuration::orderByDesc('id')->first();
           $navBars       = NavBar::where('nb_status',1)
               ->orderBy('nb_sort','asc')->select('nb_url','nb_name')->get();
       } catch (\Exception $exception) {
           Log::error($exception->getMessage());
       }

       \View::share('menuBlog', $menuBlog ?? []);
       \View::share('configuration', $configuration ?? []);
       \View::share('navBars', $navBars ?? []);
    }
}
