<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
   return view('home.index');
})->name('home');

Route::get('about-us', function () {
   return view('about.index');
})->name('about');

Route::get('pendekatan', function() {
   return view('pendekatan.index');
})->name('pendekatan');

Route::get('portfolio', function() {
   return view('portfolio.index');
})->name('portfolio');

Route::get('contact', function() {
   return view('contact.index');
})->name('contact');

Route::prefix('detail/portfolio')->name('detail.portfolio.')->group(function($route) {
   $route->get('assessment', function() {
      return view('detail-portfolio.assessment');
   })->name('assessment');

   $route->get('bumdes', function() {
      return view('detail-portfolio.bumdes');
   })->name('bumdes');
});

Route::prefix('detail/pelatihan')->name('detail.pelatihan.')->group(function($route) {
   $route->get('kewirausahaan-sosial-dan-webinar', function() {
      return view('detail-pelatihan.kewirausahaan-sosial-webinar');
   })->name('kewirausahaan');

   $route->get('publikasi-buku', function() {
      return view('detail-pelatihan.publikasi-buku');
   })->name('publikasi');

   $route->get('pendampingan-dalam-pemberdayaan-masyarakat', function() {
      return view('detail-pelatihan.pendampingan-dalam-pemberdayaan-masyarakat');
   })->name('pendampingan');
});