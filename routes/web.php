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
Route::get('app1', function () {
    return view('tiktok.check'); //仮LP
    // リダイレクトLPへ切り替え - cccheckを変更
    
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワクP活LP
    // return view('tiktok.wklp'); //獲得用(3) - ワクワクP活LP
    // return redirect('https://a-trade.jp/redirect/mocom-lp30?media=G16531'); //モコム - Aトレード
    // return view('tiktok.job'); //獲得用(2)
    // return view('tiktok.noMatch'); //獲得用(1)
});

// OS識別x遷移
Route::get('cccheck', 'AdController@info');

// //LP確認用
// Route::get('cccheck', function () {
//     return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワクP活LP
    
//     // return view('tiktok.wklp'); //獲得用(3) - ワクワクP活LP
//     // return redirect('https://a-trade.jp/redirect/mocom-lp30?media=G16531'); //モコム - Aトレード
//     // return view('tiktok.job'); //獲得用(2)
//     // return view('tiktok.noMatch'); //獲得用(1)
// });
