<?php

use App\Http\Controllers\pagescontroller;
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

Route::get('/', [pagescontroller::class, 'home']);
Route::get('about', [pagescontroller::class, 'about']);
Route::get('services', [pagescontroller::class, 'services']);
Route::get('blog', [pagescontroller::class, 'blog']);
Route::get('blog-details', [pagescontroller::class, 'blogdetail']);
Route::get('contact', [pagescontroller::class, 'contact']);