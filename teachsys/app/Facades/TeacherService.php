<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-1 下午8:33
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static insertOne(array $paras)
 * @method static login($username, $password)
 */
class TeacherService extends Facade
{

    protected static function getFacadeAccessor() {
        return 'TeacherService';
    }
}