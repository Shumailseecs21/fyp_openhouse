<?php
// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showDashboard()
    {
        $student = Student::where('user_id', auth()->id())->first();

        return view('student.dashboard', compact('student'));
    }
}

