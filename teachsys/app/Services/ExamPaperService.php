<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午4:53
 * Description:
 */

namespace App\Services;


use App\Models\ExamPaperModel;

class ExamPaperService
{
    public function queryById($id) {
        return ExamPaperModel::where('exam_paper_id', $id) -> first();
    }

    public function insertOne($paras) {
        $datas = [
            'exam_paper_name' => $paras['examPaperName'],
            'exam_paper_exam_id' => $paras['examPaperExamId'],
            'exam_paper_username' => $paras['examPaperUsername'],
            'exam_paper_pros' => $paras['examPaperPros'],
            'exam_paper_answers' => $paras['examPaperAnswers'],
            'exam_paper_results' => $paras['examPaperResults'],
        ];

        ExamPaperModel::create($datas);
    }

    public function updateOne($paras) {
        $datas = [
            'exam_paper_name' => $paras['examPaperName'],
            'exam_paper_exam_id' => $paras['examPaperExamId'],
            'exam_paper_username' => $paras['examPaperUsername'],
            'exam_paper_pros' => $paras['examPaperPros'],
            'exam_paper_answers' => $paras['examPaperAnswers'],
            'exam_paper_results' => $paras['examPaperResults'],
        ];
        ExamPaperModel::where('exam_paper_id', $paras['examPaperId']) -> update($datas);
    }


}