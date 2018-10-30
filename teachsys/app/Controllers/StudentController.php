<?php

namespace App\Controllers;


use App\Requests\CommonRegisterRequest;
use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register(Request $request, CommonRegisterRequest $commonRegisterRequest, StudentService $service) {
        //开始进行注册,用encypt进行密码加密，
        $paras = $request -> all();
        $service -> insertOne($paras);
        return view('user-login',compact('type','student'));
    }

    public function login() {

    }
}
