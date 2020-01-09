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
// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('dict');
});

Route::post('/' , function(Request $request) {
    // $dicteng = $request->input('dicteng');
    // $eng = ['book' , 'pencil' , 'pen' , 'ruler' , 'eraser' , 'bag' ];
    // $vie = ['Sách' , 'Bút chì' , 'Bút mực' , 'Cái thước' , 'Cục tẩy' , 'Cái cặp'];
    // for($i = 0 ; $i < count($eng); $i++) {
    //         if($eng[$i] == $dicteng) {
    //             $result = $vie[$i];
    //         break;
    //         } else if ($vie[$i] == $dicteng){
    //             $result = $eng[$i];
    //         break;
    //         } else {
    //             $result = "Can't found this word !!!";
    //         }
    // }

    $dict = $request->input('dicteng');
    $dict = trim($dict);
    $dict = strtolower($dict);
    $array = ['book' => 'sach' , 'ruler' => 'thuoc'];
    if(key_exists($dict , $array)) {
        $result = $array[$dict];
    } elseif (in_array($dict , $array)) {
        $result = array_search($dict , $array);
    } else {
        $result = "Can't found this word !!!";
    }
    return view('result' , ['dict' => $dict , 'result' => $result , 'array' => $array ]);
});
