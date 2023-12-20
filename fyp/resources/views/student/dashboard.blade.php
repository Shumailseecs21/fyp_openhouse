<!-- resources/views/student/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-dark text-light">
                <h5 class="mb-0">Student Dashboard</h5>
            </div>
            <div class="card-body">
                <!-- Your student dashboard content here -->
                <p>Number of Evaluators: {{ $student->evaluators()->count() }}</p>
                <!-- Add other details as needed -->
            </div>
        </div>
    </div>
@endsection
