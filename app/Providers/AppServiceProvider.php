<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\Menh;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.users.partisals.header', function($view){
            $cates = Category::all();
            $menh = Menh::all();
            $view->with([
                'cates' => $cates,
                'menh' => $menh
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
