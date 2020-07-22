<?php

namespace App\Http\Controllers;

use App\Department;
use App\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function index(){
        $usertypes = UserType::all();
        return view('admin.users.user-type-list',[
            'usertypes'=>$usertypes
        ]);
    }
    public function userTypeAdd(Request $request){
    
        if($request->ajax()){
            $this->validate($request,[
                'usertype_name'=>'required|string'
            ]);
        $data = new UserType();
        $data->usertype_name = $request->usertype_name;
        $data->status = 1;
        $data->save();
        }
    }
    public function userTypeList(){
        $usertypes = UserType::all();
        return view('admin.users.user-type-table',[
            'usertypes'=>$usertypes
        ]);
    }
    public function userTypeUnpublish(Request $request){
        $data = UserType::find($request->type_id);
        $data->status = 2;
        $data->save();
        $usertypes = UserType::all();
        return view('admin.users.user-type-table',[
            'usertypes'=>$usertypes
        ]);
    }
    public function userTypePublish(Request $request){
        $data = UserType::find($request->type_id);
        $data->status = 1;
        $data->save();
        $usertypes = UserType::all();
        return view('admin.users.user-type-table',[
            'usertypes'=>$usertypes
        ]);
    }

    public function userTypeUpdate(Request $request){
        $data = UserType::find($request->type_id);
        $data->usertype_name = $request->usertype_name;
        $data->save();
        
        $usertypes = UserType::all();
        return view('admin.users.user-type-table',[
            'usertypes'=>$usertypes
        ]);
    }
    public function userTypeDelete(Request $request){
        $data = UserType::find($request->type_id);
        $data->delete();
        return redirect('user-type-list')->with('error_message','user type Deleted Sucessfully.');
    }

        public function bringDepartment(Request $request){
         $role = UserType::where('role','=',$request->usertype_name);
         $departments = Department::all();
         return view('admin.users.bring-department',[
             'role'=>$role,
             'departments'=>$departments,
             
         ]);
    }

}
