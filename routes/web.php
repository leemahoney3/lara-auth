<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/account/dashboard', [AccountController::class, 'dashboard'])->name('account.dashboard');

Route::get('/auth/signin', [AuthController::class, 'signIn'])->name('auth.signin');
Route::post('/auth/signin', [AuthController::class, 'postSignIn']);

Route::get('/auth/signup', [AuthController::class, 'signUp'])->name('auth.signup');
Route::post('/auth/signup', [AuthController::class, 'postSignUp']);

Route::get('/auth/signout', [AuthController::class, 'signOut'])->name('auth.signout');
