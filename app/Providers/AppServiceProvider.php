<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\HeaderFooter;
use View;
use Auth;
use DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View as ViewView;

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
        View::composer('admin.includes.header', function($view){
            $user = Auth::user();
            $header = DB::table('header_footers')->first();
            $view->with([
                'user' =>$user,
                'header'=>$header,
            ]);
        });

        View::composer('admin.includes.footer', function($view){
            $footer = DB::table('header_footers')->first();
            $view->with('footer',$footer);
        });



        Schema::defaultStringLength(191);
    }
}
