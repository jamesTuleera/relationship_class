<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NextOfKinController;
use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home', ['user' => Auth::user()]);
    })->name('home');



    Route::inertia('/contact', 'Auth/Contact')->name('contact');
    Route::post('/contact',[ContactController::class, 'store'])->name('contact_store');


    Route::any('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');


});


Route::middleware(['guest'])->group(function () {
    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::inertia('/login', 'Auth/Login')->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

});



Route::middleware(['auth','role'])->group(function () {
    Route::get('/admin', [ContactController::class, 'get'])->name('admin');
    Route::post('/delete/{id}', [ContactController::class, 'delete'])->name('delete');
    // Route::inertia('/admin', 'Admin')->name('admin');
});


Route::get('/test', [TestController::class, 'index'] );
Route::get('/next-of-kin', [NextOfKinController::class, 'index'] );

Route::post('/create-next-of-kin', [NextOfKinController::class, 'create'])->name('create_kin');


