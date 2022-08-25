<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/f1', function () {
    return view('f1');
});
Route::get('/f2', function () {
    return view('f2');
});
Route::get('/f3', function () {
    return view('f3');
});
Route::get('/oop', function () {
    // dd('hello oop');
    return view('oop');
});
Route::get('/admin_index', function () {
    return view('admin.index'); //admin資料夾下的index.blade.php
});

// 兩個變數
Route::get('/greeting/{name}/{num}', function ($name,$num) {  //直接在網址設變數     function()代入變數

    $str = "Hello $name , num =>$num";
    
    return $str; 
});
// 一個變數
Route::get('/greeting/{name}', function ($name) {  //直接在網址設變數    function()代入變數

    $str = "Hello $name";
    
    return $str; 
});

// 沒有變數
Route::get('/greeting', function () {  //直接在網址設變數   function()代入變數

    return 'Hello'; 

});
//request
Route::get('/greeting', function (request $request)  {  //
    dd($request ->input('test'));
    return 'Hello'; 

});

//
Route::get('/eat/{name}/{num}', function ($name,$num) {  //直接在網址設變數     function()代入變數

    $data=[
        'name'=>$name,
        'num'=>$num
    ];

    return view('f1',['data' => $data]); 
});

// prefix  把相同的東西提出來放在外層
Route::prefix('admin')->group(function () {
    Route::get('/student', function () {
        return view('admin.student');
    });
    Route::get('/product', function () {
        return view('admin.product');
        
    });
});

//single controller
Route::get('/test', [TestController::class,'testFunction']);
Route::get('/discount', [TestController::class,'discount']);