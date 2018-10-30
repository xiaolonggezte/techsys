<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model {
    protected $table = 'students';
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_name',
        'student_username',
        'student_email',
        'student_password'
    ];
    public $timestamps = true;

}
