<?php

namespace App\Http\Controllers;

use App\Level;
use App\LevelTerm;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function addLevelTerm(){
        return view('admin.settings.level.add-level-form');
    }
    public function levelTermSave(Request $request){
        $this->validate($request,[
            'level_name'=>['required', 'string', ],
            'term_name'=>['required', 'string', ],
        ]);

        $data = new LevelTerm();
        $data->level_name = $request->level_name;
        $data->term_name = $request->term_name;
        $data->status = 1;
        $data->save();
        return back()->with('message','Level & Term Added Sucessfully.');
    }

    public function levelTermList(){
        $levelterms =LevelTerm::all();
        return view('admin.settings.level.level-term-list',[
            'levelterms'=>$levelterms
        ]);
    }
    public function leveltermUnpublished($id){
        $levelterm = LevelTerm::find($id);
        $levelterm->status = 2;
        $levelterm->save();

        return redirect('level-term-list')->with('message','level & term Unpublished Sucessfully.');
    }
    public function leveltermPublished($id){
        $levelterm = LevelTerm::find($id);
        $levelterm->status = 1;
        $levelterm->save();

        return redirect('level-term-list')->with('message','level & term Published Sucessfully.');
    }

    public function leveltermEditForm($id){
        $levelterm = LevelTerm::find($id);
        return view('admin.settings.level.level-term-edit-form',[
            'levelterm'=>$levelterm
        ]);

    }

    public function leveltermUpdate(Request $request){
        $this->validate($request,[
            'level_name'=>['required', 'string', ],
            'term_name'=>['required', 'string', ],
        ]);

        $levelterm = LevelTerm::find($request->levelterm_id);
        $levelterm->level_name = $request->level_name;
        $levelterm->term_name = $request->term_name;
        $levelterm->save();

        return redirect('level-term-list')->with('message','level & term Updated Sucessfully.');
    }

    public function leveltermDelete($id){
        $levelterm = LevelTerm::find($id);
        $levelterm->delete();

        return redirect('level-term-list')->with('error_message','level & term  Deleted Sucessfully.');
    }
}
