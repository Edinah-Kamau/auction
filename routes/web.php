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
    return view('welcome');
});

Route::group(['middleware'=>'disable_back'],function(){
Route::get('/logout/prompt', [App\Http\Controllers\HomeController::class, 'logoutPrompt'])->name('logout.prompt');
});


Auth::routes();



Route::group(['middleware'=>'disable_back'],function(){
Route::get('/welcome', [BidderController::class, 'index'])->name('welcome');
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


// Dipsplay Users in admin side

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


//application


Route::get('/applications', [App\Http\Controllers\BidderController::class, 'applications'])->name('applications');
Route::post('/applications', [App\Http\Controllers\ApplicationController::class, 'applications'])->name('applications');
Route::get('/download{national_id_front}', [App\Http\Controllers\ApplicationController::class, 'donwload'])->name('download');
Route::get('/download1{national_id_back}', [App\Http\Controllers\ApplicationController::class, 'download1'])->name('download1');
Route::get('/download2{proof_front}', [App\Http\Controllers\ApplicationController::class, 'download2'])->name('download2');
Route::get('/download3{proof_back}', [App\Http\Controllers\ApplicationController::class, 'download3'])->name('download3');








