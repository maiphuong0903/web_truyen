<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return view('client.home');
// })->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/admin/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin_dashboard');

Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/admin/category/create', function () {
    return view('admin.category.create');
});

Route::post('/admin/category/store', [App\Http\Controllers\CategoryController::class, 'store']);

Route::get('/admin/book', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/admin/book/create', [App\Http\Controllers\BookController::class, 'create']);;

Route::post('/admin/book/store', [App\Http\Controllers\BookController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/book/{book_id}', [App\Http\Controllers\BookController::class, 'show'])->name('home.book_detail');

