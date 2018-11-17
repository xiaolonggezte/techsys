<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午4:26
 * Description:
 */

namespace App\Services;


use App\Models\PracticeModel;

class PracticeService
{
    public function queryById($id) {
        return PracticeModel::where('practice_id', $id) -> first();
    }

    public function insertOne($paras) {
        $data = [
            'practice_username' => $paras['username'],
            'practice_pro_id' => $paras['practiceProId'],
            'practice_is_judge' => $paras['practiceIsJudge'],
            'practice_answer' => $paras['practiceAnswer'],
            'practice_result' => $paras['practiceResult'],
        ];
        PracticeModel::create($data);
    }
    /**
     * @param $username
     * @param $prosId
     * @return mixed
     * 查询题库做题记录
     */
    public function queryByUsernameAndPro($username, $prosId) {
        return PracticeModel::where('practice_username', $username)
            -> where('practice_pro_id',$prosId);
    }


}