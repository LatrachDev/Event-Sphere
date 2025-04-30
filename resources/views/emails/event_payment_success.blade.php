<h2>Hi {{ $user->name }},</h2>

<p>Your payment was successful!</p>

<p>You have successfully purchased a ticket for the event:</p>
<ul>
    <li><strong>Event Title:</strong> {{ $ticket->event->title }}</li>
    <li><strong>Date:</strong> {{ $ticket->event->start_time }}</li>
    <li><strong>Location:</strong> {{ $ticket->event->location }}</li>
</ul>

<p>Thank you for using EventSphere. We look forward to seeing you!</p>
