<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
 
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

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/index', 'index');
    Route::get('/about-us', 'about_us');
});

// Locale
Route::get('/locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});