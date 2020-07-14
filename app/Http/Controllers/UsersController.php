<?php

namespace App\Http\Controllers;

use App\AdBanner;
use App\Category;
use App\Product;
use App\Upload_Banner;
use App\Upload_Index_Banner;
use Darryldecode\Cart\Facades\CartFacade;
use App\Upload_Section_Product_Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function home(){
        $categories = Category::all();
        $ad_banners = AdBanner::latest()->limit(1)->get();
        $index_banners = Upload_Index_Banner::all();
        $banners = Upload_Banner::all();
        $latestProducts = Product::latest()->limit(7)->get();
        $hotDeals = Product::where('hot_deal', 1)->latest()->limit(3)->get();
        $cats = Category::limit(3)->get();
        $categoryProducts = array();
        foreach($cats as $cat){

            $categoryProducts[] = array(
              'category_id' => $cat->unique_id,
              'category_name' => $cat->category_name,
              'category_image' => $cat->image,
              'category_products' =>  Product::where('category_id', $cat->unique_id)->get()
            );

        }

//        dd(CartFacade::session(1)->getContent()->count());
//
//        dd(CartFacade::getContent()->count());

        return view('users/index', [
           'categories' => $categories,
           'index_banners' => $index_banners,
           'banners' => $banners,
           'cats' => $cats,
           'categoryProducts' => $categoryProducts,
           'latestProducts' => $latestProducts,
           'hotDeals' => $hotDeals,
           'ad_banners' => $ad_banners

       ]);
    }
    public function category(){

        $categories = Category::all();
       return view('users.includes.header', [
           'categories' => $categories
       ]);
    }


}
