<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午1:48
 * Description:
 */

namespace App\Services;





use App\Facades\StringHelper;
use App\Models\StudentModel;

class StudentService
{
    
    public function insertOne($paras) {

        $data = [
            'student_username' => $paras['username'],
            'student_password' => encrypt($paras['password']),
            'student_email' => $paras['email'],
            'student_name' => $paras['name'],
            'student_active_code' => StringHelper::getRandomString(45),
        ];
        StudentModel::create($data);
    }

    /**
     * @param $username
     * @return mixed
     * 根据用户名查询用户
     */
    public function queryByUsername($username) {
        return StudentModel::where('student_username',$username) -> first();
    }

    /***
     * @param $username
     * @param $password
     * @return bool
     * 登录校验
     */
    public function login($username, $password) {
        $student = StudentModel::where('student_username',$username) -> first();
//        dd($student -> getOriginal('student_password'));
        if(null == $student || decrypt($student -> getOriginal('student_password')) != $password) {
            return false;
        }
        return true;
    }

    /**
     * @param $username
     * @return bool
     * 判断是否存在
     */
    public function exits($username) {
        $student = StudentModel::where('student_username',$username) -> first();
        return $student != null;
    }

    /**
     * @param $username
     * @param $activeCode
     * @return bool
     *  邮箱判断能否激活
     */
    public function activeCheck($username, $activeCode) {
        $student = $this -> queryByUsername($username);
        return $student != null && $student -> getOriginal('student_active_code') == $activeCode;
    }

    /**
     * @param $activeAction
     * @param $username
     * @return bool
     * 激活邮箱
     */
    public function activeAction($username) {
        $student = $this -> queryByUsername($username);
        $student -> student_email_checked = 1;
        $student -> save();
    }

    /**
     * @param $username
     * 进行个人身份的验证
     */
    public function activeAuth($username) {
        $student = $this -> queryByUsername($username);
        $student -> student_checked = 1;
        $student -> save();
    }
}
