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
Route::get('/terms_and_conditions', 'Front\Home@tnc');
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

	// cms section ---------------------
	// slider section
	Route::get('/slider', 'Back\Slider@index');
	Route::post('/add-slider', 'Back\Slider@store');
	Route::post('/update-slider/{id}', 'Back\Slider@update');
	Route::get('/delete-slider/{id}', 'Back\Slider@delete');

	// news section 
	Route::get('/news', 'Back\News@index');
	Route::post('/add-news', 'Back\News@store');
	Route::post('/update-news/{id}', 'Back\News@update');
	Route::get('/delete-news/{id}', 'Back\News@delete');

	// driver section 
	Route::get('/driver', 'Back\Driver@index');
	Route::post('/add-driver', 'Back\Driver@store');
	Route::post('/update-driver/{id}', 'Back\Driver@update');
	Route::get('/delete-driver/{id}', 'Back\Driver@delete');

	// testimonial section 
	Route::get('/testimonial', 'Back\Testimonial@index');
	Route::post('/add-testimonial', 'Back\Testimonial@store');
	Route::post('/update-testimonial/{id}', 'Back\Testimonial@update');
	Route::get('/delete-testimonial/{id}', 'Back\Testimonial@delete');

	// faq section 
	Route::get('/faq', 'Back\Faq@index');
	Route::post('/add-faq', 'Back\Faq@store');
	Route::post('/update-faq/{id}', 'Back\Faq@update');
	Route::get('/faq-delete/{id}', 'Back\Faq@delete');

	// cms section --------
	Route::get('/about', 'Back\Cms@about');
	Route::post('/about-update', 'Back\Cms@about_update');

	Route::get('/rants', 'Back\Cms@rants');
	Route::post('/rants-update', 'Back\Cms@rants_update');

	Route::get('/tnc', 'Back\Cms@tnc');
	Route::post('/tnc-update', 'Back\Cms@tnc_update');



});