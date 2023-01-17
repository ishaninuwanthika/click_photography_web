<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/reservations', [ReservationController::class, 'index'])->name('all.reservations');
Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/store/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::post('/action/reservation/{id}', [ReservationController::class, 'reservationAction'])->name('reservation.action');
Route::get('/edit/reservation/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::post('/update/reservation/{id}', [ReservationController::class, 'update'])->name('update.reservation');

require __DIR__.'/auth.php';
