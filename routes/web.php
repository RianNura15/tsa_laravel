<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "Nama: Rian Nura Ari Sucipto <br> NIM: 1931730129 <br> Kelas: TSA WEB - B";
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman artikel dengan ID ".$id;
});

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);