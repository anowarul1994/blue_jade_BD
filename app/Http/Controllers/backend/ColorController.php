<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Size;

class ColorController extends Controller
{
    public function colorCreate(){
        return view('backend.pages.concerns.category.create');
    }
    public function colorStore(Request $request){
        $this->validate($request,[
            'name'=>'string|required',
            'data_target'=>'string|required',
        ]);
        $colors = new Color();
        $colors->name = $request->name;
        $colors->data_target = $request->data_target;
        $colors->save();
        return redirect('/concerns/category/manage')->with('success','created');
    }
    public function colorManage(){
        $colorManage = Color::orderby('created_at','desc')->paginate(5);
        return view('backend.pages.concerns.category.manage',compact('colorManage'));
    }
    public function colorDelete($id){
        $colordelete = Color::where("id",$id)->delete();
        $colordelete = Size::where("color_id",$id)->delete();

        return redirect('/concerns/category/manage')->with('success','created');
    }
    public function colorEdit($id){
        $colorEdit = Color::find($id);
        return view('backend.pages.concerns.category.edit',compact('colorEdit'));
    }
    public function colorUpdate(Request $request,$id){
        $colorUpdates = Color::find($id);
        $colorUpdates->name = $request->name;
        $colorUpdates->data_target = $request->data_target;
        $colorUpdates->save();
        return redirect('/concerns/category/manage')->with('success','created');
    }

}
