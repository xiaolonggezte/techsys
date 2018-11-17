<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午4:20
 * Description:
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PracticeModel extends Model
{
    protected $table = 'practice';

    protected $primaryKey = 'practice_id';

    protected $fillable = [
        'practice_username',
        'practice_pro_id',
        'practice_is_judge',
        'practice_answer',
        'practice_result',
    ];
}