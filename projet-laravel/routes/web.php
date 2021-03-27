<?php

use GuzzleHttp\Promise\Create;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Route::get('/clients', function () {
    //     return Inertia::render('Blogc');
    // })->name('clients.index');

    Route::get('/clients', [\App\Http\Controllers\BlogcController::class, "index"])->name('clients.index');
    Route::get('/clients/create', [\App\Http\Controllers\BlogcController::class, "create"])->name('clients.create');

    // Route::get('/projets', function () {
    //     return Inertia::render('Blogp');
    // })->name('projets.index');

    Route::get('/projets', [\App\Http\Controllers\BlogpController::class, "index"])->name('projets.index');
    Route::get('/projets/create', [\App\Http\Controllers\BlogpController::class, "create"])->name('projets.create');

    // Route::get('/mon-url', function () {
    //     // return Inertia::render('Dashboard');
    //     return redirect()->back();
    // })->name('nom-de-ma-route');

    // Route::get('/projets/{id}/edit', [BlogpController::class, "edit"])->name('projets.edit');

    // Route::put('/projets/{id}', [BlogpController::class, "update"])->name('projets.update');

    // Route::get('/projets/create', [BlogpController::class, "create"])->name('projets.create');

    // Route::post('/projets', [BlogpController::class, "store"])->name('projets.store');

    Route::get('/projets/{id}/toggle', [BlogpController::class, "toggle"])->name('projets.toggle');
});
