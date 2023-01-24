<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use App\Mail\ReservationConfimed;
use App\Mail\ReservationCancelled;
use Illuminate\Support\Facades\Mail;

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
        $datenow = date("Y-m-d H:i:s");
        $code = 'CP';
        $ymd = date('ymd');
        $squence = 0;    
        
        $booking_count = Reservation::count();

        if($booking_count == 0){
            $squence =+ 1;
    
        }else{
            $squence = $booking_count + 1;
        }

        $squence = str_pad($squence,4,0,STR_PAD_LEFT);
        $order_number = $code.$ymd.'_'.$squence;

        $reservation = Reservation::create([
            'res_name'           => $request->res_name,
            'res_email'          => $request->res_email,
            'res_contact_number' => $request->res_contact_number,
            'res_message'        => $request->res_message,
            'res_date'           => $request->res_date,
            'number'             => $order_number,
            'is_delete'          => false
        ]);

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
                
                $event_description = $reservation->res_message;
                $client_name       = $reservation->res_name;
                $client_email      = $reservation->res_email;
                $client_contact_number = $reservation->res_contact_number;

                $event = new Event;
                $event->name          = $event_description;
                $event->description   = $event_description. "<br/>" . "Client name :" .$client_name . "<br/>" . "Client Email :" . $client_email . "<br/>" . "Client Contact Number :" . $client_contact_number;
                $event->startDateTime = Carbon::parse($reservation->res_date);
                $event->endDateTime   = Carbon::parse($reservation->res_date);
                $event->save();

                $data = [
                    'clientname' => $client_name,
                    'reservation_number' => $reservation->number,
                    'event_date' => $reservation->res_date,
                ];
                
                Mail::to($client_email)->send(new ReservationConfimed($data));

                session()->flash('success', 'Booking Confirmed');
            }
            if($request->has('cancel')){
                $reservation->update([
                    'status' => "Cancelled"
                ]);

                $client_email =  $reservation->res_email;
                $event_date =  Carbon::parse($reservation->res_date);

                $data = [
                    'clientname' => $reservation->res_name,
                    'event_date' => $event_date->format('d-m-Y'),
                ];

                Mail::to($client_email)->send(new ReservationCancelled($data));
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
