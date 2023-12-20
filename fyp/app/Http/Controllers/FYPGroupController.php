<?php

// app/Http/Controllers/FYPGroupController.php

namespace App\Http\Controllers;

use App\Models\FYPGroup;
use Illuminate\Http\Request;

class FYPGroupController extends Controller
{
    public function showDetails($id)
    {
        $fypGroup = FYPGroup::findOrFail($id);

        return view('fyp-group.details', compact('fypGroup'));
    }
}

