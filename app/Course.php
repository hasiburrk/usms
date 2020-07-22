<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['faculty_id','department_id','levelterm_id','course_name','course_cradit','course_code','status'];
}
