<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomentarController;



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
    return view('welcome');
});
    route::get('home', [HomeController::class, 'showHome']);
    route::get('single', [HomeController::class, 'showSingle']);
    route::post('single', [HomeController::class, 'storeKomentar']);
    route::get('artikel/{$artikel}', [HomeController::class, 'show']);

route::prefix('admin')->middleware('auth')->group(function(){
route::get('admin', [HomeController::class, 'showAdmin']);
route::resource('user', UserController::class);
route::resource('artikel', ArtikelController::class);
route::resource('komentar', KomentarController::class);
});


route::get('login', [AuthController::class, 'showLogin'])->name('login');
route::post('login', [AuthController::class, 'loginProcess']);

route::get('register', [AuthController::class, 'showRegister']);
route::post('register', [AuthController::class, 'registerProcess']);

