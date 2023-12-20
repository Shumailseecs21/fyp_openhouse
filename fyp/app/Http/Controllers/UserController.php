<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\EvaluatorPreferences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
public function showPreferences()
{
$user = Auth::user();
$preferences = $user->evaluatorPreferences;

return view('evaluator.preferences', compact('preferences'));
}

public function updatePreferences(Request $request)
{
$user = Auth::user();

$preferences = EvaluatorPreferences::updateOrCreate(
['user_id' => $user->id],
$request->only(['preferred_categories', 'specialty_areas'])
);

return redirect()->route('evaluator.preferences')->with('success', 'Preferences updated successfully');
}
}
