<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::prefix('welcome')->group( function () {

    Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
    Route::get('/create', [WelcomeController::class, 'create'])->name('welcome.create');
    Route::post('/', [WelcomeController::class, 'store'])->name('welcome.store');
    Route::get('/{id}', [WelcomeController::class, 'show'])->name('welcome.show');
    
    Route::middleware(['auth:sanctum', 'verified'])->group( function () {
        Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard');
    });
    
});
