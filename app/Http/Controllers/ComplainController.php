<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
      public function index()
    {
        // dd('asdsad;');
        $models = Complain::get();
        return view('admin.complain', compact('models'));
    }
    public function show($id)
{
    $model = Complain::findOrFail($id);
    return view('admin.complain_show', compact('model'));
}


    function complainPost(Request $request)
    {
        $complain =  $request->validate([
            // Personal Information
            'name' => 'required|string|max:255|min:3',
            'cnic_passport' => 'required|string|max:25',
            'contactNo' => 'required|string|max:50',
            'fatherName' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'whatsAppNo' => 'nullable|string|max:50',

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
        $complain->whatsappNo = $request->whatsAppNo;

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

      public function edit($id)
    {
        // dd('asdsad;');
        $model = Complain::find($id);
        return view('admin.complain_edit', compact('model'));
    }
    public function update(Request $request, $id)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255|min:3',
        'cnic_passport' => 'required|string|max:25',
        'contactNo' => 'required|string|max:50',
        'fatherName' => 'required|string|max:255',
        'gender' => 'required|in:male,female,other',
        'whatsAppNo' => 'nullable|string|max:50',

        'complainantAddress' => 'required|string|max:1000',
        'incidentDate' => 'required|date',
        'complaintNature' => 'required|string|max:255',
        'frNo' => 'nullable|string|max:255',
        'complainantCountry' => 'required|string|max:100',
        'incidentDetails' => 'required|string|max:2000',
        'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
    ]);

    // Find the existing complaint
    $complain = Complain::findOrFail($id);

    // Update fields
    $complain->name = $validatedData['name'];
    $complain->cnic_passport = $validatedData['cnic_passport'];
    $complain->contactNo = $validatedData['contactNo'];
    $complain->fatherName = $validatedData['fatherName'];
    $complain->gender = $validatedData['gender'];
    $complain->whatsappNo = $validatedData['whatsAppNo'];

    $complain->complainantAddress = $validatedData['complainantAddress'];
    $complain->incidentDate = $validatedData['incidentDate'];
    $complain->natureOfComplaint = $validatedData['complaintNature'];
    $complain->frNo = $validatedData['frNo'];
    $complain->complainantCountry = $validatedData['complainantCountry'];
    $complain->incidentDetails = $validatedData['incidentDetails'];

    // Handle file upload
    if ($request->hasFile('attachment')) {
        // Optionally delete the old file
        if ($complain->attachFile && file_exists(public_path($complain->attachFile))) {
            unlink(public_path($complain->attachFile));
        }

        $file = $request->file('attachment');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/complains'), $filename);
        $complain->attachFile = 'uploads/complains/' . $filename;
    }

    // Save the updated record
    $complain->save();

    return redirect()->route('admin-complain.list')->with('success', 'Complaint updated successfully.');
}
   public function destroy($id)
{
    $complain = Complain::findOrFail($id);

    // Delete attached file if exists
    if ($complain->attachFile && file_exists(public_path($complain->attachFile))) {
        unlink(public_path($complain->attachFile));
    }

    $complain->delete();

    return redirect()->back()->with('success', 'Complaint deleted successfully.');
}
public function approve($id)
{
    $complain = Complain::findOrFail($id);
       $complain->status = 1; // Approved
    $complain->save();

    return redirect()->back()->with('success', 'Complaint approved successfully.');
}

public function reject($id)
{
    $complain = Complain::findOrFail($id);
       $complain->status = 2; // Rejected;
    $complain->save();

    return redirect()->back()->with('success', 'Complaint rejected successfully.');
}

}
