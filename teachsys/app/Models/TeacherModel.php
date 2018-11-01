<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'teacher_id';

    protected $fillable = [
        'teacher_username',
        'teacher_password',
        'teacher_email',
        'teacher_name'
    ];
}