<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

// Web Solutions
Route::view('/web-solution/diagnostic-center', 'webSolutions.diagnostic-center')->name('diagnostic.center');
Route::view('/web-solution/e-commerce', 'webSolutions.e-commerce')->name('ecommerce');
Route::view('/web-solution/portfolio-personal', 'webSolutions.portfolio-personal-website')->name('portfolio');
Route::view('/web-solution/resort-hotel', 'webSolutions.resort-hotel')->name('resort.hotel');
Route::view('/web-solution/restaurant-cafe', 'webSolutions.restaurant-cafe-shop')->name('restaurant.cafe');
Route::view('/web-solution/salon-parlor', 'webSolutions.salon-beauty-parlor')->name('salon.beauty');
Route::view('/web-solution/school-management', 'webSolutions.school-management')->name('school.management');
Route::view('/web-solution/tuition-center', 'webSolutions.tuition-center')->name('tuition.center');

// Project Estimates
Route::view('/project-estimates/diagnostic-center', 'webSolutions.projectEstimates.diagnostic-estimates')->name('estimates.diagnostic');
Route::view('/project-estimates/e-commerce', 'webSolutions.projectEstimates.ecommerce-estimates')->name('estimates.ecommerce');
Route::view('/project-estimates/portfolio-personal', 'webSolutions.projectEstimates.portfolio-estimates')->name('estimates.portfolio');
Route::view('/project-estimates/resort-hotel', 'webSolutions.projectEstimates.resort-estimates')->name('estimates.resort');
Route::view('/project-estimates/restaurant-cafe', 'webSolutions.projectEstimates.restaurant-estimates')->name('estimates.restaurant');
Route::view('/project-estimates/salon-parlor', 'webSolutions.projectEstimates.salon-estimates')->name('estimates.salon');
Route::view('/project-estimates/school-management', 'webSolutions.projectEstimates.school-estimates')->name('estimates.school');
Route::view('/project-estimates/tution-center', 'webSolutions.projectEstimates.tution-estimates')->name('estimates.tution');