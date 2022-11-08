<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;




Route::get('/',[FrontendController::class,'index'])->name('web.home');
Route::post('/contact',[ContactController::class,'index'])->name('contact');

Route::middleware(['auth', 'verified'])->group( function(){
         Route::get('/dashboard', function(){
             return Inertia::render('Dashboard');
         })->name('dashboard');

         Route::resource('skills', SkillController::class);
         Route::resource('projects', ProjectController::class);
});

require __DIR__.'/auth.php';
