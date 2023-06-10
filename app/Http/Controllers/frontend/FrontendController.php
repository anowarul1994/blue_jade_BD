<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Color;
use App\Models\Size;
use App\Models\Contactinfo;


class FrontendController extends Controller
{
    public function homePage(){
        $allAbouts = About::orderby('created_at','desc')->get();
        $allColor = Color::get();
        $allContactInfo = Contactinfo::get();
        $sliders = Slider::latest()->get();
        $allSize = Size::with('color')->orderby('created_at','desc')->get();
        return view('frontend.pages.index',compact('allAbouts','sliders','allColor','allSize','allContactInfo'));
    }
    public function contactPage(){
        $allContactInfo = Contactinfo::get();

        return view('frontend.pages.modules.contact',compact('allContactInfo'));
    }
    public function concernsPage(){
        return view('frontend.pages.modules.concerns');
    }
    // public function newsPage(){
    //     return view('frontend.pages.modules.news');
    // }

    public function sliderShow()
    {

    }
}
