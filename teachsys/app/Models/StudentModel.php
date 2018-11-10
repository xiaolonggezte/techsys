<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model {
    protected $table = 'student';
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_username',
        'student_name',
        'student_email',
        'student_password',
        'student_active_code',
    ];

}
