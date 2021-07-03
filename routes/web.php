<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;

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
// Praktikum 1
// Route::get('/', function () {
//     return "Selamat Datang";
//     });

// Route::get('/about', function () {
//     return "Rizqullah Raihan Osiris (1941720218)";
//     });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '. $id;
// });

// Praktikum 2 no 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Praktikum 2 no 3
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

// Praktikum 3
// Halaman Home
// Route::get('/home', [HomeController::class, 'home']);
// Halaman Products
// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductsController::class, 'marbel_edu_games']);
//     Route::get('/marbel_and_friends_kids_games', [ProductsController::class, 'marbel_and_friends_kids_games']);
//     Route::get('/riri_story_books', [ProductsController::class, 'riri_story_books']);
//     Route::get('/kolak_kids_songs', [ProductsController::class, 'kolak_kids_songs']);
// });

// Halaman News
Route::get('/{param}', [NewsController::class, 'index']);
Route::get('news/{param}', [NewsController::class, 'news']);

// Halaman Program
// Route::prefix('programs')->group(function(){
//     Route::get('/', [ProgramController::class, 'karir']);
//     Route::get('/magang', [ProgramController::class, 'magang']);
//     Route::get('/kunjungan_industri', [ProgramController::class, 'kunjungan_industri']);
// });

// Halaman About Us
// Route::get('/about_us', [AboutUsController::class, 'about_us']);

// Halaman Contoct Us
Route::resource('contact-us', ContactUsController::class);
