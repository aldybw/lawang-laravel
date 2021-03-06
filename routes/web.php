<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::get('/tourist-attraction/{slug}', 'TouristAttractionController@show')->name('tourist-attraction');

Route::middleware(['auth'])->group(function () {
});

Auth::routes();

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('user', 'UserController');
        Route::resource('tourist-attraction', 'TouristAttractionController');
        Route::resource('tourist-gallery', 'TouristGalleryController');
        Route::resource('ticket', 'TicketPriceController');
        Route::resource('working-hour', 'WorkingHourController');
        Route::resource('tourist-object', 'TouristObjectController');
        Route::resource('facility', 'FacilityController');
        Route::resource('tourist-package', 'TouristPackageController');
        Route::resource('hotel', 'HotelController');
        Route::resource('hotel-price', 'HotelPriceController');
        Route::resource('capacity', 'CapacityController');
        Route::resource('regulation', 'RegulationController');
        Route::resource('checkout', 'CheckoutController');
        Route::resource('user', 'UserController');
    });

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});
