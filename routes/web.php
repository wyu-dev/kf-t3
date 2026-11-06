<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/api/generate-quiz', [QuizController::class, 'generate'])->name('quiz.generate');
