<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PayPalPaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoomtypesController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('welcome');
//Contact
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'send'])->name('contact.send');

//About
Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('faq', [HomeController::class, 'faq'])->name('faq');

Auth::routes();



Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/admine_dashbord', [App\Http\Controllers\HomeController::class, 'index'])->name('admine_dashbord');
    // Route::get('chart-line-ajax', 'ChartController@chartLineAjax');

    //wishlist
    Route::get('/admin_wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('admin_wishlist');

    //settings
    Route::get('/admin_settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('admin_settings');

    Route::get('/admin_testimonial', [App\Http\Controllers\HomeController::class, 'testimonial'])->name('admin_testimonial');
    Route::get('/admin/testimonial/{id}/delete', [HomeController::class, 'destroy_testimonial']);
    //booking admin:

    Route::resource('hotel', HotelController::class);
    Route::resource('room_types', RoomtypesController::class);
});

// Route::resource('category', CategoriesController::class);


Route::get('logout', [HomeController::class, 'logout'])->name('logout');

// Details Hotels:
Route::get('detailshotel/{slug}', [BookingController::class, 'detailsHotel'])->name('detailshotel');

Route::resource('booking', BookingController::class);
Route::get('cancel/{id}', [BookingController::class, 'cancelation']);

//hotel-list:
Route::get('hotel-list', [WebController::class, 'hotellist'])->name('hotel-list');

//Checkout:
// Route::get('/checkout', 'CheckoutControllera@index')->name('checkout.index');




//Booking frontend:
// Route::post('/save-booking/{slug}', [BookController::class, 'save_booking']);

//Checkout Booking:
Route::get('checkouthotel/{slug}', [BookingController::class, 'order'])->name('checkouthotel');
Route::post('place-order', [OrderController::class, 'placeorder']);

//paypal
Route::get('create-transaction', [PayPalPaymentController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalPaymentController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalPaymentController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalPaymentController::class, 'cancelTransaction'])->name('cancelTransaction');


//Testimonial
Route::get('/add-testimonial', [WebController::class, 'add_testimonial']);
Route::post('/save-testimonial', [WebController::class, 'save_testimonial']);



// Wishlist
Route::get('add_wishlist', [App\Http\Controllers\WebController::class, 'addToWishlist'])->name('addToWishlist');

// Facebook login URL :
Route::prefix('facebook')->name('facebook.')->group(function () {
    Route::get('auth', [FacebookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FacebookController::class, 'callbackFromFacebook'])->name('callback');
});

// Google URL
Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
