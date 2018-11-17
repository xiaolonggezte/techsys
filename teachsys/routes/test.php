<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-6 下午8:02
 * Description: 测试工具类的路由
 */


use App\dto\ProsSelection;

Route::get('/StringHelperTest', function() {
    $str = \App\Facades\StringHelper::getRandomString(45);
    return $str;
});

/**
 * 激活邮件测试
 */
Route::get('/mailTest','\App\Controllers\MailController@activeMailTest');



Route::get('/users/info',function() {
    return view('users.user-info');
});


Route::get('/users/info/test',function() {
   return view('test');
});

Route::get('/tests/ProService', function() {
    return \App\Facades\ProsService::queryAll();
});

Route::get('/tests/prosSelections', function() {
    $prosSelections = new ProsSelection(4,['answerA', 'answerB', 'answerC', 'answerD']);
    $str = json_encode($prosSelections);//对象数组
    $str = json_encode($prosSelections, JSON_FORCE_OBJECT);//单一的对象
    return $str;
});

Route::get('/tests/prosAnswer', function() {
    $proAnswer1 = new \App\dto\ProsAnswer(1, 3, [0, 1, 2]);
    $str1 = json_encode($proAnswer1);
    $proAnswer2 = new \App\dto\ProsAnswer(2, 3, ['A', 'B', 'C']);
    $str2 = json_encode($proAnswer2);
    $proAnswer3 = new \App\dto\ProsAnswer(3, 2, ['/tests/dd/out1','/tests/dd/out2'], ['/tests/dd/in1','/tests/dd/in2']);
    $str3 = json_encode($proAnswer3);

//    dd($str1);
//    dd($str2);
    dd($str3);
    return $str;
});

Route::get('/tests/examPaperPros', function() {
    $pors = [
        new \App\dto\ExamPaperPro(1, 10001, 100, '', 90),
        new \App\dto\ExamPaperPro(2, 10002, 100, '', 90),
        new \App\dto\ExamPaperPro(3, 10003, 100, '', 90),

    ];
    $examPaperPros = new \App\dto\ExamPaperPros(3, $pors);

    dd(json_encode($examPaperPros));
});
