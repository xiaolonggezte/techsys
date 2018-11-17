<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午9:00
 * Description: 保存一张试卷的做题情况
 */

namespace App\dto;


class ExamPaperPros
{
    public $num;//题目个数
    public $pors;//ExamPaperPro题目的数组

    /**
     * ExamPaperPros constructor.
     * @param $num
     * @param $pors
     */
    public function __construct($num, $pors)
    {
        $this->num = $num;
        $this->pors = $pors;
    }

}
