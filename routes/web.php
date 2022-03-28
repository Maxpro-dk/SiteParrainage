<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SocialController;

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

Route::get('/', [GuestController::class,"index"])->name("index");
Route::get('/guest/profile', [GuestController::class,"guest_profile"])->name("guest_profile");

Route::post('/admin/generate/link', [UserController::class,"gen_link"])->name('gen_link');

Route::get('/admin', [AdminController::class,"index"])->name('dashboard');
Route::get('/admin/user/add', [AdminController::class,"user_add"])->name('user_add');
Route::post('/admin/user/create', [AdminController::class,"user_store"])->name('user_store');
Route::get('/admin/profile', [AdminController::class,"profile"])->name('admin_profile');
Route::get('/admin/see/{id}/profile', [AdminController::class,"see_profile"])->name('see_profile');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);


require __DIR__.'/auth.php';

