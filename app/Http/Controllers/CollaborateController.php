<?php

namespace App\Http\Controllers;

use App\Models\Collaborate;
use Illuminate\Http\Request;

class CollaborateController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        Collaborate::create($validated);

        return back()->with('success', 'Your message has been sent!');
    }
}
