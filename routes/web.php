<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeemanagement;



Route::get('employees', [employeemanagement::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('employee/{id}/edit', [employeemanagement::class, 'edit'])->name('employee.edit');
    Route::patch('employee/{id}', [employeemanagement::class, 'update'])->name('employee.update');
    Route::delete('employee/{id}', [employeemanagement::class, 'destroy'])->name('employee.destroy');
    Route::get('/employee', [employeemanagement::class, 'index'])->name('employee.index');
    Route::post('/employee', [employeemanagement::class, 'store'])->name('employee.store');
    
    
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});