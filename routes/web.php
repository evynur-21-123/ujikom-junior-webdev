<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard.index', compact('users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pegawai', function () {
    return view('dashboard.pegawai');
})->middleware(['auth', 'verified'])->name('pegawai');

Route::get('/edit', function () {
    return view('dashboard.edit');
})->middleware(['auth', 'verified'])->name('data_pegawai');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


    Route::get('/dashboard/pegawai', [EmployeeController::class, 'index'])->name('dashboard.pegawai');

});

require __DIR__.'/auth.php';
