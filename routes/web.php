<?php

use Presentation\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'laravelVersion' => Application::VERSION,
    ]);
});

Route::get('/profile', [ProfileController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('profile');


require __DIR__ . '/auth.php';
