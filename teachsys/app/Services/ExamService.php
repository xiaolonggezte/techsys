<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午4:43
 * Description:
 */

namespace App\Services;


use App\Models\ExamModel;

class ExamService
{
    public function queryById($id) {
        return ExamModel::where('exam_id', $id) -> first();
    }

    public function insertOne($paras) {
        $data = [
            'exam_name' => $paras['examName'],
            'exam_begintime' => $paras['examBegintime'],
            'exam_endtime' => $paras['examEndtime'],
        ];
        ExamModel::create($data);
    }

    /**
     * @param $paras
     * 更新
     */
    public function update($paras) {
        $data = [
            'exam_name' => $paras['examName'],
            'exam_begintime' => $paras['examBegintime'],
            'exam_endtime' => $paras['examEndtime'],
        ];
        ExamModel::where('exam_id', $paras['examId']) -> update($data);
    }
}