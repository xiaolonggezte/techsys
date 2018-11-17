<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午5:51
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class ProsService extends Facade
{
    public static function getFaCadeAccessor() {
        return 'ProsService';
    }
}