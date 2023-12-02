<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPatientsController extends Controller
{
    public function index()
    {
        return view('Patient/list-patient');
    }

    // Add logic for listing patients if needed
}

