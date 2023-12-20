<?php

// app/Http/Controllers/ProjectAssignmentController.php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\ProjectAssignment;
use Illuminate\Http\Request;

class ProjectAssignmentController extends Controller
{
    public function showAssignment($id)
    {
        $projectAssignment = ProjectAssignment::findOrFail($id);

        return view('project-assignment.details', compact('projectAssignment'));
    }

    public function evaluateProject(Request $request)
    {
        $this->validate($request, [
            'project_assignment_id' => 'required|exists:project_assignments,id',
            'rating' => 'required|integer|min:1|max:10',
            // Add other validation rules as needed
        ]);

        $evaluation = new Evaluation([
            'rating' => $request->input('rating'),
            // Add other evaluation data as needed
        ]);

        $projectAssignment = ProjectAssignment::findOrFail($request->input('project_assignment_id'));
        $projectAssignment->evaluation()->save($evaluation);

        return redirect()->route('evaluator.preferences')->with('success', 'Project evaluated successfully');
    }
}
