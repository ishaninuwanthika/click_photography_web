@component('mail::message')
Dear {{ $data['clientname'] }} , <br>

We regret to inform you that due to a scheduling conflict, we must cancel your reservation for a photo session on {{ $data['event_date'] }} . We apologize for any inconvenience this may have caused.
Upon further examination, we have discovered that another reservation was made for the same date and time as yours. We understand that this may be disappointing and we apologize for the inconvenience.
We would like to offer you the opportunity to reschedule your session to a different date and time that is more convenient for you. Please let us know your availability and we will do our best to accommodate your request.
<br>
If you have any questions or concerns, please do not hesitate to contact us. <br>

Thank you for choosing clickbydhanesh for your photography needs. <br>

Best regards, <br>

Click by Dhanesh, <br>
write@clickbydhanesh.co.nz <br>
+64223921099


@endcomponent
