<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function addSession(){
        return view('admin.settings.session.add-session-form');
    }
    public function sessionSave(Request $request){
        $this->validate($request,[
            'session_name'=>['required', 'string', 'min:9', 'max:9']
        ]);

        $data = new Session();
        $data->session_name = $request->session_name;
        $data->status = 1;
        $data->save();

        return back()->with('message','Session Added Sucessfully.');
    }
    public function sessionList(){
        $sessions =Session::all();
        return view('admin.settings.session.session-list',[
            'sessions'=>$sessions
        ]);
    }
    public function sessionUnpublished($id){
        $session = Session::find($id);
        $session->status = 2;
        $session->save();

        return redirect('session-list')->with('message','Session Unpublished Sucessfully.');
    }
    public function sessionPublished($id){
        $session = Session::find($id);
        $session->status = 1;
        $session->save();

        return redirect('session-list')->with('message','Session Published Sucessfully.');
    }

    public function sessionEditForm($id){
        $session = Session::find($id);
        return view('admin.settings.session.session-edit-form',[
            'session'=>$session
        ]);

    }

    public function sessionUpdate(Request $request){
        $this->validate($request,[
            'session_name'=>['required', 'string', 'min:9', 'max:9']
        ]);

        $session = Session::find($request->session_id);
        $session->session_name = $request->session_name;
        $session->save();

        return redirect('session-list')->with('message','Session Name Updated Sucessfully.');
    }

    public function sessionDelete($id){
        $session = Session::find($id);
        $session->delete();

        return redirect('session-list')->with('error_message','Session Name Deleted Sucessfully.');
    }


}
