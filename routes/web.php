<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BidderController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ApplicationController;
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
    return view('bidderHome');
});



 
/*------------------------------------------
--------------------------------------------
All Login Routes List
--------------------------------------------
--------------------------------------------*/

Auth::routes();


Route::group(['middleware'=>'disable_back'],function(){
Route::middleware(['auth', 'user-access:admin'])->group(function () {
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
});


Route::group(['middleware'=>'disable_back'],function(){
Route::get('/bidder/home', [HomeController::class, 'bidderHome'])->name('bidder.home');
});
  

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
Route::get('/logout/prompt', [App\Http\Controllers\BidderController::class, 'logoutPrompt'])->name('logout.prompt');
});

Route::middleware('auth')->group(function () {
Route::get('/users/status/{user_id}/{status_code}',[adminController::class, 'updateStatus'])->name('status.update');;
});

/*------------------------------------------
--------------------------------------------
Navigations 
--------------------------------------------
--------------------------------------------*/



Route::group(['middleware'=>'disable_back'],function(){
Route::get('/shop', [App\Http\Controllers\BidderController::class, 'shop'])->name('shop');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/contacts', [App\Http\Controllers\BidderController::class, 'contacts'])->name('contacts');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/orders', [App\Http\Controllers\HomeController::class, 'orders'])->name('orders');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/about', [App\Http\Controllers\BidderController::class, 'about'])->name('about');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/adminHome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome');
});

/*------------------------------------------
--------------------------------------------
All Display Routes - Admin Side
--------------------------------------------
--------------------------------------------*/

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/display/bidders', [App\Http\Controllers\adminController::class, 'displayBidders'])->name('display.bidders');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/display/sellers', [App\Http\Controllers\adminController::class, 'displaySellers'])->name('display.sellers');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/display/admins', [App\Http\Controllers\adminController::class, 'displayAdmins'])->name('display.admins');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/display/accounts', [App\Http\Controllers\adminController::class, 'displayAccounts'])->name('display.accounts');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/display/applications', [App\Http\Controllers\adminController::class, 'displayApplications'])->name('display.applications');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/display/blocked', [App\Http\Controllers\adminController::class, 'displayBlocked'])->name('display.blocked');
});


/*------------------------------------------
--------------------------------------------
Applications
--------------------------------------------
--------------------------------------------*/


Route::get('/applications', [App\Http\Controllers\BidderController::class, 'applications'])->name('applications');
Route::post('/applications', [App\Http\Controllers\ApplicationController::class, 'applications'])->name('applications');

/*------------------------------------------
--------------------------------------------
Delete Buttons
--------------------------------------------
--------------------------------------------*/


Route::get('delete_bidders/{id}', 'App\Http\Controllers\adminController@delete_bidders');
Route::get('delete_sellers/{id}', 'App\Http\Controllers\adminController@delete_sellers');
Route::get('delete_admins/{id}', 'App\Http\Controllers\adminController@delete_admins');
Route::get('delete_accounts/{id}', 'App\Http\Controllers\adminController@delete_accounts');
Route::get('delete_applications/{id}', 'App\Http\Controllers\adminController@delete_applications');
Route::get('delete_blocked/{id}', 'App\Http\Controllers\adminController@delete_blocked');






