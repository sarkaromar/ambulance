<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// front route -----------------------------------------------------------------
Route::get('/', 'Front\Home@index');
Route::post('/booking', 'Front\Home@do_booking')->name('booking');

//about page
Route::get('/about-us', 'Front\Home@about');

// our services pages
Route::get('/non-ac-ambulance', 'Front\Home@non_ac_ambulance');

// other pages
Route::get('/rants', 'Front\Home@rants');
Route::get('/news', 'Front\Home@news');
Route::get('/faq', 'Front\Home@faq');
Route::get('/tnc', 'Front\Home@tnc');
Route::get('/contact-us', 'Front\Home@contact');


// admin routes ----------------------------------------------------------------

Route::prefix('admin')->group(function(){

	// dashboard --------
	Route::get('/dashboard', 'Back\Dashboard@index')->name('admin.dashboard');

	// booking section --------
	Route::get('/booking', 'Back\Booking@index');
	Route::post('/add-booking', 'Back\Booking@store');
	Route::post('/update-booking/{id}', 'Back\Booking@update');
	Route::get('/booking-status/{id}/{status}', 'Back\Booking@status');
	Route::get('/booking-delete/{id}', 'Back\Booking@delete');
	
	


});