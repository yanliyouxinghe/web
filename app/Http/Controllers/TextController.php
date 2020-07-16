<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TextController extends Controller
{
    public function text1(){
        $goods = DB::table('p_users')->first();
        dd($goods);
    }


}
