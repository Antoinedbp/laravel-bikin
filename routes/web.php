<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeuxiemeSectionController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PremiereSectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
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
    return view('pages.main');
});

Route::get('/backoffice',[BackController::class, 'index'])->name('hombo');

Route::resource('/titres', TitreController::class)->middleware('auth', 'admin');
Route::resource('/headers', NavbarController::class)->middleware('auth', 'admin');
Route::resource('/heros', PremiereSectionController::class)->middleware('auth', 'admin');
Route::resource('/abouts', DeuxiemeSectionController::class)->middleware('auth', 'admin');
Route::resource('/features', FeatureController::class)->middleware('auth', 'admin');
Route::resource('/services', ServiceController::class)->middleware('auth', 'admin');
Route::resource('/portfolios', PortfolioController::class)->middleware('auth', 'admin');
Route::resource('/testimonials', TestimonialController::class)->middleware('auth', 'admin');
Route::resource('/teams', TeamController::class)->middleware('auth', 'admin');
Route::resource('/contacts', ContactController::class)->middleware('auth', 'admin');
Route::resource('/footers', FooterController::class)->middleware('auth', 'admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
