<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午7:03
 * Description:
 */

namespace App\Services;


use Exception;
use Illuminate\Support\Facades\Mail;

class MailService
{

    /**
     * @param $data
     * @return bool
     * 输入参数： $data = ['email'=>$email, 'username'=>$username, 'name' => $name, 'activeCode'=>$activeCode];
     */
    public function activeMail($data) {
        try {
            Mail::send('mail.active', $data, function($message) use($data) {
                $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
            });
        } catch(Exception $e) {
            return false;
        }
        return true;
    }
}