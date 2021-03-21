<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function info(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //ワクワクP活iOS - fam
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16345'); //ワクワクP活web - fam
    }
}
