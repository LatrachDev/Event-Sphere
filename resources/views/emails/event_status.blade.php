<p>Hello {{ $event->user->name }},</p>

<p>Your request to create the event "<strong>{{ $event->title }}</strong>" has been <strong>{{ $status }}</strong>.</p>

@if($status === 'approved')
    <p>It is now visible to all users on the platform.</p>
@else
    <p>Unfortunately, it didn't meet our requirements. You may try submitting again.</p>
@endif

<p>Thank you for using our platform!</p>
<p>Best regards,</p>
<p>EventSphere Team</p>