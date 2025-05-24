<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristRegistration;
use Illuminate\Support\Facades\Validator;

class TouristRegistrationController extends Controller
{
   public function register(Request $request)
    {
        // Define validation rules
        $rules = [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'nationality' => 'required|string|max:100',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date|after:arrival_date',
            'itinerary' => 'required|string',
            'group_size' => 'required|integer|min:1',
            'guide' => 'nullable|in:yes,no',
            'emergency_name' => 'required|string|max:255',
            'emergency_phone' => 'required|string|max:20',
            'terms' => 'required|accepted',
        ];


        // Validate request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Check if tourist already exists
            // Create new tourist record
        $tourist = TouristRegistration::create([
            'full_name' => $validator->validated()['full_name'],
            'email' => $request->email,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
            'arrival_date' => $request->arrival_date,
            'departure_date' => $request->departure_date,
            'itinerary' => $request->itinerary,
            'group_size' => $request->group_size,
            'guide' => $request->guide,
            'emergency_name' => $request->emergency_name,
            'emergency_phone' => $request->emergency_phone,
            'terms' => $request->terms,
        ]);
        
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request. Please try again later.']);
        }finally {
                   return redirect()->back()->with('success', 'Tourist registration submitted successfully!');
        }
        

    }
}
