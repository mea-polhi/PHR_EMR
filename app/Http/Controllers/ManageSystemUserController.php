<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageSystemUserController extends Controller
{
    public function index()
    {
        return view('Settings.manage-systemUser');
    }


}