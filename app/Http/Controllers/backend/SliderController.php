<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('backend.pages.slider.manage', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $slider_data = $request->all();

        if ($request->file('photo')){
            $photo = $request->file('photo');
            $width = 1920;
            $height = 720;
            $path = 'banner_img/';
            $name = Str::slug($request->input('title').'-'.Carbon::now()->toDayDateTimeString()).'.webp';
            $slider_data['photo'] = $name;

            ImageUploadController::imageUpload($photo, $width, $height, $path, $name);
        }

        Slider::create($slider_data);

        session()->flash('msg', 'Slider Create Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sliders = Slider::find($id);
        return view('backend.pages.slider.edit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $slider_data = $request->all();
        $slider = Slider::find($id);

        if ($request->file('photo')){
            $photo = $request->file('photo');
            $width = 1920;
            $height = 720;

            $path = 'banner_img/';

            $name = Str::slug($request->input('title').'-'.Carbon::now()->toDayDateTimeString()).'.webp';
            $slider_data['photo'] = ImageUploadController::imageUpload($photo, $width, $height, $path, $name);

            if( $slider->photo!= null){
                ImageUploadController::unlinkImage($path, $slider->photo);

            }


        }else{
            $slider_data['photo'] = $slider->photo;
        }

        $slider->update($slider_data);

        session()->flash('msg', 'Slider Update Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $slider = Slider::find($id);

        if( $slider->photo!= null){
            $path = 'banner_img/';
            ImageUploadController::unlinkImage($path, $slider->photo);
        }
        $slider->delete();
        session()->flash('msg', 'Slider Deleted Successfully');
        session()->flash('cls', 'warning');
        return redirect()->route('sliders.index');

    }
}
