<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午3:49
 * Description:
 */

namespace App\Services;


use App\Models\ProsModel;

class ProsService
{
    /**
     * @param $id
     * @return mixed
     * 主键查询
     */
    public function queryById($proId) {
        return ProsModel::where('pros_id', $prosId) -> first();
    }

    public function queryAll() {
        return ProsModel::all();
    }
    /**
     * @param $paras
     * @param $teacherId
     * 插入
     */
    public function insertOne($paras, $teacherId) {
        $data = [
            'pros_type' => $paras['prosType'],
            'pros_is_negative' => $paras['prosIsNegative'],
            'pros_content' => $paras['prosContent'],
            'pros_selections' => $paras['ProsSelection'],
            'pros_answers' => $paras['prosAnswers'],
            'pros_creator_id' => $teacherId,
            'pros_category_id' => $paras['prosCategoryId'],
            'pros_diffculty' => $paras['prosDiffculty'],
        ];
        $prosModel -> create($data);
    }

    /**
     * @param $prosId
     * 将pros_is_private = 1,放入题库中
     */
    public function updatePrivate($prosId) {
        $problem = $this -> queryById($prosId);
        $problem -> pros_is_private = 1;
        $problem -> save();
    }

    /**
     * @param $paras
     * @param $prosId
     * 更新
     */
    public function update($paras, $prosId) {
        $data = [
            'pros_type' => $paras['prosType'],
            'pros_is_negative' => $paras['prosIsNegative'],
            'pros_content' => $paras['prosContent'],
            'pros_selections' => $paras['ProsSelection'],
            'pros_answers' => $paras['prosAnswers'],
            'pros_creator_id' => $teacherId,
            'pros_category_id' => $paras['prosCategoryId'],
            'pros_diffculty' => $paras['prosDiffculty'],
        ];
        ProsModel::where('pros_id',$prosId) -> update($data);
    }


}