<?php
/**
 *Student,teacher共有的controller
 */

namespace App\Controllers;



use App\Facades\StudentService;
use App\Facades\TeacherService;
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
     * student,teacher登录的公共方法
     */
    public function userLogin(Request $request) {
        $username = $request -> input('username');
        $password = $request -> input('password');
        if(StudentService::login($username, $password)) {
            //学生用户并且登录成功
            $_SESSION['role'] = 'student';
            $_SESSION['user'] = StudentService::queryByUsername($username);
        } else if(TeacherService::login($username, $password)) {
            //教师用户并登录成功
            $_SESSION['role'] = 'teacher';
            $_SESSION['user'] = TeacherService::queryByUsername($username);
        } else {
            $_SESSION['user'] = null;
        }
        return view('home');
    }

    public function UserUnLogin() {
        if(isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        return view('home');
    }
}