<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment(){
        $faculties = Faculty::all();
        return view('admin.settings.department.add-department-form',[
            'faculties'=>$faculties
        ]);
    }

    public function departmentSave(Request $request){
        $this->validate($request,[
            'faculty_id'=>'required',
            'department_name'=>'required|string',
        ]);
        $data = new Department();
        $data->faculty_id =$request->faculty_id;
        $data->department_name =$request->department_name;
        $data->status = 1;
        $data->save();

        return back()->with('message','Department Added Sucessfully.');
    }

    public function departmentList(){
        $faculties = Faculty::all();
        return view('admin.settings.department.department-list',[
            'faculties'=>$faculties
        ]); 
    }

    public function departmentListByAjax(Request $request){
        $departments = Department::where([
            'faculty_id'=>$request->faculty_id
        ])->where('status','=', 1)->get();
        if(count($departments)>0){
            return view('admin.settings.department.department-list-by-ajax',[
                'departments'=>$departments
            ]);
            }else{
                return view('admin.settings.department.department-empty-error');
            }
    }

    public function departmentUnpublished(Request $request){
        $department = Department::find($request->department_id);
        $department->status = 2;
        $department->save();
 
        $departments = Department::where([
            'faculty_id'=>$request->faculty_id
        ])->get();
 
        return view('admin.settings.department.department-list-by-ajax',[
         'departments'=>$departments
     ])->with('message','Department unpublished sucessful');
     }
 
     public function departmentPublished(Request $request){
         $department = Department::find($request->department_id);
         $department->status = 1;
         $department->save();
  
         $departments = Department::where([
             'faculty_id'=>$request->faculty_id
         ])->get();
  
         return view('admin.settings.department.department-list-by-ajax',[
          'departments'=>$departments
      ])->with('message','Department published sucessful');
      }
 
      public function departmentDelete(Request $request){
         $department = Department::find($request->department_id);
         
         $department->delete();
  
         $departments = Department::where([
             'faculty_id'=>$request->faculty_id
         ])->get();
         if(count($departments)>0){
         return view('admin.settings.department.department-list-by-ajax',[
          'departments'=>$departments
           ])->with('message','Department Delete sucessful');
         }else{
             return view('admin.settings.department.department-empty-error');
         }
      }
 
      public function departmentEdit($id){
          $department = Department::find($id);
         $faculties = Faculty::all();
         return view('admin.settings.department.edit-form',[
             'faculties'=>$faculties,
             'department'=>$department
         ]);
      }
 
      public function departmentUpdate(Request $request){
         $this->validate($request,[
             'faculty_id'=>'required',
             'department_name'=>'required|string',
             
         ]);
 
         $department =Department::find($request->department_id);
         $department->faculty_id =$request->faculty_id;
         $department->department_name =$request->department_name;
         $department->save();
 
         return redirect('/department-list')->with('message','Department info updated successfully.');
      }



}
