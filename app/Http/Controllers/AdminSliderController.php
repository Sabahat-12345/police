<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Slider;

class AdminSliderController extends Controller
{
    function index()
    {
        $sliders = Slider::get();
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

            // Save the full relative path
            $slider->image = 'admin/images/slider/' . $imageNamed;
        }

        // Set status to inactive by default
        $slider->status = 'inactive';
        $slider->save();

        return redirect()->back()->with('success', 'Slider added successfully and is inactive by default!');
    }

    // New method to update slider status
    public function updateStatus(Request $request, $id)
    {
        $slider = Slider::find($id);
        
        if (!$slider) {
            return response()->json(['error' => 'Slider not found'], 404);
        }

        $slider->status = $request->status;
        $slider->save();
$statusText = $request->status == 'active' ? 'activated' : 'deactivated';
        return response()->json([
            'success' => true, 
            'message' => "Slider has been {$statusText} successfully!"
        ]);
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        
        if ($slider) {
            $slider->delete();
            return back()->with('success', 'Image deleted successfully.');
        }
        
        return back()->with('error', 'Slider not found.');
    }
}