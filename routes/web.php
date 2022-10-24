<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\BlogController;
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

Route::get("/",[TemplateController::class,"home"]);
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
      ->group(function () {
            Route::resource('home', FrontController::class);
         //   Route::get('association', AssociationController::class);
            Route::resource('dashboard', DashboardController::class);
            Route::resource('associations', AssociationController::class);
            Route::resource('blogs', BlogController::class);
            Route::resource('rides', RideController::class);
            Route::resource('plans', PlanController::class);
            Route::resource('evenements', EvenementController::class);
            Route::resource('reclamations', ReclamationController::class);
            Route::resource('tracks', TrackController::class);
            Route::resource('locations', LocationVeloController::class );
            Route::get('/ajax/tracks', [TrackController::class, 'ajax']);
            Route::get('/ajax/track/{id}', [TrackController::class, 'ajaxid']);
            Route::get('/user-association', [App\Http\Controllers\AssociationController::class, 'association']);
            Route::get('/user-blog', [App\Http\Controllers\BlogController::class, 'blog']);
            Route::get('/user-association-details', [App\Http\Controllers\AssociationController::class, 'associationdetails']);
            Route::get('/user-ride', [App\Http\Controllers\RideController::class, 'ride']);
            Route::get('/user-event', [App\Http\Controllers\EvenementController::class, 'event']);
            Route::get('/user-claim', [App\Http\Controllers\ReclamationController::class, 'claim']);
            Route::get('/user-plan', [App\Http\Controllers\PlanController::class, 'plan']);
            Route::get('/user-rent', [App\Http\Controllers\LocationVeloController::class, 'rent']);
            Route::get('/user-bike', [\App\Http\Controllers\BikeController::class, 'bike']);
            Route::delete("/locationvelo/{locationvelo}",[LocationVeloController::class, "destroy"])->name("locationvelo.destroy");
            Route::get("locationvelo/create/{bike}/{user}", [LocationVeloController::class, "create"])->name("locationvelo.create");
            Route::post("/locationvelo/create",[LocationVeloController::class, "store"])->name("locationvelo.store");            
            Route::get("/bill/create/{location}", [BillController::class, "store"])->name("bill.store");
            Route::get("bill/{bill}", [BillController::class, "show"])->name("bill.show");
            Route::get("stripe", [StripePaymentController::class, "stripe"]);
            Route::post("stripe/{bill}", [StripePaymentController::class , "stripePost"])->name('stripe.post');
            Route::resource('/bikes',\App\Http\Controllers\BikeController::class);
            Route::resource('/options',\App\Http\Controllers\OptionBikeController::class);


});






