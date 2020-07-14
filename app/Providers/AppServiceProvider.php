<?php

namespace App\Providers;
use App\Category;
use App\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
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
       // dd(CartFacade::getContent()->count());
        Schema::defaultStringLength(191);
        $hCategories = Category::all();

        View::share(['hCategories'=> $hCategories]);
        View::composer('users.includes.header', function ($view) {

            $cart_price = 0;

            //dd(Session::get('1_cart_items'));

            if (!empty(Session::get('1_cart_items'))){

                foreach ( Session::get('1_cart_items') as $item){
                    $cart_price = $cart_price + $item['price'];
                }

            }

            $cart_count = Session::get('1_cart_items');

            if (empty($cart_count)){
                $cart_count = 0;
            }else{
                $cart_count = Session::get('1_cart_items')->count();
            }

            $cart_items = Session::get('1_cart_items');

           // echo $cart_price;;

            $view->with(['cartCount'=> $cart_count,'cart_items'=> $cart_items,'total_price'=>$cart_price]);
        });
    }

}


