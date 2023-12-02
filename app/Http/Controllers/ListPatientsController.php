<?php
namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Patient;
use Illuminate\Http\Request;

class ListPatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        // Create a new Carbon instance for the current date
        $now = Carbon::now();

        // Loop through each patient and calculate their age
        foreach ($patients as $patient) {
            $patient->age = $now->diffInYears($patient->date_of_birth);
        }

        return view('Patient.list-patient', ['patients' => $patients]);
    }
}

