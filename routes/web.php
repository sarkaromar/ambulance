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










// lost report related page's -------
// Route::get('/lost-list', 'Front\LostPostController@lost_list');
// Route::get('/lost-search-list', 'Front\LostPostController@lost_search_list');
// Route::get('/lost-item-details/{id}', 'Front\LostPostController@lost_item_details');
// // report form
// Route::get('/lost-report', 'Front\LostPostController@index');
// Route::post('/send-lost-report', 'Front\LostPostController@store');

// // found report related page's -------
// Route::get('/found-list', 'Front\FoundPostController@found_list');
// Route::get('/found-search-list', 'Front\FoundPostController@found_search_list');
// Route::get('/found-item-details/{id}', 'Front\FoundPostController@found_item_details');
// // report form
// Route::get('/found-report', 'Front\FoundPostController@index');
// Route::post('/send-found-report', 'Front\FoundPostController@store');

// // get area 
// Route::get('/get-area', 'CommonController@get_area');
// Route::get('/get-area-by-slug', 'CommonController@get_area_by_slug');
