<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\API\SocialAuthController;

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
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/logout/prompt', [App\Http\Controllers\HomeController::class, 'logoutPrompt'])->name('logout.prompt');
});


Auth::routes();
Route::group(['middleware'=>'disable_back'],function(){
Route::group(['middleware'=>'disable_back'],function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
});

Route::group(['middleware'=>'disable_back'],function(){
Route::middleware(['auth', 'user-access:bidder'])->group(function () {
Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');
});
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware'=>'disable_back'],function(){
Route::middleware(['auth', 'user-access:admin'])->group(function () {
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware'=>'disable_back'],function(){
Route::middleware(['auth', 'user-access:seller'])->group(function () {
Route::get('/seller/home', [HomeController::class, 'sellerHome'])->name('seller.home');
});
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/login-google', [SocialAuthController::class, 'redirectToProvider'])->name('google.login');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleCallback'])->name('google.login.callback');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/shop', [App\Http\Controllers\NavigationController::class, 'shop'])->name('shop');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/contacts', [App\Http\Controllers\NavigationController::class, 'contacts'])->name('contacts');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/orders', [App\Http\Controllers\NavigationController::class, 'orders'])->name('orders');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/about', [App\Http\Controllers\NavigationController::class, 'about'])->name('about');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/adminHome', [App\Http\Controllers\adminController::class, 'adminHome'])->name('adminHome');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/displayBidders', [App\Http\Controllers\adminController::class, 'displayBidders'])->name('displayBidders');
});




