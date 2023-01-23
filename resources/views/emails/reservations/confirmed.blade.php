@component('mail::message')

Dear {{ $data['clientname'] }} ,

Thank you for booking your photography session with us. We are pleased to confirm your reservation.

Your reservation details are as follows:

Date and Time: {{ $data['event_date'] }} <br>
Reservation#:  {{ $data['reservation_number'] }} <br>

Please note that this is a confirmation of your reservation and If you need to make any changes or cancellations, please contact us at least 48 hours in advance.
<br>
We look forward to capturing beautiful memories for you and your loved ones.

Sincerely, <br>
Click by Dhanesh, <br>
write@clickbydhanesh.co.nz <br>
[Your Company Phone]

@endcomponent
