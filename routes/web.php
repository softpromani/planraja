<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\packageDetailController;

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

// Route::get('/', function () {

// });



Route::get('/admin-panel', [LoginController::class, 'index'])->name('admin-panel');
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('login-check');


// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/view-hotels', [HotelController::class, 'index'])->name('view-hotels');

    Route::get('/add-hotels', [HotelController::class, 'addHotels'])->name('add-hotels');
    Route::get('getcity/{id}', [HotelController::class, 'getcity'])->name('getcity');
    Route::post('/save-hotel', [HotelController::class, 'saveHotel'])->name('save-hotel');

    Route::get('/edit-hotels/{hotelId}', [HotelController::class, 'editHotels'])->name('edit-hotels');
    Route::post('/update-hotel/{hotelId}', [HotelController::class, 'updateHotel'])->name('update-hotel');


    Route::get('/view-amenities', [HotelController::class, 'viewAmenities'])->name('view-amenities');
    Route::get('/add-amenities', [HotelController::class, 'addAmenities'])->name('add-amenities');
    Route::post('/save-amenities', [HotelController::class, 'saveAmenities'])->name('save-amenities');
    Route::get('/edit-amenities/{amenityId}', [HotelController::class, 'editAmenities'])->name('edit-amenities');
    Route::post('/update-amenities/{amenityId}', [HotelController::class, 'updateAmenities'])->name('update-amenities');

    Route::get('/add-category', [HotelController::class, 'addCategory'])->name('add-category');
    Route::post('/save-amenities-cat', [HotelController::class, 'saveCategory'])->name('save-amenities-cat');

    // PACKAGE MANAGEMENT
    Route::get('/add-tour-category', [PackageController::class, 'addTourCategory'])->name('add-tour-category');
    Route::post('/save-package-category', [PackageController::class, 'savePackageCategory'])->name('save-package-category');

    Route::get('/view-all-packages', [PackageController::class, 'viewAllPackages'])->name('view-all-packages');
    Route::get('/add-eternity/{id}', [PackageController::class, 'add_eternity'])->name('add_eternity');
    Route::post('/store-eternity', [PackageController::class, 'store_eternity'])->name('store_eternity');
    Route::get('/eternity-hotel/{id}', [PackageController::class, 'hotel_eternity'])->name('hotel_eternity');


    Route::get('/add-tour-package', [PackageController::class, 'addTourPackage'])->name('add-tour-package');
    Route::get('/edit-tour-package/{id}', [PackageController::class, 'editTourPackage'])->name('edit-tour-package');


    Route::post('/save-tour-package', [PackageController::class, 'saveTourPackage'])->name('save-tour-package');

    Route::get('/get-cities', [PackageController::class, 'getCities'])->name('get-cities');
});

Route::get('/logout', function (Request $request) {
    Auth::logout();
    Artisan::call('cache:clear');
    return redirect("/admin-panel")->with("status", "You have been logged out !");
})->name('logout');

Route::any('/', [HomeController::class, 'home'])->name('home');
Route::get('package-details/{id}', [HomeController::class, 'singlePackage'])->name('singlePackage');
Route::get('package',[packageDetailController::class,'package_details'])->name('packages');
Route::get('/about-us', [CommonController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [CommonController::class, 'contactUs'])->name('contactUs');
Route::post('/contact', [CommonController::class,'contact'])->name('store.contact');
Route::post('/enquiry', [CommonController::class,'enquiry'])->name('store.enquiry');

Route::get('/privacy-policy', [CommonController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms', [CommonController::class, 'termsOfUse'])->name('termsOfUse');
