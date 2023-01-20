@extends('layouts.master')

@section('titile', 'Calendar')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FColombo&showNav=1&showTabs=1&showTz=1&showCalendars=1&title=Click%20Photography&showDate=1&src=Y2xpY2twaG90b2dyYXBoeTkyNEBnbWFpbC5jb20&color=%23039BE5" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</div>
@endsection
