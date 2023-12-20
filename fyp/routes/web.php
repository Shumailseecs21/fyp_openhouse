<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/evaluator/preferences', [UserController::class, 'showPreferences']);
Route::post('/evaluator/preferences', [UserController::class, 'updatePreferences']);
Route::get('/fyp-group/{id}', [FYPGroupController::class, 'showDetails']);
Route::get('/admin/dashboard', [AdminController::class, 'showDashboard']);
Route::post('/admin/set-location', [AdminController::class, 'setLocation']);
Route::get('/project-assignment/{id}', [ProjectAssignmentController::class, 'showAssignment']);
Route::post('/project-assignment/evaluate', [ProjectAssignmentController::class, 'evaluateProject']);
Route::get('/student/dashboard', [StudentController::class, 'showDashboard']);

