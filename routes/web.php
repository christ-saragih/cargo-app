<?php

use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

    // Armada
    Route::get('/armadas', [ArmadaController::class, 'index'])->name('armadas.index');
    Route::get('/armadas/create', [ArmadaController::class, 'create'])->name('armadas.create');
    Route::post('/armadas/store', [ArmadaController::class, 'store'])->name('armadas.store');
    Route::get('/armadas/{id}/edit', [ArmadaController::class, 'edit'])->name('armadas.edit');
    Route::put('/armadas/{id}', [ArmadaController::class, 'update'])->name('armadas.update');
    Route::delete('/armadas/{id}', [ArmadaController::class, 'destroy'])->name('armadas.destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
