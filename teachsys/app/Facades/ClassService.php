<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午5:43
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class ClassService extends Facade
{
    protected static function getFacadeAccessor() {
        return 'ClassService';
    }
}