<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function sliderImages()
    {
        $sliders = Slider::orderBy('sort_by','asc')->get();
        return view('admin.slider.slider_images',compact('sliders'));
    }

    public function sliderImageAdd()
    {
        return view('admin.slider.add-slider-image');
    }

    public function sliderImageStore(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $sliderImage = new Slider();
        $sliderImage->sort_by = $request->sort_by;
       // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/sliders', $imageName);
            $save_url = 'uploads/sliders/' . $imageName;
            $sliderImage->image = $save_url;
        }
        $sliderImage->save();
        $notification = array(
            'message' => 'Slider Image Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.images')->with($notification);
    }

    public function sliderImageEdit($id)
    {
        $sliderImage = Slider::find($id);
        return view('admin.slider.edit-slider-image',compact('sliderImage'));
    }

    public function sliderImageUpdate(Request $request, $id)
    {
        $sliderImage = Slider::find($id);
        $sliderImage->sort_by = $request->sort_by;
        // Image upload
        if ($request->hasFile('image')) {
            if(file_exists($sliderImage->image)){
                unlink($sliderImage->image);
            }
            $image = $request->file('image');
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/sliders', $imageName);
            $save_url = 'uploads/sliders/'. $imageName;
            $sliderImage->image = $save_url;
        }
        $sliderImage->save();
        $notification = array(
            'message' => 'Slider Image Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.images')->with($notification);
    }

    public function sliderImageDelete($id)
    {
        $sliderImage = slider::find($id);
        if(file_exists($sliderImage->image)){
            unlink($sliderImage->image);
        }
        $sliderImage->delete();
        $notification = array(
            'message' => 'Slider Image Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.images')->with($notification);
    }
}
