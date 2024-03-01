<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/',[AccueilController::class,'index']);
    
Route::get('/accueil',[AccueilController::class,'redirect']);
    


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/ajouter_destination',[AdminController::class,'ajouter_vue']);

Route::post('/telecharger_destination',[AdminController::class,'telecharger']);

Route::get('/vue_destination',[AdminController::class,'vue_destination']);

Route::get('/supprimer_destination/{id}',[AdminController::class,'supprimer_destination']);

Route::get('/mise à jour_destination/{id}',[AdminController::class,'mise à jour_destination']);

Route::post('/modifier_destination/{id}',[AdminController::class,'modifier_destination']);

Route::get('/details_destination/{id}',[AccueilController::class,'details_destination']);
