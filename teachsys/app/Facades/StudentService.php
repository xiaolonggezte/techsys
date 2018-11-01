<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午2:46
 * Description:
 */

namespace App\Facades;



use Illuminate\Support\Facades\Facade;


/**
 * @method static insertOne(array $paras)
 * @method static login($username, $password)
 */
class StudentService extends Facade
{

    protected static function getFacadeAccessor() {
        return 'StudentService';
    }
}