<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComplainAgainstPoliceRequest;
use App\Models\ComplainAgainstPolice;

class ComplainAgainstPoliceController extends Controller
{
    public function complainAgainstPolicePost(ComplainAgainstPoliceRequest $request)
    {
       
        if ($request->hasFile('evidence')) {
            $file = $request->file('evidence');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('evidence'), $filename);
            $request['evidence'] = $filename;
           
        }

       
        ComplainAgainstPolice::create($request->only([
            'name',
            'contact_method',
            'incident_date',
            'location',
            'officer_details',
            'description',
            'evidence',
            'witness_info',
            'info_confirm'
        ]));

       
        return redirect()->back()->with('success', 'Complaint submitted successfully.');


    }}