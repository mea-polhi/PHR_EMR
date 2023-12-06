<?php
namespace App\Http\Controllers;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {   
        $totalPatients = Patient::count();
        $totalMen = Patient::where('gender', 'male')->count();
        $totalWomen = Patient::where('gender', 'female')->count();

        $today = date('Y-m-d');
        $totalChildren = Patient::whereRaw("TIMESTAMPDIFF(YEAR, date_of_birth, '$today') < 18")->count();

        $todayDate = Carbon::today(tz:'Asia/Manila');

        return view('dashboard', compact('totalPatients', 'totalMen', 'totalWomen', 'totalChildren', 'todayDate'));
    }
}