<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{

    public function aboutCreate(){
        return view('backend.pages.about.create');
    }

    public function aboutStore(Request $request){
        $this->validate($request,[
            'title'=>'string|required',
            'name'=>'string|required',
            'email'=>'string|required',
            'img'=>'required',
            'logo'=>'required'
        ]);
    
        if($request->file('img')){
            $name = time().'.'.$request->img->extension();
            $request->img->move(public_path('/about/img/'),$name);
        }
    
        if($request->file('logo')){
            $logo = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('/about/logo/'),$logo);
        }
    
        $abouts = new About();
        $abouts->title = $request->title;
        $abouts->name = $request->name;
        $abouts->email = $request->email;
        $abouts->img = $name;
        $abouts->logo = $logo;
        $abouts->save();
    
        return redirect('/about/manage');
    }
    public function aboutManage(){
        $aboutes = About::orderby('created_at','desc')->paginate(5);
        return view('backend.pages.about.manage',compact('aboutes'));
    }
    public function aboutEdit($id){
        $aboutEdits = About::find($id);
        return view('backend.pages.about.edit',compact('aboutEdits'));
    }
    public function aboutDelete($id){
        $about = About::find($id);
        $about->delete();
        return redirect('/about/manage');
      }

      public function aboutUpdate(Request $request,$id){
        $about= About::find($id);
        if(isset($request->img)){
            if($about->img && file_exists('/about/img/'.$about->img)){
                unlink('/about/img/'.$about->img);
            }
            $updateimg = time().'.'.$request->img->extension();
            $request->img->move(public_path('/about/img/'),$updateimg);
            $about->img = $updateimg;
        }
        if(isset($request->logo)){
            if($about->logo && file_exists('/about/logo/'.$about->logo)){
                unlink('/about/logo/'.$about->logo);
            }
            $updatelogo = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('/about/logo/'),$updatelogo);
            $about->logo = $updatelogo;
        }
        $about->title = $request->title;
        $about->name = $request->name;
        $about->email = $request->email;
        // $about->img = $updateimg;
        // $about->logo = $updatelogo;
        $about->save();
        return redirect('/about/manage');

    }



    //frontend section About start
    public function aboutpage(){
        $allAbout = About::get();
        return view('frontend.pages.modules.about',compact('allAbout'));
    }
    //frontend section About end

}

    
