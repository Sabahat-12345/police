<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Slider;

class SliderController extends Controller
{
 function index()
 {
        $sliders = Slider::all();
        // return $sliders;

        return view('admin.slider', compact('sliders'));
    } 
    
    function addImage(Request $request)
    {
    $request->validate([  'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',]);
      

        $slider = new Slider();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = rand(1000, 9999) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin/images/sliders'), $filename);
            $slider->image = $filename;
            
        $slider->save();

        return redirect()->route('admin.slider')->with('success', 'Slider created successfully.');
        }
        
       

        return redirect()->route('admin.slider')->with('error', 'error adding image');

    }
}
  

