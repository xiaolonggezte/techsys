<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午1:50
 * Description:
 */

namespace App\Services;



use Illuminate\Support\Facades\DB;

class TeacherService
{
    public function insertOne($paras) {

        $data = [
            $paras['username'],
            encrypt($paras['password']),
            $paras['email'],
            $paras['name']
        ];
        DB::insert('insert into teachers(teacher_username,teacher_password,teacher_email,teacher_name) values(?,?,?,?)',$data);
        return;
    }
}
