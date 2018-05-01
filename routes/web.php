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

// services pages
Route::get('/non-ac-ambulance', 'Front\Service@non_ac_ambulance');
Route::get('/ac-ambulance', 'Front\Service@ac_ambulance');
Route::get('/icu-ambulance', 'Front\Service@icu_ambulance');
Route::get('/freezer-van', 'Front\Service@freezer_ambulance');


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
	// ac
	Route::get('/ac', 'Back\Service\Ac@index');
	Route::post('/add-ac-slider', 'Back\Service\Ac@add_slider');
	Route::post('/update-ac-slider/{id}', 'Back\Service\Ac@update_slider');
	Route::post('/update-ac-short-desc/', 'Back\Service\Ac@update_short_desc');
	Route::post('/update-ac-service-info/', 'Back\Service\Ac@update_service_info');
	// common for all
	Route::get('/delete-service-slider/{id}', 'Back\Service\Ac@delete_slider');

	// non ac
	Route::get('/non-ac', 'Back\Service\Non_ac@index');
	Route::post('/add-non-ac-slider', 'Back\Service\Non_ac@add_slider');
	Route::post('/update-non-ac-slider/{id}', 'Back\Service\Non_ac@update_slider');
	Route::post('/update-non-ac-short-desc/', 'Back\Service\Non_ac@update_short_desc');
	Route::post('/update-non-ac-service-info/', 'Back\Service\Non_ac@update_service_info');

	// icu
	Route::get('/icu', 'Back\Service\Icu@index');
	Route::post('/add-icu-slider', 'Back\Service\Icu@add_slider');
	Route::post('/update-icu-slider/{id}', 'Back\Service\Icu@update_slider');
	Route::post('/update-icu-short-desc/', 'Back\Service\Icu@update_short_desc');
	Route::post('/update-icu-service-info/', 'Back\Service\Icu@update_service_info');
	
	// freezer
	Route::get('/freezer', 'Back\Service\Freezer@index');
	Route::post('/add-freezer-slider', 'Back\Service\Freezer@add_slider');
	Route::post('/update-freezer-slider/{id}', 'Back\Service\Freezer@update_slider');
	Route::post('/update-freezer-short-desc/', 'Back\Service\Freezer@update_short_desc');
	Route::post('/update-freezer-service-info/', 'Back\Service\Freezer@update_service_info');

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

	// settings section --------
	Route::get('/settings', 'Back\Settings@index');
	Route::post('/update-settings', 'Back\Settings@update');

});