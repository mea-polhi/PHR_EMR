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
            // Validate form data
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

            return redirect()->route('list-patients')->with('success', 'Patient added successfully!');
        }

        return view('Patient.add-patient');

    }

}