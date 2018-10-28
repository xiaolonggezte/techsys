<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommonRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    protected $table = 'students';
    public function register(Request $request, CommonRequest $commonRequest) {
        //开始进行注册,用encypt进行密码加密，
        $paras = $request -> all();
        DB::insert('insert into students(student_username,student_password,student_email,student_name) values(?,?,?,?)',
            [$paras['username'],encrypt($paras['password']),$paras['email'],$paras['name']]);
        return view('user-login',compact('type','student'));
    }
}
