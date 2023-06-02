<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('admin.login');
    }
    public function loginAdmin(Request $request){

        $admins =Admin::where('email',$request->email)->first();
            if($admins){
                 if(password_verify($request->password,$admins->password)){
                     Session::put('adminsId',$admins->id);
                     Session::put('adminsName',$admins->name);
                     return redirect('/admin/dashboard');
     
                 }
                 else{
                     return redirect()->back()->with('error','password miss match');
                 }
     
            }
            else{
             return redirect()->back()->with('error','User name user name and password miss match'); 
     
     
         }
    
    
        }
    }