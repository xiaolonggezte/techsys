<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午7:47
 * Description: 字符串工具类
 */

namespace App\helpers;

class StringHelper
{
    /**
     * @param $len < 50
     * @param null $chars
     * @return string
     * 返回一个随机的字符串
     */
    function getRandomString($len, $chars=null) {
        if (is_null($chars)) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        }
        mt_srand(10000000*(double)microtime());
        for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++) {
            $str .= $chars[mt_rand(0, $lc)];
        }
        return $str;
    }
}