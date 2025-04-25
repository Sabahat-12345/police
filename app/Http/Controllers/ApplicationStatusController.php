<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationStatus;

class ApplicationStatusController extends Controller
{

        public function checkStatus(Request $request)
        {
            $request->validate([
                'application_id' => 'required|string',
                'cnic' => 'required',
            ]);
        
            // Step 1: Check if application ID exists
            $applicationById = ApplicationStatus::where('application_id', $request->application_id)->first();
        
            if (!$applicationById) {
                return back()->with('error1', 'Application ID not found.');
            }
        
            // Step 2: Check if CNIC matches the found application
            if ($applicationById->cnic !== $request->cnic) {
                return back()->with('error1', 'CNIC does not match the application ID.');
            }
        
            // Step 3: All good, return status
            return back()->with('status', $applicationById->status);
        }
        
}
