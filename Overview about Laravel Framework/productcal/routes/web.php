<?php

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
use Illuminate\Http\Request;

Route::get('/view', function () {
    return view('product');
});

Route::post('/display-discount', function (Request $request) {
    $productDescription = $request->input('productDescription');
    $price = $request->input('price');
    $discountPercent = $request->input('discountPercent');
    $discountamount = $price * $discountPercent* 0.01;
    $discountprice = $price - $discountamount;

    return view('display-discount',['productDescription' => $productDescription , 'price' => $price , 'discountPercent' => $discountPercent, 'discountamount' => $discountamount , 'discountprice' => $discountprice ]);
});


