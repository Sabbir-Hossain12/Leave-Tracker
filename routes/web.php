<?php

use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page');
});




Route::view('/history', 'history')->middleware(['auth', 'verified'])->name('history');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Employee Routes
Route::middleware(['auth','EmployeeMiddleware'])->prefix('employee')->group(function(){
   Route::view('/dashboard','employee-dashboard')->name('employee.dashboard');
});

//Admin Routes
Route::middleware(['auth','AdminMiddleware'])->prefix('admin')->group(function(){
   Route::get('/dashboard',[LeaveController::class,'adminDashboard'])->name('admin.dashboard');
});

Route::resource('/leaves', 'App\Http\Controllers\LeaveController');
Route::resource('/employees', 'App\Http\Controllers\EmployeeController');
Route::get('/leave-requests', [LeaveController::class, 'requestListForAdmin'])->name('leave-request-list');
