<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('user.login'); // for design
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard'); // dashboard design preview
})->name('dashboard');

Route::get('/password', function () {
    return view('password'); // This will render the password.blade.php view
})->name('password');

// Route for logout (no actual functionality, just redirection for design)
Route::post('/logout', function () {
    return redirect()->route('login'); // Redirect to the login page after logout
})->name('logout');

// Route for password reset form (just for design purposes)
Route::get('/password/reset', function () {
    return view('password'); // Assuming 'password.blade.php' exists
})->name('password.reset');

Route::get('/pencalonan', function () {
    return view('pencalonan');
})->name('pencalonan');

Route::get('/pelantikan', function () {
    return view('pelantikan');
})->name('pelantikan');

Route::get('/pengurusan', function () {
    return view('pengurusan');
})->name('pengurusan');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/arkib', function () {
    return view('arkib');
})->name('arkib');

Route::get('/penyelenggaraan', function () {
    return view('penyelenggaraan');
})->name('penyelenggaraan');



