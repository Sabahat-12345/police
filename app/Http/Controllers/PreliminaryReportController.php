<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreliminaryReport;
use Illuminate\Support\Facades\Validator;
class PreliminaryReportController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'missing_name' => 'required|string|max:255',
            'last_seen_location' => 'required|string|max:255',
            'disappearance_datetime' => 'required|date',
            'contact_number' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            PreliminaryReport::create($validator->validated());
            return redirect()->back()->with('success', 'Preliminary report submitted successfully.');
        } catch (\Exception $e) {
           
            return redirect()->back()->with('error', 'An error occurred while submitting the report.');
        }
    }
}
