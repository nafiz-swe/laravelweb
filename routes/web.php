<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


// Diagnostic Center
Route::get('/diagnostic-center', function () {
    return view('webSolutions.diagnostic-center');
})->name('diagnostic.center');

// E-commerce
Route::get('/e-commerce', function () {
    return view('webSolutions.e-commerce');
})->name('ecommerce');

// Portfolio / Personal Website
Route::get('/portfolio-personal-website', function () {
    return view('webSolutions.portfolio-personal-website');
})->name('portfolio');

// Resort / Hotel
Route::get('/resort-hotel', function () {
    return view('WebSolutions.resort-hotel');
})->name('resort.hotel');

// Restaurant / Cafe Shop
Route::get('/restaurant-cafe-shop', function () {
    return view('WebSolutions.restaurant-cafe-shop');
})->name('restaurant.cafe');

// Salon / Beauty Parlor
Route::get('/salon-beauty-parlor', function () {
    return view('WebSolutions.salon-beauty-parlor');
})->name('salon.beauty');

// School Management
Route::get('/school-management', function () {
    return view('WebSolutions.school-management');
})->name('school.management');

// Tuition Center
Route::get('/tuition-center', function () {
    return view('WebSolutions.tuition-center');
})->name('tuition.center');