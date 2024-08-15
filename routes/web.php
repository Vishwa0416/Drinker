<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthController::class, 'showRegistrationForm'])->name('registration');
Route::post('/registration', [AuthController::class, 'register'])->name('registration.post');

Route::get('/password/reset', [AuthController::class, 'showResetForm'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');

Route::post('/homepagelogin', [PageController::class, 'showHomePage'])->name('homepagelogin');

Route::get('/product', [PageController::class, 'showProductPage'])->name('product');

Route::get('/beer', [PageController::class, 'showBeerPage'])->name('beer');

Route::get('/about', [PageController::class, 'aboutPage'])->name('about');

Route::get('/video', function () {
    return view('video');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
