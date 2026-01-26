<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Welcome 
Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');

// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// About
Route::get('/about', [PageController::class, 'about'])->name('about');

// Projects
Route::get('/projects', [PageController::class, 'projects'])->name('projects');

// Hobbies
Route::get('/hobbies', [PageController::class, 'hobbies'])->name('hobbies');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
