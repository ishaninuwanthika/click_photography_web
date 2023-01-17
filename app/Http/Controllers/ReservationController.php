<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::where('is_delete', '!=' ,1)->orderBy('res_date', 'DESC')->get();

        return view('pages.reservation.index', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event_description     = $request->res_message;
        $client_email          = $request->res_email;
        $client_name           = $request->res_name;
        $event_date            = $request->res_date;
        $client_contact_number = $request->res_contact_number;

        $event = new Event;
        $event->name          = 'A new Reservation';
        $event->description   = $event_description. "<br/>" . "Client name :" .$client_name . "<br/>" . "Client Email :" . $client_email . "<br/>" . "Client Contact Number :" . $client_contact_number;
        $event->startDateTime = Carbon::now();
        $event->endDateTime   = Carbon::now()->addHour();

        $event->save();
        
        session()->flash('success', 'Event Created!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('pages.reservation.edit', ['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservation =  Reservation::find($id);

        $reservation->update([
            'res_name'           => $request->res_name,
            'res_email'          => $request->res_email,
            'res_contact_number' => $request->res_contact_number,
            'res_message'        => $request->res_message,
            'res_date'           => $request->res_date
        ]);

        session()->flash('success', 'Reservation updated!');
        return redirect(route('all.reservations'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reservationAction(Request $request){
        $reservation_id =  $request->id;
        $reservation = Reservation::find($reservation_id);
        if($reservation){
            if($request->has('confirm')){
                $reservation->update([
                    'status' => "Confirmed"
                ]);

                session()->flash('success', 'Booking Confirmed');
            }
            if($request->has('cancel')){
                $reservation->update([
                    'status' => "Cancelled"
                ]);

                session()->flash('success', 'Booking Cancelled');
            }
            if($request->has('remove')){
                $reservation->update([
                    'is_delete' => 1
                ]);

                session()->flash('success', 'Booking Cancelled');
            }
        }

        return redirect()->back();
    }
}
