<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午5:49
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class ProContentCategoryService extends Facade
{
    public static function getFacadeAccessor() {
        return 'ProContentCategoryService';
    }
}