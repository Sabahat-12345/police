<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplyRequest;
use App\Models\Apply;
use Illuminate\Support\Facades\App;

class ApplyController extends Controller
{

    public function index()
    {
        $models = Apply::get();
        return view('admin.apply', compact('models'));
    }

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
            // $filePath =  $file->move(public_path('resumes'), $filename);
            // $apply->resume = $filePath;
                $file->move(public_path('resumes'), $filename);
    $apply->resume = 'resumes/' . $filename;  
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
     // Display all applications
  

    // Show details of a specific application
    public function show($id)
    {
          $model = Apply::findOrFail($id);
    $models = collect([$model]);
    return view('admin.apply', compact('models'));
    }

    // Show the edit form for an application
    public function edit($id)
    {
        $model = Apply::findOrFail($id);
        
        return view('admin.apply', compact('model'));
    }

    // Update application
  public function update(Request $request, $id)
{
    $model = Apply::findOrFail($id);
    $model->fullName = $request->fullName;
    $model->email = $request->email;
    $model->phone = $request->phone;
    $model->cnic = $request->cnic;
    $model->dob = $request->dob;
    $model->jobPosition = $request->jobPosition;
    $model->education = $request->education;
    $model->experience = $request->experience;

    if ($request->hasFile('resume')) {
        $resume = $request->file('resume');
        $resumeName = time() . '.' . $resume->getClientOriginalExtension();
        $resume->move(public_path('resumes'), $resumeName);
        $model->resume = 'resumes/' . $resumeName;
    }

    $model->save();

    return redirect()->back()->with('success', 'Application updated successfully!');
}

    // Approve an application
    public function approve($id)
    {
        $apply = Apply::findOrFail($id);
        $apply->status = '1';
        $apply->save();

        return redirect()->back()->with('success', 'Application approved.');
    }

    // Reject an application
    public function reject($id)
    {
        $apply = Apply::findOrFail($id);
        $apply->status = '2';
        $apply->save();

        return redirect()->back()->with('error', 'Application rejected.');
    }

    // Delete an application
    public function destroy($id)
    {
        $apply = Apply::findOrFail($id);
        $apply->delete();

        return redirect()->back()->with('success', 'Application deleted.');
    }
}
