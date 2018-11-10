<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午7:54
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static getRandomString($int)
 */
class StringHelper extends Facade
{
    public static function getFacadeAccessor() {
        return 'StringHelper';
    }
}