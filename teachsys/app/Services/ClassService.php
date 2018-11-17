<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午5:20
 * Description:
 */

namespace App\Services;


use App\Models\ClassModel;

class ClassService
{
    public function queryById($id) {
        return ClassModel::where('class_id', $id) -> first();
    }

    public function insertOne($paras) {
        $datas = [
            'class_school' => 'classSchool',
            'class_academy' => 'classAcademy',
            'class_class' => 'classClass',
        ];

        ClassModel::create($datas);
    }

    public function updateOne($paras) {
        $datas = [
            'class_school' => 'classSchool',
            'class_academy' => 'classAcademy',
            'class_class' => 'classClass',
        ];

        ClassModel::where('class_id', $paras['classId']) -> update($datas);
    }
}