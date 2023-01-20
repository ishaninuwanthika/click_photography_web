<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CalendarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/reservations', [ReservationController::class, 'index'])->name('all.reservations');
    Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/store/reservation', [ReservationController::class, 'store'])->name('reservation.store');
    Route::post('/action/reservation/{id}', [ReservationController::class, 'reservationAction'])->name('reservation.action');
    Route::get('/edit/reservation/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::post('/update/reservation/{id}', [ReservationController::class, 'update'])->name('update.reservation');

    Route::get('calendar/view', [CalendarController::class, 'view'])->name('calendar.view');
});


require __DIR__.'/auth.php';
