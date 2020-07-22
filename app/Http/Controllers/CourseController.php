<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Faculty;
use App\LevelTerm;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(){
        $faculties = Faculty::all();
        $departments = Department::all();
        $levelTerms = LevelTerm::all();

        return view('admin.settings.course.add-course-form',[
            'faculties'=>$faculties,
            'departments'=>$departments,
            'levelTerms'=>$levelTerms,
        ]);
    }

    public function facultyWiseDepartment(Request $request){
        $departments = Department::where([
            'faculty_id'=>$request->faculty_id
        ])->where('status','=',1)->get();
        return view('admin.settings.course.faculty-wise-department',[
            'departments'=>$departments
        ]);
    }

    public function courseSave(Request $request){
        $this->validate($request,[
            'faculty_id'=>'required',
            'department_id'=>'required',
            'levelterm_id'=>'required',
            'course_name'=>'required|string',
            'course_code'=>'required|string',
            'course_cradit'=>'required',
        ]);
        $data = new Course();
        $data->faculty_id =$request->faculty_id;
        $data->department_id =$request->department_id;
        $data->levelterm_id =$request->levelterm_id;
        $data->course_name =$request->course_name;
        $data->course_code =$request->course_code;
        $data->course_cradit =$request->course_cradit;
        $data->status = 1;
        $data->save();

        return back()->with('message','Course Added Sucessfully.');
    }

    public function courseList(){
        $faculties = Faculty::all();
        $levelTerms = LevelTerm::all();
        return view('admin.settings.course.course-list',[
            'faculties'=>$faculties,
            
            'levelTerms'=>$levelTerms
        ]);
    }
    public function courseListByAjax(Request $request){
        $courses = Course::where([
            'faculty_id'=>$request->faculty_id,
            'department_id'=>$request->department_id,
            'levelterm_id'=>$request->levelterm_id,
        ])->get();

        if(count($courses)>0){
            return view('admin.settings.course.course-list-by-ajax',[
             'courses'=>$courses
              ]);
            }
            else{
            return view('admin.settings.course.course-empty-error');
            }
    }

     public function courseDelete($id){
        $course = Course::find($id);
        $course->delete();
        
        return redirect('/course-list')->with('error_message','Course Deleted successfully.');
     }

     public function courseEdit($id){
         $course = Course::find($id);
        $faculties = Faculty::all();
        $levelTerms = LevelTerm::all();
        return view('admin.settings.course.course-edit-form',[
            'faculties'=>$faculties,
            'course'=>$course,
            'levelTerms'=>$levelTerms,
        ]);
     }

     public function courseUpdate(Request $request){
        $this->validate($request,[
            'faculty_id'=>'required',
            'department_id'=>'required',
            'levelterm_id'=>'required',
            'course_name'=>'required|string',
            'course_code'=>'required|string',
            'course_cradit'=>'required',
        ]);

        $course =Course::find($request->course_id);
        $course->faculty_id =$request->faculty_id;
        $course->department_id =$request->department_id;
        $course->levelterm_id =$request->levelterm_id;
        $course->course_name =$request->course_name;
        $course->course_code =$request->course_code;
        $course->course_cradit =$request->course_cradit;
        $course->save();

        return redirect('/course-list')->with('message','course info updated successfully.');
     }




}
