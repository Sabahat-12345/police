<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    function complainPost(Request $request)
    {
        $complain =  $request->validate([
            // Personal Information
            'name' => 'required|string|max:255|min:3',
            'cnic_passport' => 'required|string|max:25',
            'contactNo' => 'required|string|max:50',
            'fatherName' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'whatsappNo' => 'nullable|string|max:50',

            // Address
            'complainantAddress' => 'required|string|max:1000',

            // Incident Details
            'incidentDate' => 'required|date',
          'complaintNature' => 'required|string|max:255',
            'frNo' => 'nullable|string|max:255',
            'complainantCountry' => 'required|string|max:100',
            'incidentDetails' => 'required|string|max:2000',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
            
    // Declarations (checkboxes)
    'declaration1' => 'accepted',
    'declaration2' => 'accepted',
        ]);
      

        $complain = new Complain();

        $complain->name = $request->name;
        $complain->cnic_passport = $request->cnic_passport;
        $complain->contactNo = $request->contactNo;
        $complain->fatherName = $request->fatherName;
        $complain->gender = $request->gender;
        $complain->whatsappNo = $request->whatsappNo;

        $complain->complainantAddress = $request->complainantAddress;

        $complain->incidentDate = $request->incidentDate;
        $complain->natureOfComplaint = $request->complaintNature;
        $complain->frNo = $request->frNo;
        $complain->complainantCountry = $request->complainantCountry;
        $complain->incidentDetails = $request->incidentDetails;
        // Removed invalid assignment to timestamps
        $complain->timestamps = now();   
      
        


    // Optional file upload
    if ($request->hasFile('attachment')) {
       $image = $request->file('attachment');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/complains');
        $image->move($path, $filename);
        $complain->attachFile = 'uploads/complains/' . $filename;   
    } else {
        $complain->attachFile = null;
    }
    if( $complain->save()){
        return redirect()->back()->with('success', 'Complain submitted successfully!');
    }
    return redirect()->back()->with('error', 'Complain submitted successfully!');
        

      
       
    }
}
