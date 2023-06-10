<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactinfo;

class ContactinfoController extends Controller
{
    public function contactInfoCreate(){
        return view('backend.pages.contactinfo.create');
    }
    public function contactInfoStore(Request $request){
        $this->validate($request,[
            'email'=>'string|required',
            'phone'=>'string|required',
            'location'=>'string|required',
        ]);
        $contactInfos = new Contactinfo();
        $contactInfos->email = $request->email;
        $contactInfos->phone = $request->phone;
        $contactInfos->location = $request->location;
        $contactInfos->save();
        return redirect('/comphany/info/manage')->with('success','Success');
    }

    public function contactInfoManage(){
        $allContactInfo = Contactinfo::orderby('created_at','desc')->paginate(5);
        return view('backend.pages.contactinfo.manage',compact('allContactInfo'));
    }

    public function contactInfoDelete($id){
        $contactidfoDelete = Contactinfo::find($id);
        $contactidfoDelete->delete();
        return redirect('/comphany/info/manage')->with('success','success');
    }

    public function contactInfoEdit($id){
        $contactInfoEdit = Contactinfo::find($id);
        return view('backend.pages.contactinfo.edit',compact('contactInfoEdit'));
    }

    public function contactInfoUpdate(Request $request,$id){
        $contactInfoUpdate = Contactinfo::find($id);
        $contactInfoUpdate->email = $request->email;
        $contactInfoUpdate->phone = $request->phone;
        $contactInfoUpdate->location = $request->location;
        $contactInfoUpdate->save();
        return redirect('/comphany/info/manage')->with('success','Success');
 
    }
}
