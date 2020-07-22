<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{

    public function courseListByChairman($userId){
      $user = User::find($userId);
        $courses = Course::all();

         return view('teacher.chairman.course-list-by-chairman',[
           'courses'=>$courses,
           'user'=>$user,
          
         ]);
    }
    public function teacherWiseCourseList($userId){
      $user = User::find($userId);

        $courses = DB::table('course_assigns')
        ->join('courses','course_assigns.course_id','=','courses.id')
        ->join('sessions','course_assigns.session_id','=','sessions.id')
        ->select('courses.*','course_assigns.*','sessions.session_name')->get();
          
         return view('teacher.courses.teacher-wise-course-list',[
           'courses'=>$courses,
           'user'=>$user,
          
         ]);

    }
}
