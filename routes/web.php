<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PremiereSectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Database\Seeders\FooterSeeder;
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

Route::resource('/headers', NavbarController::class);
Route::resource('/titres', TitreController::class);
Route::resource('/heros', PremiereSectionController::class);
Route::resource('/abouts', PremiereSectionController::class);
Route::resource('/features', FeatureController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/portfolios', PortfolioController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/contacts', ContactController::class);
Route::resource('/footers', FooterController::class);
