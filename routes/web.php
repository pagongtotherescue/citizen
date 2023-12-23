<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\bookingcontroller;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('feed');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/signup', function () {
    return view('/signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/adminsignup', function () {
    return view('adminsignup');
});
Route::get('/book', function () {
    return view('book');
});
Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect']);


route::resource('book', bookingcontroller::class);
Route::get('/book/view/{id}', [bookingcontroller::class, 'view'])->name('book.view');
// User routes
// Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
// Route::post('login', [UserController::class, 'login']);
// Route::post('logout', [UserController::class, 'logout'])->name('logout');
// Route::post('/signup', [UserController::class, 'register']);
// Route::get('/logout', 'AuthController@logout');

// Admin routes
// Route::get('admin/login', 'AdminController@showLoginForm')->name('admin.login');
// Route::post('admin/login', 'AdminController@login');
// Route::post('admin/logout', 'AdminController@logout')->name('admin.logout');
// // Route::post('/adminsignup', [AdminController::class, 'register']);