<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('user')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    Route::get('/alur-daftar', [UserPageController::class, 'alurPage'])->name('user.alur');
    Route::get('/events', [EventController::class, 'index'])->name('user.events');
    Route::get('/create-event', [UserPageController::class, 'createEventPage'])->name('user.create_event');
    Route::post('/create-event', [EventController::class, 'store'])->name('user.store_event');
    Route::get('/daftar-panitia/{nama_event}', [EventController::class, 'show'])->name('user.daftar_panitia');
    Route::get('/create-event', [EventController::class, 'create'])->name('events.create');
    Route::get('/status', [StatusController::class, 'index'])->name('user.status');
    Route::get('/detail-status', [StatusController::class, 'detail'])->name('user.detail-status');
    Route::get('/regis/eo', [EventController::class, 'regiseo'])->name('eo.register');
    Route::post('/registerEO', [RegisteredUserController::class, 'store2'])->name('EO.register');
    // Route::post('/registerEO', [RegisteredUserController::class, 'store2'])->name('EO.register');
    Route::get('/eo/dashboard', function () {
    return view('EO.dashboard');
})->name('eo.dashboard');
});




route::middleware('admin')->group(function () {
    route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
});


require __DIR__.'/auth.php';