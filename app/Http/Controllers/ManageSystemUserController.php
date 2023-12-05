<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageSystemUserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('Settings.manage-systemUser', ['users' => $users]);
    }

}