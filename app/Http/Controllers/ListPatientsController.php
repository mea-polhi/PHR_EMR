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

        $now = Carbon::now();

        foreach ($patients as $patient) {
            $patient->age = $now->diffInYears($patient->date_of_birth);
        }

        return view('Patient.list-patient', ['patients' => $patients]);
    }

}