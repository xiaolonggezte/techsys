<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-5 下午4:32
 * Description:
 */

namespace App\Controllers;


use App\Facades\MailService;
use App\Facades\StudentService;
use App\Facades\TeacherService;
use Illuminate\Http\Request;

class MailController extends Controller
{

    /**
     * @param Request $request
     * 发送激活邮件测试方法
     */
    public function activeMailTest(Request $request) {

        $email = $request -> input('email');
        $username = $request -> input('username');
        $activeCode = $request -> input('activeCode');
        $name = $request -> input('name');
        $data = ['email'=>$email, 'username'=>$username, 'name' => $name, 'activeCode'=>$activeCode];

        MailService::activeMail($data);
    }

    /**
     * @param Request $request
     *
     */
    public function activeMail(Request $request) {
        $username = $request -> input('username');
        $activeCode = $request -> input('activeCode');
//        dd($activeCode );

        if(StudentService::activeCheck($username, $activeCode)) {
            StudentService::activeAction($username);
        } else if(TeacherService::activeCheck($username, $activeCode)) {
            TeacherService::activeAction($username);
        } else {
            return view('mail.activeFailed');
        }
        return view('mail.activeSuccess');
    }
}