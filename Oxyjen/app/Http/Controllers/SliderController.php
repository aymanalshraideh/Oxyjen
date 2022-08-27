<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.sliderView', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.slider.sliderCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = $request->all();
        if ($request->file('coverImage1')) {
            $file = $request->file('coverImage1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/slider'), $filename);
            $slider['coverImage1'] = "$filename";

        }
        if ($request->file('coverImage2')) {
            $file = $request->file('coverImage2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/slider'), $filename);
            $slider['coverImage2'] = "$filename";

        }

        Slider::create($slider);
        return redirect()->route('slider')->with('status', 'Slider Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.sliderEdit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->description1 = $request->description1;
        $slider->description2 = $request->description2;
        $slider->link1 = $request->link1;
        $slider->link2 = $request->link2;

        if ($request->file('coverImage1')) {
            $distenation = 'Image/slider' . $slider->coverImage1;
            if (File::exists($distenation)) {
                File::delete($distenation);
            }
            $file = $request->file('coverImage1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/slider'), $filename);
            $slider['coverImage1'] = "$filename";

        }
        if ($request->file('coverImage2')) {
            $distenation = 'Image/slider' . $slider->coverImage2;
            if (File::exists($distenation)) {
                File::delete($distenation);
            }

            $file = $request->file('coverImage2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/slider'), $filename);
            $slider['coverImage2'] = "$filename";

        }

        $slider->save();
        return redirect()->route('slider')->with('status', 'Slider Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = SLider::find($id);
        $slider->delete();
        return redirect()->route('slider')->with('status', 'Slider Deleted Successfully');
    }
}
