<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Products;
use App\Http\Controllers\Store;

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

Route::get('/', [Home::class,'a'])->name('home');

Route::get('/about', [About::class,'b'])->name('about');

Route::get('/products', [Products::class,'c'])->name('products');

Route::get('/store', [Store::class,'d'])->name('store');