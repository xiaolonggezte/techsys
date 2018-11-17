<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午7:14
 * Description: 保存选择题的题目选项
 */

namespace App\dto;

class ProsSelection
{
    public $num;//个数
    public $selections;//存放选项字符串数组

    function __construct($num, $selections) {
        $this -> num = $num;
        $this -> selections = $selections;
    }
}