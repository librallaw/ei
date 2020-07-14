<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;

class CartController extends Controller
{

    public function viewCart(){
//        $items = CartFacade::getContent();


        $userId = 1; // get this from session or wherever it came from


            $items = [];

            CartFacade::session($userId)->getContent()->each(function($item) use (&$items)
            {
                $items[] = $item;
            });


        return view('users/cart',['items' => $items]);
    }

    public function addToCart($productId)
    {

        $product = Product::find($productId); // assuming you have a Product model with id, name, description & price

        $userId = 1; // get this from session or wherever it came from

        $id = $product->unique_id;
        $name = $product->name;
        if($product->discount != 0){
            $price = $product->price - ($product->price * $product->discount / 100);
        }else{

            $price = $product->price;

        }
        $image = $product->product_image;
        $availability = $product->availability;
        $qty = 1;

      //  dd("jjjkik");



        $item = CartFacade::session($userId)->add($id, $name, $price, $qty,$image,$availability);

        return back()
            ->with('success','Successfully Added Product To Cart.');
    }

    public function delete($id)
    {
        $userId = 1; // get this from session or wherever it came from

        CartFacade::session($userId)->remove($id);

        return back()
            ->with('errors','Successfully Deleted From Cart.');
    }
    public function clearCart()
    {
        $userId = 1;
        CartFacade::clear();
        CartFacade::session($userId)->clear();
        if (CartFacade::session($userId)->clear()){
            return back()
                ->with('success','Successfully Cleared Cart.');
        }else{
            return back()
                ->with('errors','
                 Could Not Clear Cart.');
        }




    }

    public function getCheckout(){
        if(auth()->user()){
            $userId = 1; // get this from session or wherever it came from


            $items = [];


            CartFacade::session($userId)->getContent()->each(function($item) use (&$items)
            {
                $items[] = $item;
            });

            $order = Order::where('user_id',auth()->user()->id)->get();

            return view('users.Checkout',['items' => $items, 'order' => $order]);

        }else{
            return redirect()->route('viewCart')
                ->with('errors','You Must Login Before Checking Out.');
        }
    }
    public function checkout(Request $request){
        if(auth()->user()){
            request()->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip_code' => 'required',
                'country' => 'required',
                'telephone' => 'required'
            ]);

            $userId = 1; // get this from session or wherever it came from

            $items = [];
            CartFacade::session($userId)->getContent()->each(function($item) use (&$items)
            {
                $items[] = $item;

            });
            $test = new Order();
            $test->unique_id             = Uuid::generate();
            $test->user_id             = auth()->user()->id;
            $test->first_name             = $request->first_name;
            $test->last_name             = $request->last_name;
            $test->email             = $request->email;
            $test->address             = $request->address;
            $test->city             = $request->city;
            $test->state             = $request->state;
            $test->zip_code             = $request->zip_code;
            $test->country             = $request->country;
            $test->telephone             = $request->telephone;
            $test->total_price             = CartFacade::getSubTotal();
            $test->product_qty             = Session::get('1_cart_items')->count();
            $test->save();

            /////////////////////////////////////////////////////////////////////////////////////

                foreach($items as $item){

                    $product_id = $item->id;
                    $save = new OrderItem();
                    $save->order_id = $test->unique_id;
                    $save->user_id = $test->user_id;
                    $save->product_id = $product_id;
                    $save->name = $item->name;
                    $save->image = $item->image;
                    $save->price = $item->price;
                    $save->save();
                }

            CartFacade::clear();
            CartFacade::session($userId)->clear();

            return redirect()->route('viewCart')
                ->with('success','Product Ordered you will get a reply soon.');
        }else{
            return redirect()->route('viewCart')
                ->with('errors','You Must Login Before Checking Out.');
        }
    }

    public function viewOrder(){
            $items = OrderItem::where('user_id', auth()->user()->id)->get();

        return view('users.order',['items' => $items]);

    }

    public function deleteItem($id)
    {
        $userId = 1; // get this from session or wherever it came from

        CartFacade::session($userId)->remove($id);

     return back();
    }

    public function updateStatus($id){

        $orderItem = OrderItem::find($id);
//        $update = OrderItem::where('status')->update();
        if($orderItem->status == 4){
            $orderItem->status  = 3;
        }elseif ($orderItem->status == 3){
            $orderItem->status  = 2;
        }
        elseif ($orderItem->status == 2){
            $orderItem->status  = 1;
        }

        $orderItem->update();

        return back();
    }

    public function cancelOrder($id){
        $orderItem = OrderItem::find($id);
        $orderItem->status  = 0;
        $orderItem->update();

        return back()->with('errs','Order Canceled.');

    }

}
