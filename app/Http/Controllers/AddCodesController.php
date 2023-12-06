<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCodesController extends Controller
{
    public function index()
    {
        return view('Settings.icd-codes');
    }
}