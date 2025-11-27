<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicMenuController;

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

// Menu Page (Public)
Route::get('/menu', [PublicMenuController::class, 'index'])->name('menu');
Route::get('/menu/category/{slug}', [PublicMenuController::class, 'category'])->name('menu.category');
Route::get('/menu/search', [PublicMenuController::class, 'search'])->name('menu.search');


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
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // Category Routes
    Route::resource('categories', CategoryController::class);

    // Menu Routes (Admin)
    Route::resource('menu', MenuController::class);
});
