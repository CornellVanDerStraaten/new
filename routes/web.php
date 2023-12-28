<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\Goals\ReportQuestionsController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [WebsiteController::class, 'dashboard'])->name('dashboard');

    Route::resource('goals', GoalController::class);
    Route::group(['prefix' => 'goals/{goal}'], function () {
        Route::get('/questions', [ReportQuestionsController::class, 'edit'])->name('goals.questions');
        Route::put('/questions', [ReportQuestionsController::class, 'update']);
    });
});
