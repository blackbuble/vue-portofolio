<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');