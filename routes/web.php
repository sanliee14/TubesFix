<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Auth\Events\Authenticated;
use App\Http\Controllers\AdminConteroller;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\DetailStatusController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/regis/eo', [EventController::class, 'regiseo'])->name('eo.register');
Route::post('/registerEO', [RegisteredUserController::class, 'store2'])->name('EO.register');

Route::middleware('user')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
    Route::get('/alur-daftar', [UserPageController::class, 'alurPage'])->name('user.alur');
    Route::get('/create-event', [UserPageController::class, 'createEventPage'])->name('user.create_event');
    Route::post('/create-event', [EventController::class, 'store'])->name('user.store_event');
    Route::get('/daftar-panitia/{nama_event}', [EventController::class, 'show'])->name('user.daftar_panitia');
    Route::get('/create-event', [EventController::class, 'create'])->name('events.create');
    Route::get('/events', [EventController::class, 'index'])->name('user.events');
    Route::get('/status', [StatusController::class, 'index'])->name('user.status');
    Route::get('/already/register', [AuthenticatedSessionController::class, 'create'])->name('users.login');
    Route::post('/detail-status/{id}', [StatusController::class, 'detail'])->name('user.detail-status');
    Route::post('/daftar/panitia/{id}', [EventController::class, 'daftarPanitia'])->name('daftar.panitia');
    Route::get('/search', [EventController::class, 'search'])->name('search.user');
});

Route::middleware('eo')->group(function () {
    Route::get('/eo/dashboard', function () {
        return view('EO.dashboard');
        })->name('eo.dashboard');
    Route::get('/create-event', [UserPageController::class, 'createEventPage'])->name('user.create_event');
    Route::post('/create-event', [EventController::class, 'store'])->name('user.store_event');
    Route::get('/event/eo', [EventController::class, 'eventterdaftar'])->name('eo.eventeo');
    Route::post('/detail-pendaftar/{id}', [EventController::class, 'detailpendaftar'])->name('eo.detail-pendaftar');
    Route::get('/pendaftar', [EventController::class, 'pendaftar'])->name('eo.pendaftar');
    Route::get('/editevent', [EventController::class, 'editevent'])->name('eo.edit');
    Route::post('/delete/{id}', [EventController::class, 'hapusevent']);
    Route::post('/tolak/{id_apply}', [StatusController::class, 'tolak'])->name('tolak');
    Route::post('/terima/{id_apply}', [StatusController::class, 'terima'])->name('terima');
    Route::get('/edit/event/{id}', [EventController::class, 'edit'])->name('eo.edit');
    Route::post('/edit/event/{id}', [EventController::class, 'editStore'])->name('eo.edit.store');
    Route::post('/selesai/{id}', [EventController::class, 'selesai'])->name('selesai');
});

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::middleware('admin')->group(function () {
route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::post('/detaileo/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete.event');
Route::get('/detailevent', [AdminController::class, 'detailevent'])->name('admin.detailevent');
Route::post('/panitevent/{id}', [AdminController::class, 'panitevent'])->name('admin.panitevent');
Route::post('/detaileo/{id}', [AdminController::class, 'eventnyaeo'])->name('admin.eventnyaeo');
Route::get('/detailvol', [AdminController::class, 'detailvol'])->name('admin.detailvol');
Route::get('/detaileo', [AdminController::class, 'detaileo'])->name('admin.detaileo');
Route::get('/search/admin', [AdminController::class, 'search'])->name('search.admin');
Route::get('/totalevent', [EventController::class, 'totalevent'])->name('admin.totalevent');
});


require __DIR__.'/auth.php';
