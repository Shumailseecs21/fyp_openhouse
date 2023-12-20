<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        // Logic to fetch data for admin dashboard

        return view('admin.dashboard');
    }

    public function setLocation(Request $request)
    {
        // Logic to set the physical location of an FYP project

        return redirect()->route('admin.dashboard')->with('success', 'Location set successfully');
    }
}
