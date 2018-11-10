<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-5 上午10:18
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class CommonService extends Facade
{
    protected static function getFacadeAccessor() {
        return 'CommonService';
    }
}