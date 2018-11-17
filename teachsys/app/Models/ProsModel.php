<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午3:44
 * Description: 题目model
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProsModel extends Model
{
    protected $table = 'pros';

    protected $primaryKey = 'pros_id';

    protected $fillable = [
        'pros_type',
        'pros_is_negative',
        'pros_content',
        'pros_selections',
        'pros_answers',
        'pros_creator_id',
        'pros_is_private',
        'pros_resource',
        'pros_category_id',
        'pros_category_id',
    ];
}