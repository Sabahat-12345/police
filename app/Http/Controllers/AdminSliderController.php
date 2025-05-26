<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Slider;


class AdminSliderController extends Controller
{
    function index()
    {
        // $sliders = null;
        $sliders = Slider::get();
        // return $sliders;

        return view('admin.slider', compact('sliders'));
    }
public function imageUpload(Request $request)
{
    $request->validate([
        'image' => 'required|mimes:jpg,png,jpeg|max:2048',
    ]);

    $slider = new Slider();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageNamed = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admin/images/slider'), $imageNamed);
        $slider->image = $imageNamed; // ✅ store only the filename
    }

    $slider->status = 'active'; // or 'active' if needed
    $slider->save();

    return redirect()->back()->with('success', 'Image uploaded successfully.');
}


    public function destroy($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return back()->with('success', 'Image delete successfully.');
    }
}
