<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =[
    'student_name',
    'father_name',
    'father_mobile',
    'father_profession',
    'mother_name',
    'mother_mobile',
    'mother_profession',
    'email_address',
    'student_mobile',
    'student_relagion',
    'student_roll',
    'student_reg',
    'faculty_id',
    'department_id',
    'levelterm_id',
    'session_id',
    'student_photo',
    'address',
    'status',
    'password',
    'encrypted_password',
    'user_id'];
}
