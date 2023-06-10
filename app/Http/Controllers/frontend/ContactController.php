<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Connect;

class ContactController extends Controller
{
    public function contactStore(Request $request){
        $this->validate($request,[
            'name'=>'string|required',
            'email'=>'email|required',
            'phone'=>'string|required',
            'subject'=>'string|required',
            'address'=>'string|required',
            'message'=>'string|required',
        ]);
        $contacts = new Connect();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->subject = $request->subject;
        $contacts->address = $request->address;
        $contacts->message = $request->message;
        $contacts->save();
        return redirect()->back()->with('success','successfulle');
    }

    public function contactManage(){
        $allContact = Connect::orderby('created_at','desc')->paginate(5);
        return view('backend.pages.contact.manage',compact('allContact'));
    }
    public function contactDelete($id){
        $contactDelete = Connect::find($id);
        $contactDelete->delete();
        return redirect('/contact/manage')->with('success','success');
    }
}
