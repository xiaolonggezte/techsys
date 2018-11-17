<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午5:18
 * Description:
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'class';

    protected $primaryKey = 'class_id';

    protected $fillable = [
        'class_school',
        'class_academy',
        'class_class',
    ];
}