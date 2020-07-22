<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\LevelTerm;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function addRoutineForm(){
        $departments =Department::all();
        $levelTerms = LevelTerm::all();
        
        return view('teacher.routine.add-routine-form',[
            'departments'=>$departments,
            'levelTerms'=>$levelTerms,
            
        ]);
    }
    public function leveltermWiseCourse(Request $request){
        $courses = Course::where([
            'levelterm_id'=>$request->levelterm_id,
            'department_id'=>$request->department_id,
        ])->get();
        return view('teacher.routine.levelterm-wise-course',[
            'courses'=>$courses
        ]);
    }

    public function Routine(){
        return view('teacher.routine.routine');
    }
}
