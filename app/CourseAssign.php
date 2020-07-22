<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseAssign extends Model
{
    protected $fillable = ['teacher_id','department_id','session_id','levelterm_id','course_id','status','user_id'];
}
