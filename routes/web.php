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


// front route -----------------------------------------------------------------
// about
Route::get('/', 'Front\Home_@index');
Route::post('/booking', 'Front\Home_@do_booking')->name('booking');
Route::get('/about-us', 'Front\Home_@about');

// other pages
Route::get('/rants', 'Front\Home_@rants');
Route::get('/news', 'Front\Home_@news');
Route::get('/news-details/{id}', 'Front\Home_@news_details');
Route::get('/faq', 'Front\Home_@faq');
Route::get('/terms_and_conditions', 'Front\Home_@tnc');
Route::get('/contact-us', 'Front\Home_@contact');
Route::post('/send-message', 'Front\Home_@send_message')->name('send');
// services details pages
Route::get('/service/{slug}', 'Front\Home_@service_details');


// for ajax call action
Route::get('/subscriber', 'Front\CommonController@save_subscriber'); // save subscriber form footer


// admin routes ----------------------------------------------------------------
Auth::routes();
Route::prefix('admin')->group(function(){

	// dashboard --------
	Route::get('/dashboard', 'Back\Dashboard@index')->name('admin.dashboard');

	// booking section --------
	Route::get('/booking', 'Back\Booking@index');
	Route::post('/add-booking', 'Back\Booking@store');
	Route::post('/update-booking/{id}', 'Back\Booking@update');
	Route::get('/booking-status/{id}/{status}', 'Back\Booking@status');
	Route::get('/booking-delete/{id}', 'Back\Booking@delete');

	// service section --------
	Route::get('/service', 'Back\Service@index');
	Route::get('/add-service', 'Back\Service@add_service');
	Route::post('/do-add-service', 'Back\Service@do_add_service');
	Route::get('/update-service/{id}', 'Back\Service@update_service');
	Route::post('/do-update-service/{id}', 'Back\Service@do_update_service');
	Route::get('/delete-service/{id}', 'Back\Service@delete_service');

	// service slider section --------
	Route::get('/service-slider-list/{serviceid}', 'Back\ServiceSlider@index');
	Route::post('/add-service-slider/{serviceid}', 'Back\ServiceSlider@store');
	Route::post('/update-service-slider/{service_slider_id}', 'Back\ServiceSlider@update');
	Route::get('/delete-service-slider/{service_slider_id}', 'Back\ServiceSlider@delete');

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

	// slider section
	Route::get('/subscriber', 'Back\Subscriber@index');
	Route::get('/delete-subscriber/{id}', 'Back\Subscriber@delete');

	// settings section --------
	Route::get('/settings', 'Back\Settings@index');
	Route::post('/update-settings', 'Back\Settings@update');

	// contact section 
	Route::get('/contact', 'Back\Contact@index');
	Route::get('/delete-contact/{id}', 'Back\Contact@delete');



});