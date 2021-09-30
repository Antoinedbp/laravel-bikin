<?php

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeuxiemeSectionController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/backoffice',[BackController::class, 'index'])->name('hombo');

Route::resource('/titres', TitreController::class);
Route::resource('/headers', NavbarController::class);
Route::resource('/heros', PremiereSectionController::class);
Route::resource('/abouts', DeuxiemeSectionController::class);
Route::resource('/features', FeatureController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/portfolios', PortfolioController::class);
Route::resource('/testimonials', TestimonialController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/contacts', ContactController::class);
Route::resource('/footers', FooterController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
