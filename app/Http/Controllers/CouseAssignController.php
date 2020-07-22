<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseAssign;
use App\Faculty;
use App\LevelTerm;
use App\Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CouseAssignController extends Controller
{
    public function courseAssign($userId){
        $user = User::find($userId);
        $teachers = User::whereIn('role', ['teacher','chairman'])->get();
        $sessions =Session::where('status','=', 1)->get();
        $levelTerms = LevelTerm::all();
        return view('teacher.courses.course-assign-form',[
            'teachers'=>$teachers,
            'user'=>$user,
            'levelTerms'=>$levelTerms,
            'sessions'=>$sessions,
        ]);
    }

    public function courseAssignSave(Request $request){
        $this->validate($request,[
            'teacher_id'=>'required',
            'department_id'=>'required',
            'session_id'=>'required',
            'levelterm_id'=>'required',
            'course_id'=>'required',
        ]);
        $data = new CourseAssign();
        $data->teacher_id =$request->teacher_id;
        $data->department_id =$request->department_id;
        $data->session_id =$request->session_id;
        $data->levelterm_id =$request->levelterm_id;
        $data->course_id =$request->course_id;
        $data->status = 1;
        $data->user_id =Auth::user()->id;
        $data->save();

        return back()->with('message','Course Assign Sucessfully.');
    }

    public function courseListByLevelterm(Request $request){
        $courses = Course::where([
            
            'department_id'=>$request->department_id,
            'levelterm_id'=>$request->levelterm_id,
        ])->get();

            return view('teacher.courses.course-list-by-levelterm',[
             'courses'=>$courses
              ]);
            
    }

    public function courseAssignList($userId){
        $user = User::find($userId);
        $courses = DB::table('course_assigns')
        ->join('courses','course_assigns.course_id','=','courses.id')
        ->join('sessions','course_assigns.session_id','=','sessions.id')
        ->join('users','course_assigns.teacher_id','=','users.id')
        ->select('courses.*','course_assigns.*','users.name','sessions.session_name')->get();
        return view('teacher.chairman.course-assign-list',[
            'courses'=>$courses,
            'user'=>$user,
             ]);
    }




}
