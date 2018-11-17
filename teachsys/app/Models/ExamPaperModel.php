<?php
/**
 * Created by xiaolong.
 * User: acm-icpc
 * Time: 18-11-12 下午4:51
 * Description:
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ExamPaperModel extends Model
{
    protected $table = 'exam_paper';

    protected $primaryKey = 'exam_paper_id';

    protected $fillable = [
        'exam_paper_name',
        'exam_paper_exam_id',
        'exam_paper_username',
        'exam_paper_pros',
        'exam_paper_answers',
        'exam_paper_results',
    ];
}