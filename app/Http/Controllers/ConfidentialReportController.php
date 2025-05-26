<?php

namespace App\Http\Controllers;
use App\Models\ConfidentialReport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ConfidentialReportController extends Controller
{
     public function store(Request $request)
    {
        // Validate
        $validator = Validator::make($request->all(), [
            'incident_type' => 'required|string|max:255',
            'observation_date' => 'required|date',
            'details' => 'required|string',
            'evidence' => 'required|file|max:25600', // max 25MB
            'status' => 'required|in:anonymous,identified',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle file upload
        $evidencePath = null;
        if ($request->hasFile('evidence')) {
            $evidencePath = $request->file('evidence')->store('Confidential Reporting', 'public');
        }

        // Create report
        ConfidentialReport::create([
            'incident_type' => $request->incident_type,
            'observation_date' => $request->observation_date,
            'details' => $request->details,
            'evidence' => $evidencePath,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Confidential report submitted successfully.');
    }
}
