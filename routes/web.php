<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Frontend/index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('web.home');

Route::middleware(['auth', 'verified'])->group( function(){
         Route::get('/dashboard', function(){
             return Inertia::render('Dashboard');
         })->name('dashboard');

         Route::resource('skills', SkillController::class);
         Route::resource('projects', ProjectController::class);
});

require __DIR__.'/auth.php';
