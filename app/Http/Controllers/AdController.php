<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function info(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=19623'); //コイフルAnd - fam
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=19623'); //コイフルAnd - fam
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
    }
}
