<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;

// Locale Switcher
Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Menu Page
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// Blog Routes
Route::prefix('blog')->group(function () {
    Route::get('/', function () {
        return view('blog.index');
    })->name('blog.index');

    Route::get('/{slug}', function ($slug) {
        return view('blog.show', compact('slug'));
    })->name('blog.show');
});

// Team Page
Route::get('/team', function () {
    return view('team');
})->name('team');

// Testimonials Page
Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

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
    // Handle contact form submission
    return back()->with('success', 'Your message has been sent!');
})->name('contact.submit');

// Reserve Table
Route::get('/reserve', function () {
    return view('reserve');
})->name('reserve');

Route::post('/reserve', function () {
    // Handle reservation submission
    return back()->with('success', 'Your reservation has been received!');
})->name('reserve.submit');

// Newsletter Subscription
Route::post('/newsletter/subscribe', function () {
    // Handle newsletter subscription
    return back()->with('success', 'Thank you for subscribing!');
})->name('newsletter.subscribe');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
