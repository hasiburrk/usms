<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use App\LevelTerm;
use App\Session;
use App\Student;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Image;

class StudentController extends Controller
{
    public function studentRegistration(){
        $faculties = Faculty::all();
        $levelTerms = LevelTerm::all();
        $sessions = Session::where('status','=', 1)->get();
        return view('student.registration.registration-form',[
            'faculties'=>$faculties,
            'levelTerms'=>$levelTerms,
            'sessions'=>$sessions,
             
        ]);
    }

    

    public function studentSave(Request $request){
        $this->validate($request,[
            'student_name'=>'required',
            'father_name'=>'required|string',
            'father_mobile'=>'required|string|max:13|min:13',
            'father_profession'=>'required|string',
            'mother_name'=>'required|string',
            'mother_mobile'=>'required|string|max:13|min:13',
            'email_address'=>'required|string|email',
            'student_mobile'=>'required|string|max:13|min:13',
            'student_relagion'=>'required|string',
            'student_roll'=>'required|string|max:6|min:6',
            'student_reg'=>'required|string',
            'faculty_id'=>'required',
            'department_id'=>'required',
            'levelterm_id'=>'required',
            'session_id'=>'required',
            // 'student_photo'=>'required|string',
            'address'=>'required|string',
        ]);
        $student = new Student();
        $student->student_name =$request->student_name;
        $student->father_name =$request->father_name;
        $student->father_mobile =$request->father_mobile;
        $student->father_profession =$request->father_profession;
        $student->mother_name =$request->mother_name;
        $student->mother_mobile =$request->mother_mobile;
        $student->mother_profession =$request->mother_profession;
        $student->email_address =$request->email_address;
        $student->student_mobile =$request->student_mobile;
        $student->student_relagion =$request->student_relagion;
        $student->student_roll =$request->student_roll;
        $student->student_reg =$request->student_reg;
        $student->faculty_id =$request->faculty_id;
        $student->department_id =$request->department_id;
        $student->levelterm_id =$request->levelterm_id;
        $student->session_id =$request->session_id;
        $student->student_photo =$request->student_photo;
        $student->address =$request->address;
        $student->status = 1;
        $student->password =$request->student_mobile;
        $student->encrypted_password =Hash::make($request->student_mobile);
        $student->user_id =Auth::user()->id;
        $student->save();

        return back()->with('message','Student Registration Sucessfully.');
    
    }
    public function studentList(){
        $students = DB::table('students')
        ->join('departments','students.department_id','=','departments.id')
        ->join('sessions','students.session_id','=','sessions.id')
        ->select('students.*','departments.department_name','sessions.session_name')
        ->where([
           'students.status'=> 1
        ])->orderBy('students.session_id','ASC')->get();
        return view('student.student-list',[
            'students'=>$students
        ]);
    }
    public function deptWiseStudent(){
        $departments = Department::all();
        $faculties = Faculty::all();
        $levelTerms = LevelTerm::all();
        $students = Student::all();

        return view('student.department-wise-student',[
            'departments'=>$departments,
            'faculties'=>$faculties,
            'levelTerms'=>$levelTerms,
            'students'=>$students,
        ]);
    }
    public function studentListByAjax(Request $request){
        $students = Student::where([
            'faculty_id'=>$request->faculty_id,
            'department_id'=>$request->department_id,
            'levelterm_id'=>$request->levelterm_id,
        ])->get();

        if(count($students)>0){
            return view('student.student-list-by-ajax',[
             'students'=>$students
              ]);
            }
            else{
            return view('student.student-empty-error');
            }
    }
    public function sessionWiseStudent(){
        $departments = Department::all();
        $faculties = Faculty::all();
        $sessions = Session::where('status','=', 1)->get();
        $students = Student::all();

        return view('student.session-wise-student',[
            'departments'=>$departments,
            'faculties'=>$faculties,
            'sessions'=>$sessions,
            'students'=>$students,
        ]);
    }
    public function sessionWiseStudentList(Request $request){
        $students = Student::where([
            'faculty_id'=>$request->faculty_id,
            'department_id'=>$request->department_id,
            'session_id'=>$request->session_id,
        ])->get();

        if(count($students)>0){
            return view('student.student-list-by-ajax',[
             'students'=>$students
              ]);
            }
            else{
            return view('student.student-empty-error');
            }
    }

    public function studentDetails($id){
        $students = $this->getSingleStudent($id);
        
        return view('student.details.profile',[
            'students'=>$students,
        ]);
    }

    public function studentInfoUpdateForm($id){
        $student = Student::find($id);
        return view('student.details.basic-info-update-form',[
            'student'=>$student,
        ]);

    }

    public function studentInfoUpdate(Request $request){
        $student = Student::find($request->student_id);
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->father_mobile = $request->father_mobile;
        $student->father_profession = $request->father_profession;
        $student->mother_name = $request->mother_name;
        $student->mother_mobile = $request->mother_mobile;
        $student->mother_profession = $request->mother_profession;
        $student->email_address = $request->email_address;
        $student->student_mobile = $request->student_mobile;
        $student->student_relagion = $request->student_relagion;
        $student->student_roll = $request->student_roll;
        $student->student_reg = $request->student_reg;
        if (isset($request->student_photo)){
            $this->updateStudentPhoto($request);
         }
         $student->address =$request->address;
         $student->save();
         return $this->studentDetails($request->student_id);
    }


    protected function getSingleStudent($id){
        $students = DB::table('students')
        ->join('departments','students.department_id','=','departments.id')
        ->join('faculties','students.faculty_id','=','faculties.id')
        ->join('level_terms','students.levelterm_id','=','level_terms.id')
        ->join('sessions','students.session_id','=','sessions.id')
        ->select('students.*','faculties.faculty_name','departments.department_name','sessions.session_name','level_terms.*')
        ->where([
           'students.status'=> 1,
           'students.id'=>$id,
        ])->get();
        return $students;
    }


    protected function updateStudentPhoto($request){
        $student = Student::find($request->student_id);
        if(isset($student->student_photo)){
            unlink($student->student_photo);
            $this->uploadPhoto($request,$student);
        }else{
            $this->uploadPhoto($request,$student);
        }
    }

    protected function uploadPhoto($request,$student){
        $file = $request->file('student_photo');
        $imageName = $file->getClientOriginalName();
        $directory = 'admin/assets/images/students/';
        $imageUrl = $directory.$imageName;
        Image::make($file)->resize(300 , 300)->save($imageUrl);
        $student->student_photo = $imageUrl;
        $student->save();
    }

    public function deptWiseStudentList($userId){
        $user = User::find($userId);
        $students = DB::table('students')
        
        ->join('sessions','students.session_id','=','sessions.id')
        ->select('students.*','sessions.session_name')
        ->where([
           'students.status'=> 1
        ])->orderBy('students.session_id','ASC')->get();
        return view('teacher.chairman.chairman-wise-student-list',[
            'students'=>$students,
            'user'=>$user,
          ]);
    }

public function studentDelete($id){
    $student = Student::find($id);
        $student->delete();
        return redirect('student-list')->with('error_message','Student Delete Sucessfully.');
}



}
