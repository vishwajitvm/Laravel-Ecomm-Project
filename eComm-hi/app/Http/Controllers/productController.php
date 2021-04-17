<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product ;
use App\Models\cart ;
use App\Models\order ;
use Session ;
use Illuminate\Support\Facades\DB ;


class productController extends Controller
{
    function index(){
        $data =  product::all() ;
        return view('product' , ['products'=>$data]) ;
    }

    //Product Detail Function Here---->>
    function detail($id){
       $data =  product::find($id) ;
       return view('detail' , ['product'=>$data]) ;
    }

    //seach Functionalitys here
    function search(Request $req){
        // return $req->input() ;
         $data = product::where('name' , 'like' ,  '%'.$req->input('query'). '%' )->get() ;
         return view('search' , ['products'=>$data] ) ;
    }

    //Add to Cart Functionalitys and all
    function addToCart(Request $req){
        //now If the user is Not login then it returrn the user to the login page to do the login othert wise it will stor the {{ SESSION DATA }} of the the user and add the product into the cart into the user systern and server
        if($req->session()->has('user')){
            $cart = new cart ;
            //getting the user id data using login session
            $cart->user_id = $req->session()->get('user')['id'] ;
            //getting the product data or product ID
            $cart->product_id = $req->product_id ;
            $cart->save() ;
            return redirect('/') ;

        }
        else{
            return redirect('/login') ;
        }
    }

    //cart count on add to cart function
    //ERROR NOTE:: Non-static method App\Http\Controllers\productController::cartItem() should not be called statically (View: C:\laravel\eComm-hi\resources\views\header.blade.php) <<=====this is the reson why we make this function STATIC
    static function cartItem(){
        //for this we need to import the sesssion
        $userId = session::get('user')['id'] ;
        return cart::where('user_id' , $userId)->count() ;
    }

    //cartlist Function here  <<dipsly the no of item added into the card with details
    function cartList(){
        //we have to import DB module to get the data from multiple db and use join in it
        $userId = session::get('user')['id'] ;
        $data =  DB::table('cart')
        ->join('products' , 'cart.product_id' , 'products.id')
        ->select('products.*' , 'cart.id as cart_id')
        ->where('cart.user_id' , $userId)
        ->get() ;

        return view('cartlist' , ['products'=>$data]) ;
        //after this we get An ERROR HERE
        //ERROR REPORT ::  Cannot use object of type stdClass as array (View: C:\laravel\eComm-hi\resources\views\cartlist.blade.php)
        //for fixing this we have to changer cerain thing
        //original one  {{                     <div class=" searched-item  container-div {{$item['id']==1?'active':''}} " style="width: 300px !important ; float:left  !important;"> }}
        //edited one  ====>>>>  <a href="detail/{{$item->id}}">      <<<====

    }

    //removeCart functionality here
    function removeCart($id){
        cart::destroy($id) ;
        return redirect('cartlist') ;
    }

    //Order now functionality here with many details of ordering the product and all
    function orderNow(){
        $userId = session::get('user')['id'] ;
        $total =  DB::table('cart')
        ->join('products' , 'cart.product_id' , 'products.id')
        // ->select('products.*' , 'cart.id as cart_id')
        ->where('cart.user_id' , $userId)
        ->sum('products.price') ;

        return view('ordernow' , ['total'=>$total]) ;
    }

    //orderPlace functionality here <<on click order 
    function orderPlace(Request $req){
        // return $req->input() ;
        //first we need the session data from db
        $userId = session::get('user')['id'] ;
        $allcart = cart::where('user_id' , $userId)
        ->get() ;
        //now we want to save all the data from the cart for that we are using foreach loop
        foreach($allcart as $cart){  //for LOpp start here
           $order = new order ;
           $order->product_id = $cart['product_id']  ;
           $order->user_id = $cart['user_id']  ;
           $order->address = $req->address  ;
           $order->status =  'Pending' ;
           $order->payment_method = $req->payment  ;
           $order->payment_status = "Pending"  ;
           $order->save() ;
        }  //for loop END HERE
        //now after ordering we also want to remove the Item From the cart 
        cart::where('user_id' , $userId)
        ->delete() ;
        return redirect('/') ;
    } 

    //myOrder list Functionality here
    function myOrder(){
        $userId = session::get('user')['id'] ;
        $orders =   DB::table('orders')
        ->join('products' , 'orders.product_id' , 'products.id')
        ->where('orders.user_id' , $userId)
        ->get() ;

        return view('myorder' , ['orders'=>$orders]) ;
    }


}
