<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Auth;



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
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function () {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('contacts', ContactController::class);
// });
Route::get('/', function () {
    return view('master');
});
// Route::get('/', [UserController::class, 'index'])->name('master');

// Route::get('/', [PagesController::class, 'index']);

// Route::get('/about', [PagesController::class, 'about']);

// Route::get('/services', [PagesController::class, 'services']);
Route::get('/barber1', [BarberController::class, 'getbarber1'])->name('barbers.index1');
Route::get('/barber2', [BarberController::class, 'getbarber2'])->name('barbers.index2');
Route::get('/barber3', [BarberController::class, 'getbarber3'])->name('barbers.index3');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('logout', [LoginController::class, 'logout'])->name('get-logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['permission:admin'], 'prefix' => 'admin'], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class);
});
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class);
    // Route::resource('products', ProductController::class);
});
Route::get('/contact', [ContactController::class, 'getContact'])->name('contact');
Route::post('/contact', [ContactController::class, 'createContact'])->name('contact.createContact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/contact-us', [ContactController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/view', [AppointmentController::class, 'index']);
