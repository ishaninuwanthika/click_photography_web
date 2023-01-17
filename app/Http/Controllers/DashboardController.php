<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class DashboardController extends Controller
{
    function index(){

        $total_reservations     = Reservation::where('is_delete', '!=', 1)->count();
        $confirmed_reservations = Reservation::where('is_delete', '!=', 1)->where('status', 'Confirmed')->count();
        $pending_reservations   = Reservation::where('is_delete', '!=', 1)->where('status', 'Pending')->count();
        $cancelled_reservations = Reservation::where('is_delete', '!=', 1)->where('status', 'Cancelled')->count();

        return view('pages.dashboard',[
            'total_reservations'     => $total_reservations,
            'confirmed_reservations' => $confirmed_reservations,
            'pending_reservations'   => $pending_reservations,
            'cancelled_reservations' => $cancelled_reservations
        ]);
    }
}
