<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationVeloController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\StripePaymentController;
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
            Route::resource('dashboard', DashboardController::class);
            Route::resource('associations', AssociationController::class);
            Route::resource('rides', RideController::class);
            Route::resource('locationvelo', LocationVeloController::class );
            Route::resource('tracks', TrackController::class);
            Route::get('/ajax/tracks', [TrackController::class, 'ajax']);

            Route::delete("/locationvelo/{locationvelo}",[LocationVeloController::class, "destroy"])->name("locationvelo.destroy");
            Route::get("locationvelo/create/{bike}/{user}", [LocationVeloController::class, "create"])->name("locationvelo.create");
            Route::post("/locationvelo/create",[LocationVeloController::class, "store"])->name("locationvelo.store");

            
            Route::get("/bill/create/{location}", [BillController::class, "store"])->name("bill.store");
            Route::get("bill/{bill}", [BillController::class, "show"])->name("bill.show");

            Route::get("stripe", [StripePaymentController::class, "stripe"]);
            //Route::get('stripe', 'StripePaymentController@stripe');
            Route::post("stripe", [StripePaymentController::class , "stripePost"])->name('stripe.post');
            //Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
            

});






