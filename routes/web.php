<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


Route::get('/', [HomeController::class, 'index']);
Route::get('waes-resume', [ResumeController::class, 'index']);
Route::get('waes-projects', [ProjectController::class, 'index']);
Route::get('waes-contact', [ContactController::class, 'index']);

Route::get('waes-privacy', [PortfolioController::class, 'viewPrivacyPolicy']);
Route::get('waes-terms', [PortfolioController::class, 'viewTermsConditions']);

// Task 1: Handle Request Data, Store in Session & Log Information 
Route::get('/info', function (Request $request) {
    // Retrieve name and email
    $name = $request->query('name');
    $email = $request->query('email');

    // Store in session
    session([
        'name' => $name,
        'email' => $email,
    ]);

    // Log the data
    Log::info('User Info:', [
        'name' => $name,
        'email' => $email,
    ]);

    // Return JSON response
    return response()->json([
        'status' => 'success',
        'message' => 'User info stored in session and logged.',
        'code' => 201, // custom status code
    ]);
});

//Task 3: Blade Layout & Conditional Display
Route::get('/dashboard', function () {
    return view('dashboard');
});