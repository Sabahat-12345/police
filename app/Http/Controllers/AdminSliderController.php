<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Slider;


class AdminSliderController extends Controller
{
 function index()
 {
        // $sliders = null;
        $sliders= Slider::all();
        // return $sliders;

        return view('admin.slider', compact('sliders'));
    } 

    public function imageUpload(Request $request)
{
    $request->validate([
        'image' => 'required|mimes:jpg,png,jpeg|max:2048',
    ]);

    $file = $request->file('image');

    $slider = new Slider();

    $filename = rand(1000, 9999) . '_' . time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('admin/images/sliders'), $filename);
    $slider->image = $filename;

    // Default status can be set if required (optional)
    $slider->status = 'active';

    // Save the slider to database
    $slider->save();

    return redirect()->back()->with('success', 'Image uploaded successfully.');
}

public function delete($id)
{
    $slider = Slider::findOrFail($id);

    // Delete image from folder
    $imagePath = public_path('admin/images/sliders/' . $slider->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Delete DB entry
    $slider->delete();

   return redirect()->back()->with('success', 'Image delete successfully.');
}


}

  
  

