<?php

namespace App\Controllers;


use App\Facades\TeacherService;
use App\Models\TeacherModel;
use App\Requests\CommonRegisterRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function register(Request $request, CommonRegisterRequest $commonRegisterRequest) {
        $paras = $request -> all();
        TeacherService::insertOne($paras);
        return view('user-login',compact('type','teacher'));
    }


}
