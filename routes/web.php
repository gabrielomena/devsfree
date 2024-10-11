<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectsController::class, 'index'])->name('projectsindex');
Route::get("/project/{project}", [ProjectsController::class, 'show'])->name("projects.show");

Route::view("/teste", "welcome");



