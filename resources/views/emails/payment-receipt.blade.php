<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
</head>
<body>
    <h1>Thank you for your payment, {{ $user->name }}!</h1>
    <p>Here are your purchased tickets for {{ $event->name }}:</p>
    <ul>
        @foreach ($tickets as $ticket)
            <li>{{ $ticket['ticket_type'] }} (Quantity: {{ $ticket['ticket_quantity'] }}) - ${{ number_format($ticket['ticket_price'], 2) }}</li>
            <li>Total {{  $ticket['total'] }} </li>
        @endforeach
    </ul>
    <p>Total Paid: ${{ number_format($total, 2) }}</p>
    <p>We hope you enjoy your event!</p>
</body>
</html>