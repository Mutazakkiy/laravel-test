<?php

use App\Http\Controllers\Dashboardc;
use App\Http\Controllers\Loginc;
use App\Http\Controllers\Registc;
use App\Http\Controllers\Userc;
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

Route::get('/', [Loginc::class, 'login']);
Route::get('/login', [Loginc::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Loginc::class, 'msuk']);
Route::post('/keluar', [Loginc::class, 'kluar']);
Route::get('/register', [Registc::class, 'regist']);
Route::post('/regist', [Registc::class, 'inputNew']);
Route::get('/dashboard', [Dashboardc::class, 'index']);
Route::get('/product', function () {
    return view('dashboard.product.index', [
        'title' => 'Product',
    ]);
});
Route::resource('/user', Userc::class);
