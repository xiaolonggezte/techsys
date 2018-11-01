<?php

namespace App\Controllers;


use App\Facades\StudentService;
use App\Requests\CommonRegisterRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register(Request $request, CommonRegisterRequest $commonRegisterRequest) {
        //开始进行注册,用encypt进行密码加密，
        $paras = $request -> all();
        StudentService::insertOne($paras);
        return view('user-login',compact('type','student'));
    }

}
