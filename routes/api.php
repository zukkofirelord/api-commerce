<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Buyers
Route::resource('buyers','Buyer\BuyerController',['only' => ['index','show']]);
// Categories
Route::resource('categories','Category\CategoryController',['except' => ['create','edit']]);
// Products
Route::resource('products','Product\ProductController',['only' => ['index','show']]);
// sellers
Route::resource('sellers','Seller\SellerController',['only' => ['index','show']]);
// transactions
Route::resource('transactions','Transaction\TransactionController',['only' => ['index','show']]);
// users
Route::resource('users','User\UserController',['except' => ['create','edit']]);
