<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home routes
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/signin', [HomeController::class, 'login'])->name('login');

Route::post('/user/login', [UserAuthController::class, 'user_login'])->name('user.login');
Route::post('/register', [UserAuthController::class, 'register'])->name('user.register');
// Protect routes using 'auth' middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserAuthController::class, 'logout'])->name('user.logout');

    Route::get('/my-account', [HomeController::class, 'user_dashboard'])->name('user.dashboard');
    Route::get('/my-account/details', [HomeController::class, 'account_details'])->name('account.details');
    Route::get('/my-account/orders', [HomeController::class, 'my_orders'])->name('user.orders');
    Route::get('/my-account/address', [HomeController::class, 'my_address'])->name('user.address');
    Route::get('/my-account/request', [HomeController::class, 'collect_request'])->name('user.request');
    Route::post('/requests', [HomeController::class, 'store_request'])->name('requests.store');
});


Route::post('contact/send',[ContactController::class,'send'])->name('contact.submit');
// admin logiin controller
Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/create-admin-user', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');


Route::post('/update-password', [UserProfileController::class, 'changePassword'])->name('password.update');
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
Route::get('/staff', [UserProfileController::class, 'index'])->name('staff');
