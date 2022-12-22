<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/home-login', [RegisterController::class, 'loginHome'])->name('login.index');
Route::get('/signUp-login', [RegisterController::class, 'signUp'])->name('login.SignUp');
Route::post('/front-login', [RegisterController::class, 'login'])->name('front.login');
Route::post('/front-logout', [RegisterController::class, 'frontLogout'])->name('front.logout');
Route::post('/signUp-register', [RegisterController::class, 'register'])->name('front.register');
Route::get('/forget-password', [RegisterController::class, 'forgetPassword'])->name('password.forget');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
