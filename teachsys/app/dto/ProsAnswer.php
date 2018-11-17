<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午8:08
 * Description: 存放对应题目的答案
 */

namespace App\dto;


class ProsAnswer
{
    public $type;//题目类别：1选择，2填空，3代码题
    public $num;//答案个数
    public $answers;//存放答案数组,选择题是整形，填空题，代码题是字符串(代码题的数组为对应的case正确输出文件位置数组)
    public $cases;//样例文件的位置字符串数组
    public function __construct($type, $num, $answers, $cases = null) {
        $this -> type = $type;
        $this -> num = $num;
        $this -> answers = $answers;
        $this -> cases = $cases;
    }


}