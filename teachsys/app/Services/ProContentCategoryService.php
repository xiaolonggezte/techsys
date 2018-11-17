<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午5:10
 * Description:
 */

namespace App\Services;


use App\Models\ProContentCategoryModel;

class ProContentCategoryService
{
    public function queryById($id) {
        return ProContentCategoryModel::where('pro_content_category_id', $id) -> first();
    }

    public function insertOne($paras) {
        ProContentCategoryModel::create(['pro_content_category_name', $paras['proContentCategoryName']]);
    }

    public function updateOne($paras) {
        ProContentCategoryModel::where('pro_content_category_id', $paras['proContentCategoryId'])
            -> update(['pro_content_category_name', $paras['proContentCategoryName']]);
    }
}