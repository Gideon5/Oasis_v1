<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(Request $request) {
        // Extract ticket details from the request
        $tickets_data = $request->input('tickets', []);

        // Construct the tickets array
        $tickets = [];
        foreach ($tickets_data as $ticket) {
            if (isset($ticket['type']) && isset($ticket['quantity']) && isset($ticket['price'])) {
                $tickets[] = [
                    'name' => $ticket['type'],
                    'quantity' => (int) $ticket['quantity'],
                    'price' => (float) $ticket['price']
                ];
            }
        }

        // Calculate subtotal and total
        $subtotal = array_reduce($tickets, function ($carry, $ticket) {
            return $carry + ($ticket['price'] * $ticket['quantity']);
        }, 0);

        $total = $subtotal; // Adjust if you have additional fees

        // Pass the tickets, subtotal, and total to the view
        return view('event.ticket.checkout', compact('tickets', 'subtotal', 'total'));
    }

}
