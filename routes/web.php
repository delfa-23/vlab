<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $projects = Project::orderBy('created_at', 'asc')->get();
    return view('welcome', compact('projects'));
});

Route::get('/redirect', function () {
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
})->middleware('auth');

Route::middleware(['auth'])->get('/dashboard', function () {
    return redirect()->route('redirect');
})->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/projects', ProjectController::class);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('vlab');
});

Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
});

Route::get('/produk', function () {
    return view('produk'); // resources/views/produk.blade.php
});

Route::get('/service', function () {
    return view('service'); // resources/views/service.blade.php
});

Route::get('/portfolio', function () {
    return view('portofolio'); // resources/views/portfolio.blade.php
});


