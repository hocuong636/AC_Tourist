<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\Homecontroller;
use App\Http\Controllers\clients\Aboutcontroller;
use App\Http\Controllers\clients\Servicecontroller;
use App\Http\Controllers\clients\Packagecontroller;


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

Route::get('/', [Homecontroller::class,'index'])->name('home');
Route::get('/about', [Aboutcontroller::class,'index'])->name('about');
Route::get('/service', [Servicecontroller::class, 'index'])->name('service');
Route::get('/package', [Packagecontroller::class, 'index'])->name('package');

