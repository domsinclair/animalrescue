<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('rescuecentres',[\App\Http\Controllers\RescueCentreController::class, 'index'])
    ->name('rescuecentres');

//Route::get('rescuecentres',function(){
//    return Inertia::render('RescueCentres/Index',[
//        'centres' => \App\Http\Controllers\RescueCentreController::class, 'index'
//    ]);
//});

//Route::get('/',function() {
//    return Inertia::render('Centres',[
//        'centres' => \App\Models\RescueCentre::all()-> map(fn($centre)=> [
//            'id' => $centre -> id,
//            'name' => $centre -> name
//        ])
//    ]);
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
