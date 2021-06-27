<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $schools = Schools::all();
        $students = Students::all();
        $lastStudents = Students::orderBy('id', 'DESC')->limit(15)->get();
        $chefSchools = User::where('role', '=', 'chief')->get();

        return view('index', compact('schools', 'students', 'chefSchools', 'lastStudents'));
    }
}
