<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午1:50
 * Description:
 */

namespace App\Services;




use App\Facades\StringHelper;
use App\Models\TeacherModel;

class TeacherService
{
    public function insertOne($paras) {

        $data = [
            'teacher_username' => $paras['username'],
            'teacher_password' => encrypt($paras['password']),
            'teacher_name' => $paras['name'],
            'teacher_email' => $paras['email'],
            'teacher_active_code' => StringHelper::getRandomString(45),
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
        $teacher = TeacherModel::where('teacher_username',$username) -> first();
//        dd($teacher );
        if(null == $teacher || decrypt($teacher -> getOriginal('teacher_password')) != $password) {
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
        $student = TeacherModel::where('teacher_username',$username) -> first();
        return $student != null;
    }

    /**
     * @param $username
     * @param $activeCode
     * @return bool
     *  邮箱判断能否激活
     */
    public function activeCheck($username, $activeCode) {
        $teacher = $this -> queryByUsername($username);
        return $teacher != null && ($teacher -> getOriginal('teacher_active_code')) == $activeCode;
    }

    /**
     * @param $activeAction
     * @param $username
     * @return bool
     * 激活邮箱
     */
    public function activeAction($username) {
        $teacher = $this -> queryByUsername($username);
        $teacher -> teacher_email_checked = 1;
        $teacher -> save();
    }

    /**
     * @param $username
     * 进行个人身份的验证
     */
    public function activeAuth($username) {
        $teacher = $this -> queryByUsername($username);
        $teacher -> teacher_checked = 1;
        $teacher -> save();
    }

    /**
     * @param $username
     * @param $type
     * 增加管理员权限，1代表题库管理员，2代表院校管理员，4代表超级管理员
     */
    public function activeAdmin($username, $type) {
        $teacher = $this -> queryByUsername($username);
        $teacher -> teacher_admin = $type;
        $teacher -> save();
    }
}
