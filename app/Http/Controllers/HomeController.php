<?php

namespace App\Http\Controllers;

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
}
