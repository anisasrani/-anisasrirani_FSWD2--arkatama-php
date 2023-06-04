<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;

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
    return view('landing');
});

//Register
Route::get('/register', [RegisterController::class,'index']) -> name('register');
Route::post('/register', [RegisterController::class,'store']) -> name('register.store');

//Login
Route::get('/login', [LoginController::class,'index']) -> name('login');
Route::post('/login', [LoginController::class,'authenticate']) -> name('authenticate');

//Middleware
Route::middleware('auth')->group(function(){

//Logout
Route::post('/logout', [LoginController::class,'logout']) -> name('logout');

//Dashboard
Route::get('/dashboard', [DashboardController::class,'index']) -> name('dashboard');

//Slider
Route::get('/slider', [SliderController::class,'index']) -> name('slider.index');
Route::get('/slider/create', [SliderController::class,'create']) -> name('slider.create');
Route::get('/slider/edit', [SliderController::class,'edit']) -> name('slider.edit');

//User
Route::get('/user', [UserController::class, 'index']) -> name('user.index');

//Role
Route::get('/role', [RoleController::class, 'index']) -> name('role.index');

//Category
Route::get('/category', [CategoryController::class,'index']) -> name('category.index');
Route::get('/category/create', [CategoryController::class,'create']) -> name('category.create');
Route::post('/category', [CategoryController::class,'store']) -> name('category.store');

//Product
Route::get('/product', [ProductController::class,'index']) -> name('product.index');
Route::get('/product/create', [ProductController::class,'create']) -> name('product.create');
Route::post('/product', [ProductController::class,'store']) -> name('product.store');

});

