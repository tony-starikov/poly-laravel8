<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('main', [PageController::class, 'mainApi']);
Route::get('about', [PageController::class, 'aboutApi']);
Route::get('works', [PageController::class, 'worksApi']);
Route::get('contact', [PageController::class, 'contactApi']);
Route::get('artists', [PageController::class, 'artistsApi']);
Route::get('recruit', [PageController::class, 'recruitApi']);
Route::get('work/{code}', [PageController::class, 'workApi']);
Route::get('artist/{code}', [PageController::class, 'artistApi']);
