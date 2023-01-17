@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h3 class="h3 mb-2 text-gray-800">Reservations</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('reservation.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact#</th>
                                <th>Event Date</th>
                                <th>Created at</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact#</th>
                                <th>Event Date</th>
                                <th>Created at</th>
                                <th>Status</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @if($reservations)
                            @foreach ($reservations as $key=>$reservation)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $reservation->res_name }}</td>
                                <td>{{ $reservation->res_email }}</td>
                                <td>{{ $reservation->res_contact_number }}</td>
                                <td><span class="badge badge-primary">{{ $reservation->res_date }}</span></td>
                                <td>{{ $reservation->created_at }}</td>
                                <td>
                                    @if($reservation->status == "Pending")
                                            <span class="badge badge-warning">{{ $reservation->status }}</span>
                                        @elseif($reservation->status == "Confirmed")
                                            <span class="badge badge-success">{{ $reservation->status }}</span>
                                        @elseif($reservation->status == "Cancelled")
                                            <span class="badge badge-danger">{{ $reservation->status }}</span>
                                        @else
                                            <span class="badge badge-secondary">{{ $reservation->status }}</span>
                                    @endif
                                </td>
                                <td style="text-align: left">
                                    <form action="{{ route('reservation.action',$reservation->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm d-inline" title="Confirm" name="confirm"><i class="las la-check"></i></button>
                                        <a href="{{ route('reservation.edit', $reservation->id) }}" class="btn btn-primary btn-sm d-inline" title="Edit"><i class="las la-edit"></i></a>
                                        <button type="submit" class="btn btn-warning btn-sm d-inline" title="Cancel" name="cancel" onsubmit="return confirm('Are you sure to cancel?');"><i class="lar la-times-circle"></i></button>
                                        <button type="submit" class="btn btn-danger btn-sm d-inline" title="Remove" name="remove" onsubmit="return confirm('Are you sure to remove?')"><i class="las la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
