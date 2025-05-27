<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Gallery;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryItems = Gallery::latest()->get();
        return view('admin.gallery', compact('galleryItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $imagePath =  $image->move(('admin/images/gallery'), $imageName);
             // ✅ Save to /public/admin/images/gallery
        }

        Gallery::create([
            'image_path' => $imagePath, // ✅ Only filename saved
            'is_active' => $request->has('is_active'),
        ]);

        return back()->with('success', 'Gallery item added!');
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->is_active = $request->has('is_active');
        $gallery->save();

        return back()->with('success', 'Status updated.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        $imagePath = public_path('admin/images/gallery/' . $gallery->image_path);

        if (File::exists($imagePath)) {
            File::delete($imagePath); // ✅ Delete actual file
        }

        $gallery->delete();

        return back()->with('success', 'Gallery item deleted.');
    }
}