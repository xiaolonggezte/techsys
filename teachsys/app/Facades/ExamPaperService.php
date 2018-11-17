<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-16 下午5:44
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class ExamPaperService extends Facade
{
    protected static function getFacadeAccessor() {
        return 'ExamPaperService';
    }
}