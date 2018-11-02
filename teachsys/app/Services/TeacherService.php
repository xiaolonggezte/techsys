<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午1:50
 * Description:
 */

namespace App\Services;




use App\Models\TeacherModel;

class TeacherService
{
    public function insertOne($paras) {

        $data = [
            'teacher_username' => $paras['username'],
            'teacher_password' => encrypt($paras['password']),
            'teacher_name' => $paras['email'],
            'teacher_email' => $paras['name']
        ];

        TeacherModel::create($data);
    }

    /**
     * @param $username
     * @return mixed
     * 根据用户名查询用户
     */
    public function queryByUsername($username) {
        return TeacherModel::where('teacher_username',$username) -> first();
    }

    /***
     * @param $username
     * @param $password
     * @return bool
     * 登录校验
     */
    public function login($username, $password) {
        $teacher = TeacherModel::where('teacher_username',$username);
//        dd($teacher);
//        if(null == $teacher || decrypt($teacher['teacher_password']) != $password) {
//            return false;
//        }
        return true;
    }
}
