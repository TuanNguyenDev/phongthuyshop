<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\Menh;
use App\Models\Info;
use Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
            $info = Info::all();
            $view->with([
                'cates' => $cates,
                'info' => $info,
                'menh' => $menh
            ]);
        });
        view()->composer('layouts.users.partisals.header', function($view){
            $cart = Cart::content();
            $total = Cart::subtotal();
            $view->with([
                'cart'=>$cart,
                'total' => $total
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
