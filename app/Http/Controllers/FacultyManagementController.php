<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class FacultyManagementController extends Controller
{
    public function addFaculty(){
        return view('admin.settings.faculty.add-faculty-form');
    }

    public function facultySave(Request $request){
        $this->validate($request,[
            'faculty_name'=>'required|string'
        ]);

        $data = new Faculty();
        $data->faculty_name = $request->faculty_name;
        $data->status = 1;
        $data->save();

        return back()->with('message','Faculty Added Sucessfully.');
    }
    public function facultyList(){
        $faculties =Faculty::all();
        return view('admin.settings.faculty.faculty-list',[
            'faculties'=>$faculties
        ]);
    }
    public function facultyUnpublished($id){
        $faculty = Faculty::find($id);
        $faculty->status = 2;
        $faculty->save();

        return redirect('faculty-list')->with('message','Faculty Unpublished Sucessfully.');
    }
    public function facultyPublished($id){
        $faculty = Faculty::find($id);
        $faculty->status = 1;
        $faculty->save();

        return redirect('faculty-list')->with('message','Faculty Published Sucessfully.');
    }

    public function facultyEditForm($id){
        $faculty = Faculty::find($id);
        return view('admin.settings.faculty.faculty-edit-form',[
            'faculty'=>$faculty
        ]);

    }

    public function facultyUpdate(Request $request){
        $this->validate($request,[
            'faculty_name'=>'required|string'
        ]);

        $faculty = Faculty::find($request->faculty_id);
        $faculty->faculty_name = $request->faculty_name;
        $faculty->save();

        return redirect('faculty-list')->with('message','Faculty Name Updated Sucessfully.');
    }

    public function facultyDelete($id){
        $faculty = Faculty::find($id);
        $faculty->delete();

        return redirect('faculty-list')->with('error_message','Faculty Name Deleted Sucessfully.');
    }
    
}