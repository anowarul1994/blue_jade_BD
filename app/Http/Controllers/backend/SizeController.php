<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Size;

class SizeController extends Controller
{
    public function sizeCreate(){
        $colors = Color::get();
        return view('backend.pages.concerns.subcatagory.create',compact('colors'));
    }
    public function sizeStoreBack(Request $request){
        $this->validate($request,[
            'image'=>'required',
            'color_id'=>'required',
        ]);
        if($request->file('image')){
            $name = time().'.'.$request->image->extension();
            $request->image->move(public_path('/size/'),$name);
        }
        $sizeStore = new Size();
        $sizeStore->color_id = $request->color_id;
        $sizeStore->image = $name;
        $sizeStore->save();
        return redirect('/concerns/subcategory/manage')->with('success','success');
    }
    public function sizeManage(){
        $sizeManage = Size::with('color')->paginate(5);
        return view('backend.pages.concerns.subcatagory.manage',compact('sizeManage'));
    }
    public function sizeDelete($id){
        $sizeDelete = Size::find($id);
        $sizeDelete->delete();
        return redirect('/concerns/subcategory/manage')>with('success','Size has been Deleted');
    }

    public function sizeEdit(Request $request,$id){
        $colorsEdit = Color::get();
        $sizeEdit = Size::with('color')->find($id);
        return view('backend.pages.concerns.subcatagory.edit',compact('sizeEdit','colorsEdit'));
    }

    public function sizeUpdate(Request $request,$id){
        $sizeUpdates = Size::find($id);
            if(isset($request->image)){
                if($sizeUpdates->image && file_exists('/size/'.$sizeUpdates->image)){
                    unlink('/size/'.$sizeUpdates->image);
                }
                $updateimg = time().'.'.$request->image->extension();
                $request->image->move(public_path('/size/'),$updateimg);
                $sizeUpdates->image = $updateimg;
                }
                $sizeUpdates->color_id = $request->color_id;
                $sizeUpdates->save();
                return redirect('/concerns/subcategory/manage')->with('success','updated');
    }
}
