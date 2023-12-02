<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddPatientController extends Controller
{
    public function add(Request $request)
    {
        // Check if the form is submitted
        if ($request->isMethod('post')) {
            // Validate form data (add more validation rules as needed)
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'middle_initial' => 'nullable|string|max:255',
                // Add more fields as needed
            ]);

            // Add logic to store patient data in the database
            // You can access validated form data using $validatedData
            // For example:
            // Patient::create($validatedData);

            return redirect()->route('list-patients')->with('success', 'Patient added successfully!');
        }

        // If the form is not submitted, show the form
        return view('Patient.add-patient');
    }
}