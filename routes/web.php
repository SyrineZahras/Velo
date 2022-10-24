<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\DashboardController;

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

Route::get("/home",[TemplateController::class,"frontend"]);
Route::get("/",[TemplateController::class,"login"]);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
      ->group(function () {
            Route::resource('/bikes',\App\Http\Controllers\BikeController::class);
            Route::resource('/options',\App\Http\Controllers\OptionBikeController::class);
            Route::resource('dashboard', DashboardController::class);
            Route::resource('associations', AssociationController::class);
            Route::resource('rides', RideController::class);
            Route::resource('tracks', TrackController::class);
            Route::get('/ajax/tracks', [TrackController::class, 'ajax']);
            

});






