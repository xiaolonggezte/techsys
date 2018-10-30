<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午1:48
 * Description:
 */

namespace App\Services;



use Illuminate\Support\Facades\DB;

class StudentService
{

    public function insertOne($paras) {

        $data = [
            $paras['username'],
            encrypt($paras['password']),
            $paras['email'],
            $paras['name']
        ];

        DB::insert('insert into students(student_username,student_password,student_email,student_name) values(?,?,?,?)',$data);
        return;
    }
}
