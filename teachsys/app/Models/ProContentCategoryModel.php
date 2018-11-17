<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午5:08
 * Description:
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProContentCategoryModel extends Model
{
    protected $table = 'pro_content_category';

    protected $primaryKey = 'pro_content_category_id';

    protected $fillable = [
        'pro_content_category_name',
    ];
}