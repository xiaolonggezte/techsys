<?php

namespace App\Controllers;


use App\Requests\CommonRegisterRequest;
use App\Services\TeacherService;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function register(Request $request, CommonRegisterRequest $commonRegisterRequest, TeacherService $service) {
        $paras = $request -> all();
        $service -> insertOne($paras);
        return view('user-login',compact('type','teacher'));
    }

    public function login() {

    }
}
