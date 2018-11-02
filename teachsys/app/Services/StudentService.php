<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午1:48
 * Description:
 */

namespace App\Services;





use App\Models\StudentModel;

class StudentService
{
    
    public function insertOne($paras) {

        $data = [
            'student_username' => $paras['username'],
            'student_password' => encrypt($paras['password']),
            'student_email' => $paras['email'],
            'student_name' => $paras['name']
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
}
