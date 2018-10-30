<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-10-30 下午2:46
 * Description:
 */

namespace App\Facadees;


use App\Services\StudentService;
use Illuminate\Support\Facades\Facade;

class StudentServiceFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'studentServiceFacade';
    }
}