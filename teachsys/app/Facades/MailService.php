<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午7:06
 * Description:
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static activeMail()
 */
class MailService extends Facade
{
    public static function getFacadeAccessor() {
        return 'MailService';
    }
}