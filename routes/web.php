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
//LP獲得用
Route::get('live1', function () {
    // return view('tiktok.check'); //仮LP
    return redirect('https://a-trade.jp/redirect/mocom-lp30?media=G16531'); //モコム - Aトレード
    
    // return view('tiktok.job'); //獲得用(2)
    // return view('tiktok.noMatch'); //獲得用(1)
});

//LP確認用
Route::get('cccheck', function () {
    return redirect('https://a-trade.jp/redirect/mocom-lp30?media=G16531'); //モコム - Aトレード
    
    // return view('tiktok.job'); //獲得用(2)
    // return view('tiktok.noMatch'); //獲得用(1)
});
