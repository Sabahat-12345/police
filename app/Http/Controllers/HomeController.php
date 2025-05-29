<?php

namespace App\Http\Controllers;

use App\Models\Admin\Gallery;
use Illuminate\Http\Request;
use App\Models\admin\Slider;

class HomeController extends Controller
{
    public function index() {
    // Sirf 3 active sliders fetch karo
    $sliders = Slider::where('status', 'active')
                            ->latest()         // optional: latest 3 first
                            ->take(3)          // sirf 3 record
                            ->get();

    return view('home', compact('sliders'));
}

public function getGallery() {
    // GalleryController ka index method call karo
    $galleries = Gallery::where('is_active', 1)
                        ->latest()         // optional: latest first
                        ->get();
    return view('gallery', compact('galleries'));
}
}