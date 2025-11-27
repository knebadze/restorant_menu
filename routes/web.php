<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

// Locale Switcher
Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Home Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Menu Page
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// Gallery Routes
Route::prefix('gallery')->group(function () {
    Route::get('/images', function () {
        return view('gallery.images');
    })->name('gallery.images');

    Route::get('/videos', function () {
        return view('gallery.videos');
    })->name('gallery.videos');
});

// FAQs Page
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    return back()->with('success', 'Your message has been sent!');
})->name('contact.submit');

// Auth Routes
Auth::routes();

// Admin Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Category Routes
    Route::resource('categories', CategoryController::class);
});
