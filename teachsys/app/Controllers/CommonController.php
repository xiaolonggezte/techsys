<?php
/**
 *Student,teacher共有的controller
 */

namespace App\Controllers;



use Illuminate\Http\Request;

class CommonController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *  将参数传递到前端页面中
     */
    public function register(Request $request) {
        $type = $request -> get('type');
        return view('user-register',compact('type',$type));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 处理get中的参数
     */
    public function login(Request $request) {
        $type = $request -> get('type');
        return view('user-login',compact('type',$type));
    }

    /**
     * @param Request $request
     * student,teacher登录的共同类
     */
    public function Commonlogin(Request $request) {

    }
}