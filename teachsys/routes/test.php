<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午8:02
 * Description: 测试工具类的路由
 */


Route::get('/StringHelperTest', function() {
    $str = \App\Facades\StringHelper::getRandomString(45);
    return $str;
});

/**
 * 激活邮件测试
 */
Route::get('/mailTest','\App\Controllers\MailController@activeMailTest');
