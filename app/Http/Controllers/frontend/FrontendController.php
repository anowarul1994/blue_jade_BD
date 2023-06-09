<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Color;
use App\Models\Size;


class FrontendController extends Controller
{
    public function homePage(){
        $allAbouts = About::orderby('created_at','desc')->get();
        $allColor = Color::get();
        $allSize = Size::with('color')->orderby('created_at','desc')->get();
        return view('frontend.pages.index',compact('allAbouts','allColor','allSize'));
    }
    public function contactPage(){
        return view('frontend.pages.modules.contact');
    }
    public function concernsPage(){
        return view('frontend.pages.modules.concerns');
    }
    // public function newsPage(){
    //     return view('frontend.pages.modules.news');
    // }
}
