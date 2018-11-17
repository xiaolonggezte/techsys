<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午4:41
 * Description:
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ExamModel extends Model
{
    protected $table = 'exam';

    protected $primaryKey = 'exam_id';

    protected $fillable = [
        'exam_name',
        'exam_begintime',
        'exam_endtime',
    ];
}