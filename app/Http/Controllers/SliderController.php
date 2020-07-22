<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Slide;

class SliderController extends Controller
{
    public function addSlide(){
        return view('admin.slider.slider-add-form');
    }

    public function uploadSlide(Request $request){
        $this ->validate($request,[
            'silde_image'=>'required',
            'silde_title'=>'required',
            'silde_description'=>'required',
            'status'=>'required',

        ]);

        $data = new Slide();
        $data->silde_image = $this->createSlide($request);
        $data->silde_title = $request->silde_title;
        $data->silde_description = $request->silde_description;
        $data->status = $request->status;
        $data->save();

        return redirect('/home')->with('message','New Slide Added Sucessfully.');
    }

    protected function createSlide($request){
        $file = $request->file('silde_image');
        $imageName = $file->getClientOriginalName();
        $directory = 'admin/assets/slider/';
        $imageUrl = $directory.$imageName;
       
        Image::make($file)->resize(1400 , 570)->save($imageUrl);
        return $imageUrl;
    }

    public function manageSlide(){
        $slides = Slide::all();

        return view('admin.slider.manage-slide',[
        'slides'=>$slides
        ]);
    }

    public function slideUnpublished($id){
        $slide = Slide::find($id);
        $slide->status = 2;
        $slide->save();

        return redirect('/manage-slide')->with('error_message','Slide Unpublished Sucessfully.');
    }

    public function slidePublished($id){
        $slide = Slide::find($id);
        $slide->status = 1;
        $slide->save();

        return redirect('/manage-slide')->with('message','Slide Published Sucessfully.');
    }
    
    public function photoGallery(){
        $slides = Slide::all();

        return view('admin.slider.photo-gallery',['slides'=>$slides]);
    }
    
    public function slideEdit($id){
        $slide = Slide::find($id);

        return view('admin.slider.slide-edit-form',[
            'slide'=>$slide
        ]);
    }

    public function updateSlide(Request $request){
        $slide = Slide::find($request->slide_id);
        $slide->silde_title = $request->silde_title;
        $slide->silde_description = $request->silde_description;
        $slide->status = $request->status;
        if($request->file('silde_image')){
            unlink($slide->silde_image);
            $slide->silde_image = $this->createSlide($request);
        }
        $slide->save();
        return redirect('/manage-slide')->with('message','Operation Sucessful.');
    }

    public function slideDelete($id){
        $slide = Slide::find($id);
        unlink($slide->silde_image);
        $slide->delete();
        return redirect('/manage-slide')->with('error_message','Slide deleted Sucessfully.');
    }



}
