<?php
namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class AddPatientController extends Controller
{

    public function index()
    {
        return view('Patient.add-patient');
    }

    public function store(Request $request)
    {
        // Check if the form is submitted
        if ($request->isMethod('post')) {
            // Validate form data (add more validation rules as needed)
            $validatedData = $request->validate([
                'first_name' => 'required',
                'middle_initial' => 'nullable',
                'last_name' => 'required',
                'patient_phone_no' => 'required',
                'gender' => 'required',
                'date_of_birth' => 'required',
                'address' => 'required',
                'guardian' => 'required',
                'guardian_phone_no' => 'required',
                'relationship' => 'required',
                'payment' => 'required',
            ]);

            Patient::create($validatedData);
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