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

// auth route
Auth::routes();

// front route -----------------------------------------------------------------
Route::get('/', 'Front\Home@index');

// lost report related page's -------
Route::get('/lost-list', 'Front\LostPostController@lost_list');
Route::get('/lost-search-list', 'Front\LostPostController@lost_search_list');
Route::get('/lost-item-details/{id}', 'Front\LostPostController@lost_item_details');
// report form
Route::get('/lost-report', 'Front\LostPostController@index');
Route::post('/send-lost-report', 'Front\LostPostController@store');

// found report related page's -------
Route::get('/found-list', 'Front\FoundPostController@found_list');
Route::get('/found-search-list', 'Front\FoundPostController@found_search_list');
Route::get('/found-item-details/{id}', 'Front\FoundPostController@found_item_details');
// report form
Route::get('/found-report', 'Front\FoundPostController@index');
Route::post('/send-found-report', 'Front\FoundPostController@store');

// get area 
Route::get('/get-area', 'CommonController@get_area');
Route::get('/get-area-by-slug', 'CommonController@get_area_by_slug');




// // common page -----------
// Route::get('/about', 'Front\Home@about');
// Route::get('/our-vendors', 'Front\Home@our_vendors');
// Route::get('/contact', 'Front\Home@contact');
// Route::get('/blog', 'Front\Home@blog');
// Route::get('/blog-details', 'Front\Home@blog_details');


// // search list and details
// Route::get('/venue-list', 'Front\Venue@list')->name('venue-list');
// Route::get('/venue-details/{slug}', 'Front\Venue@details');
// // list by division
// Route::get('/division/{divi_name}', 'Front\Venue@division_list');
// //*** get calendar schedule for front-end
// Route::get('/get-booking-data', 'Front\Venue@fire_booking_data');


// // for owner ------------------------------------------------------------------
// // venue
// Route::get('/my-venue', 'Front\Owner\Venue@index');
// Route::post('/venue-update', 'Front\Owner\Venue@update')->name('venue.update'); // get ajax request from home controller

// // hall 
// Route::get('/my-hall-list', 'Front\Owner\Hall@index');
// Route::get('/add-hall', 'Front\Owner\Hall@add_hall');
// Route::post('/do-add-hall', 'Front\Owner\Hall@do_add_hall')->name('add_hall');
// Route::get('/edit-hall/{ha_id}', 'Front\Owner\Hall@edit_hall');
// Route::post('/update-hall', 'Front\Owner\Hall@do_edit_hall')->name('update_hall');
// Route::get('/delete-hall/{id}', 'Front\Owner\Hall@delete');

// // booking 
// Route::get('/my-booking/{id}', 'Front\Owner\Booking@booking');
// Route::post('/do-booking', 'Front\Owner\Booking@do_booking')->name('do-booking');
// Route::post('/update-booking', 'Front\Owner\Booking@update_booking')->name('update-booking');
// Route::get('/delete-booking/{id}', 'Front\Owner\Booking@delete');

// // profile
// Route::get('/my-profile', 'Front\Owner\Profile@index');
// Route::post('/profile-update', 'Front\Owner\Profile@update')->name('profile.update');
// Route::post('/profile-pass-update', 'Front\Owner\Profile@update_pass')->name('profile.pass_update');


// back route -----------------------------------------------------------------
Route::prefix('admin')->group(function(){

	// login, logout and register section ------------------------------------------
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	// dashboard section --------------
	Route::get('/dashboard', 'Back\Dashboard@index')->name('admin.dashboard');

	// lost report section -----------------------------------------------------
	Route::get('/active-lost-lists', 'Back\LostPostController@index');
	Route::get('/pending-lost-lists', 'Back\LostPostController@pending');
	Route::get('/inactive-lost-lists', 'Back\LostPostController@inactive');
	Route::post('/store-lost-report', 'Back\LostPostController@store');
	Route::post('/update-lost-report/{id}', 'Back\LostPostController@update');
	Route::get('/status-lost-report/{id}/{status}', 'Back\LostPostController@status');
	Route::get('/destroy-lost-report/{id}', 'Back\LostPostController@destroy');

	// found report section ----------------------------------------------------
	Route::get('/active-found-lists', 'Back\FoundPostController@index');
	Route::get('/pending-found-lists', 'Back\FoundPostController@pending');
	Route::get('/inactive-found-lists', 'Back\FoundPostController@inactive');
	Route::post('/store-found-report', 'Back\FoundPostController@store');
	Route::post('/update-found-report/{id}', 'Back\FoundPostController@update');
	Route::get('/status-found-report/{id}/{status}', 'Back\FoundPostController@status');
	Route::get('/destroy-found-report/{id}', 'Back\FoundPostController@destroy');

	// post category section ---------------------------------------------------
	Route::get('/post-category', 'Back\PostCategoriesController@index');
	Route::post('/store-post-category', 'Back\PostCategoriesController@store');
	Route::post('/update-post-category/{id}', 'Back\PostCategoriesController@update');
	Route::get('/destroy-post-category/{id}', 'Back\PostCategoriesController@destroy');
	
	// areas section ---------------------------------------------------
	Route::get('/area', 'Back\AreasController@index');
	Route::post('/store-area', 'Back\AreasController@store');
	Route::post('/update-area/{id}', 'Back\AreasController@update');
	Route::get('/destroy-area/{id}', 'Back\AreasController@destroy');

	// divisions section ---------------------------------------------------
	Route::get('/division', 'Back\DivisionsController@index');
	Route::post('/store-division', 'Back\DivisionsController@store');
	Route::post('/update-division/{id}', 'Back\DivisionsController@update');
	Route::get('/destroy-division/{id}', 'Back\DivisionsController@destroy');


	// user section -----------------------------------------------------
	Route::get('/user', 'Back\UsersController@index');
	Route::post('/store-user', 'Back\UsersController@store');
	Route::post('/update-user/{id}', 'Back\UsersController@update');
	Route::get('/destroy-user/{id}', 'Back\UsersController@destroy');
	Route::get('/status-user/{id}/{status}', 'Back\UsersController@status');



	// common table action -----------------------------------------------------
	Route::get('/cmn-delete', 'CommonController@delete');
	// Route::get('/cmn-img-delete/{img}', 'CommonController@image_delete');
	Route::get('/cmn-report-status', 'CommonController@report_status');






});