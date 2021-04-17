<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController ;
use App\Http\Controllers\productController ;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Registation or signup route here
Route::view('/register' , 'register' ) ;
Route::post('register' , [userController::class , 'register']) ;


//Login pgage Routes
Route::view('login' , "login") ; 
Route::post('login' , [userController::class , 'login']) ;

//homepage Product route
Route::get('/' , [productController::class , 'index']) ;

//product Detail page Route
Route::get('detail/{id}' , [productController::class , 'detail']) ;

//Search Routes
Route::get('search' , [productController::class , 'search']) ;

//Add to Cart Routes
Route::post('add_to_cart' , [productController::class , 'addToCart']) ;

//logout Route and functionality here
Route::get('/logout', function () {
    Session::forget('user') ;
    return redirect('/login') ;
});

//cartlist Route 
Route::get('cartlist' , [productController::class , 'cartList']) ;

//remove the product from the cart Route 
Route::get('removecart/{id}' , [productController::class , 'removeCart']) ;

//Order Now Route here
Route::get('/ordernow' , [productController::class , 'orderNow']) ;

//Order placed Route here
Route::post('/orderplace' , [productController::class , 'orderPlace']) ;

//order list Route here
Route::get('/myorder' , [productController::class , 'myOrder']) ;

















