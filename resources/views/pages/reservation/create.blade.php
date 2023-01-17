@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h3 class="h3 mb-2 text-gray-800">New Reservation</h1>
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <form id="reservation-form" action="{{ route('reservation.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-4">
                            <label for="guest_name">Client Name <span class="text text-danger">*</span></label>
                            <input type="text" name="res_name" id="res_name" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 mt-4">
                            <label for="guest_email">Client Email <span class="text text-danger">*</span></label>
                            <input type="email" name="res_email" id="res_email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-4">
                            <label for="guest_contact_number">Contact Number <span
                                    class="text text-danger">*</span></label>
                            <input type="text" name="res_contact_number" id="res_contact_number" class="form-control"
                                required>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 mt-4">
                            <label for="event_date">Event Date <span class="text text-danger">*</span></label>
                            <input type="date" name="res_date" id="res_date" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <label for="message">Client Message <span class="text text-danger">*</span></label>
                            <textarea name="res_message" id="res_message" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
