<!-- resources/views/fyp-group/details.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-dark text-light">
                <h5 class="mb-0">FYP Group Details</h5>
            </div>
            <div class="card-body">
                <!-- Your FYP group details content here -->
                <p>FYP Group Name: {{ $fypGroup->name }}</p>
                <!-- Add other details as needed -->
            </div>
        </div>
    </div>
@endsection
