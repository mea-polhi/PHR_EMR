<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserActivityController extends Controller
{
    public function index()
    {
        return view('Settings.user-activity');
    }
}