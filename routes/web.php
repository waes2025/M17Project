<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('waes-resume', [ResumeController::class, 'index']);
Route::get('waes-projects', [ProjectController::class, 'index']);
Route::get('waes-contact', [ContactController::class, 'index']);

Route::get('waes-privacy', [PortfolioController::class, 'viewPrivacyPolicy']);
Route::get('waes-terms', [PortfolioController::class, 'viewTermsConditions']);