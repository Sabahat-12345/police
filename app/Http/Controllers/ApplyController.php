<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplyRequest;
use App\Models\Apply;


class ApplyController extends Controller
{
    public function applyPost(ApplyRequest  $request)
    {
        // dd($request->all());
    
        $apply = new Apply();
        $apply->fullName = $request->fullName;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->cnic = $request->cnic;
        $apply->dob = $request->dob;
        $apply->jobPosition = $request->jobPosition;
        $apply->education = $request->education;
        $apply->experience = $request->experience;
        // return $apply;
        // Handle file upload
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('resumes'), $filename);
            $apply->resume = $filename;
        } else {
            $apply->resume = null; // or handle as needed
        }
    
        if($apply->save()){
            return redirect()-> back()->with('success', 'Application submitted successfully!');
        } else {
            return redirect()-> back()->with('error', 'Failed to submit application. Please try again.');
        }

        // You can process the data here (e.g., save to DB or send email)
        
    // If validation passes, continue processing (e.g., saving to DB or sending email)
    // Example: save to database or send email
    // JobApplication::create($validatedData);

      

    }
}
