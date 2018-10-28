<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function judgeType(Request $request) {
        $type = $request -> get('type');
        return view('user-register',compact('type',$type));
    }
}
