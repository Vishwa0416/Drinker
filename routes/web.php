<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Models\ShopItem;
use App\Models\Mixer;

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

// 

Route::get('/', function () {
    $shopItems = ShopItem::all(); // Fetch items from the database
    return view('homepage', compact('shopItems'));
});

Route::get('/', function () {
    $mix = Mixer::all(); // Fetch items from the database
    return view('homepage', compact('mix'));
});

Route::post('/homepagelogin', [PageController::class, 'showHomePage'])->name('homepagelogin');

Route::get('/product', [PageController::class, 'showProductPage'])->name('product');

Route::get('/beer', [PageController::class, 'showBeerPage'])->name('beer');

Route::get('/about', [PageController::class, 'aboutPage'])->name('about');

Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');

Route::get('/video', function () {
    return view('video');
});
Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
