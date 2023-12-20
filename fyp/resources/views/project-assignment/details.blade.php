<!-- resources/views/project-assignment/details.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-dark text-light">
                <h5 class="mb-0">Project Assignment Details</h5>
            </div>
            <div class="card-body">
                <!-- Your project assignment details content here -->
                <p>Assigned Project: {{ $projectAssignment->project_name }}</p>
                <!-- Add other details as needed -->
            </div>
        </div>
    </div>
@endsection
