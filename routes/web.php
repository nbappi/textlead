<?php

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

Route::get('/', [App\Http\Controllers\Sites\RouteController::class, 'index'])->name('sites-home');

Route::get('/about-us', [App\Http\Controllers\Sites\AboutController::class, 'index'])->name('about-us');
Route::get('/company-profile', [App\Http\Controllers\Sites\AboutController::class, 'companyProfile'])->name('company-profile');
Route::get('/managing-directors-message', [App\Http\Controllers\Sites\AboutController::class, 'managingDirectorsMessage'])->name('managing-directors-message');
Route::get('/company-values', [App\Http\Controllers\Sites\AboutController::class, 'companyValues'])->name('company-values');
Route::get('/organogram', [App\Http\Controllers\Sites\AboutController::class, 'organogram'])->name('organogram');
Route::get('/corporate-culture', [App\Http\Controllers\Sites\AboutController::class, 'corporateCulture'])->name('corporate-culture');

Route::get('/services', [App\Http\Controllers\Sites\RouteController::class, 'services'])->name('services');

Route::get('/propucts', [App\Http\Controllers\Sites\ProductsController::class, 'index'])->name('propucts');

Route::get('/knit-fabric', [App\Http\Controllers\Sites\ProductsController::class, 'knitFabric'])->name('knit-fabric');
Route::get('/woven-fabric', [App\Http\Controllers\Sites\ProductsController::class, 'wovenFabric'])->name('woven-fabric');
Route::get('/other-fabric', [App\Http\Controllers\Sites\ProductsController::class, 'otherFabric'])->name('other-fabric');


Route::get('/buyers-brands', [App\Http\Controllers\Sites\RouteController::class, 'buyersBrands'])->name('buyers-brands');
Route::get('/certifications', [App\Http\Controllers\Sites\RouteController::class, 'certifications'])->name('certifications');
Route::get('/contact', [App\Http\Controllers\Sites\RouteController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
