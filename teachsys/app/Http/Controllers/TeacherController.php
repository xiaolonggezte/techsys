<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommonRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function register(Request $request, CommonRequest $commonRequest) {
        $paras = $request -> all();
        DB::insert('insert into teachers(teacher_username,teacher_password,teacher_email,teacher_name) values(?,?,?,?)',
            [$paras['username'],encrypt($paras['password']),$paras['email'],$paras['name']]);
        return view('user-login',compact('type','teacher'));
    }
}
