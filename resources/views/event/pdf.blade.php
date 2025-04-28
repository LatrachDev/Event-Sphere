<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket #{{ $ticket->id }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0d0410;
            margin: 0;
            padding: 40px 20px;
            color: #f4e9f7;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ticket-container {
            max-width: 800px;
            width: 100%;
        }
        .ticket-card {
            background: linear-gradient(160deg, #180522, #0d0410);
            border: 1px solid #721093;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(114,16,147,0.4);
        }
        .ticket-header {
            background: linear-gradient(90deg, #721093, #9c14c9, #c228f6);
            padding: 20px 30px;
            text-align: center;
            position: relative;
            color: #fff;
            border-bottom: 2px dashed #d28bea;
        }
        .ticket-header .event-brand {
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: 0.8;
        }
        .ticket-header h1 {
            margin: 10px 0 0;
            font-size: 30px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .ticket-body {
            display: grid;
            grid-template-columns: 2fr 1fr;
            padding: 30px;
            gap: 20px;
        }
        .event-info {
            border-right: 1px dashed #d28bea;
            padding-right: 20px;
        }
        .ticket-info h2 {
            font-size: 24px;
            margin: 0 0 10px;
            background: linear-gradient(90deg, #f4e9f7, #d28bea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .ticket-info h3 {
            font-size: 16px;
            margin-bottom: 20px;
            color: #d28bea;
        }
        .ticket-meta {
            background: rgba(210, 139, 234, 0.1);
            padding: 15px;
            border-radius: 12px;
            margin-top: 20px;
            font-size: 14px;
        }
        .ticket-meta p {
            margin: 8px 0;
            display: flex;
            justify-content: space-between;
        }
        .ticket-meta strong {
            color: #d28bea;
            min-width: 80px;
        }
 
        .ticket-footer {
            background: linear-gradient(90deg, #721093, #9c14c9, #c228f6);
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #fff;
            border-top: 2px dashed #d28bea;
        }
        .social-links {
            margin-top: 5px;
        }
        .social-links a {
            color: #fff;
            margin: 0 5px;
            text-decoration: none;
            opacity: 0.8;
            font-size: 12px;
        }
        .social-links a:hover {
            opacity: 1;
        }
        .badge {
            position: absolute;
            top: 10px;
            right: 20px;
            background: #ff4b8d;
            color: white;
            font-size: 11px;
            padding: 5px 10px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(255,75,141,0.3);
        }
        @media (max-width: 768px) {
            .ticket-body {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .event-info {
                border: none;
                padding: 0;
                border-bottom: 1px dashed #d28bea;
                margin-bottom: 20px;
            }
        }
        @media print {
            body {
                background: none;
            }
            .ticket-card {
                box-shadow: none;
                border: 1px solid #721093;
            }
            .badge {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div class="ticket-container">
        <div class="ticket-card">
            <div class="badge">VIP Access</div>
            <div class="ticket-header">
                <div class="event-brand">Event Sphere</div>
                <h1>Event Ticket</h1>
            </div>
            <div class="ticket-body">
                <div class="event-info">
                    <div class="ticket-info">
                        <h2>{{ $ticket->event->title }}</h2>
                        <h3>Ticket for {{ $ticket->user->name }}</h3>
                        <div class="ticket-meta">
                            <p><strong>Date:</strong> <span>{{ \Carbon\Carbon::parse($ticket->event->start_time)->format('F j, Y') }}</span></p>
                            <p><strong>Time:</strong> <span>{{ \Carbon\Carbon::parse($ticket->event->start_time)->format('H:i') }}</span></p>
                            <p><strong>Location:</strong> <span>{{ $ticket->event->location ?? 'Online Event' }}</span></p>
                            <p><strong>Price:</strong> <span>${{ number_format($ticket->event->price, 2) }}</span></p>
                            <p><strong>Seat:</strong> <span>{{ $ticket->seat ?? rand(1, 50) }}</span></p>
                        </div>
                    </div>
                </div>
 
            </div>
            <div class="ticket-footer">
                <p>Thank you for choosing Event Sphere</p>
                <div class="social-links">
                    <a href="#">Facebook</a> |
                    <a href="#">Instagram</a> |
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
