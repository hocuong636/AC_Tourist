<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\Homecontroller;
use App\Http\Controllers\clients\Aboutcontroller;
use App\Http\Controllers\clients\Servicecontroller;
use App\Http\Controllers\clients\Tourscontroller;
use App\Http\Controllers\clients\Tourdetailcontroller;
use App\Http\Controllers\clients\Destinationcontroller;
use App\Http\Controllers\clients\ToursGuidecontroller;
use App\Http\Controllers\clients\Contactcontroller;

use App\Http\Controllers\clients\Bookingcontroller;
use App\Http\Controllers\clients\Faqscontroller;
use App\Http\Controllers\clients\Blogscontroller;
use App\Http\Controllers\clients\BlogsDetailcontroller;
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
Route::get('/tours', [Tourscontroller::class, 'index'])->name('tours');
Route::get('/tour-detail', [Tourdetailcontroller::class, 'index'])->name('tour-detail');
Route::get('/Destination', [Destinationcontroller::class, 'index'])->name('Destination');
Route::get('/tours-guide', [ToursGuidecontroller::class, 'index'])->name('tours-guide');
Route::get('/contact', [Contactcontroller::class, 'index'])->name('contact');
Route::get('/booking', [Bookingcontroller::class, 'index'])->name('booking');
Route::get('/faqs', [Faqscontroller::class, 'index'])->name('faqs');
Route::get('/blogs', [Blogscontroller::class, 'index'])->name('blogs');
Route::get('/blogs_detail', [BlogsDetailcontroller::class, 'index'])->name('blogs-detail');

