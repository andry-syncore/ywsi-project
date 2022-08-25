<?php

use App\Http\Controllers\Auth\AuthController;
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

// Route admin
Route::prefix('web-admin')->controller(AuthController::class)->group(function($route) {
   $route->get('/', 'index')->name('login')->middleware('checkAuth');
   $route->post('/', 'authenticate')->name('login')->middleware('checkAuth');
   $route->post('logout', 'logout')->name('logout');
});

Route::get('dashboard', function() {
   return view('admin.dashboard.index', [
      'title' => 'Dashboard'
   ]);
})->name('dashboard')->middleware(['auth', 'admin']);

// Route user
Route::get('/', function () {
   return view('user.home.index');
})->name('home');

Route::get('about-us', function () {
   return view('user.about.index');
})->name('about');

Route::get('pendekatan', function() {
   return view('user.pendekatan.index');
})->name('pendekatan');

Route::get('portfolio', function() {
   return view('user.portfolio.index');
})->name('portfolio');

Route::get('contact', function() {
   return view('user.contact.index');
})->name('contact');

Route::prefix('detail/portfolio')->name('detail.portfolio.')->group(function($route) {
   $route->get('assessment', function() {
      return view('user.detail-portfolio.assessment');
   })->name('assessment');

   $route->get('bumdes', function() {
      return view('user.detail-portfolio.bumdes');
   })->name('bumdes');
});

Route::prefix('detail/pelatihan')->name('detail.pelatihan.')->group(function($route) {
   $route->get('kewirausahaan-sosial-dan-webinar', function() {
      return view('user.detail-pelatihan.kewirausahaan-sosial-webinar');
   })->name('kewirausahaan');

   $route->get('publikasi-buku', function() {
      return view('user.detail-pelatihan.publikasi-buku');
   })->name('publikasi');

   $route->get('pendampingan-dalam-pemberdayaan-masyarakat', function() {
      return view('user.detail-pelatihan.pendampingan-dalam-pemberdayaan-masyarakat');
   })->name('pendampingan');
});