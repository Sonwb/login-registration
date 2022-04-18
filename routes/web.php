<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\AdminController;



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



Route::get('/', [Frontcontroller::class, 'index'])->name('index');

Route::get('/login', [Frontcontroller::class, 'login'])->name('login');
Route::get('/register', [Frontcontroller::class, 'register'])->name('register');
Route::get('/home', [AdminController::class, 'index'])->name('admin.index');

 ?>
