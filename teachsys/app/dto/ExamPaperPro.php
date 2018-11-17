<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-17 上午9:13
 * Description: 存放试卷里边的单个题目的作答情况
 */


namespace App\dto;
/**
 * Class ExamPaperPro
 * @package App\dto
 *  试卷里边的单个题目情况
 */
class ExamPaperPro {
    public $number;//序号
    public $proId;//对应的pros_id
    public $score;//这道题对应的总分
    public $userAnswer;//用户提交的答案
    public $getScore;//获得的分数

    /**
     * ExamPaperPro constructor.
     * @param $number
     * @param $proId
     * @param $score
     * @param $userAnswer
     * @param $getScore
     */
    public function __construct($number, $proId, $score, $userAnswer, $getScore)
    {
        $this->number = $number;
        $this->proId = $proId;
        $this->score = $score;
        $this->userAnswer = $userAnswer;//数组
        $this->getScore = $getScore;
    }


}