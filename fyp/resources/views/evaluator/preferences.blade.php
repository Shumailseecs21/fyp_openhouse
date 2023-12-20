
<!-- resources/views/evaluator/preferences.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-dark text-light">
                <h5 class="mb-0">Evaluator Preferences</h5>
            </div>
            <div class="card-body">
                <!-- Your form content here -->
                <form action="{{ route('evaluator.update.preferences') }}" method="post">
                    @csrf
                    <!-- Form fields go here -->
                    <button type="submit" class="btn btn-dark">Update Preferences</button>
                </form>
            </div>
        </div>
    </div>
@endsection
