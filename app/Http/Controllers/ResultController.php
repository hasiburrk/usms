<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseAssign;
use App\Department;
use App\Faculty;
use App\LevelTerm;
use App\Session;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    
    public function addMarks(){
        $faculties = Faculty::all();
        $sessions = Session::where('status','=', 1)->get();
        $levelTerms =LevelTerm::all();
        $courses =Course::all();
        return view('teacher.result.add-marks',[
            'faculties'=>$faculties,
            'sessions'=>$sessions,
            'levelTerms'=>$levelTerms,
            'courses'=>$courses
        ]);
    }

    public function studentMarks(Request $request){
        $students = Student::where([
            'faculty_id'=>$request->faculty_id,
            'department_id'=>$request->department_id,
            'session_id'=>$request->session_id,
            'levelterm_id'=>$request->levelterm_id,
        ])->get();

        if(count($students)>0){
            return view('teacher.result.student-mark-by-ajax',[
                'students'=>$students
                 ]);
            }
            else{
            return view('student.student-empty-error');
            } 
    }

    public function courseMarks($course_id){
        $courses=CourseAssign::find($course_id);
        // $students= Student::all();
        // //$courses = CourseAssign::where('course_id','=',$course_id )->get();
        // return $course;
        return view('teacher.result.course-marks',[
            //'students'=>$students,
            //'course'=>$course, 
            'courses'=>$courses, 
        ]);
    }





}
