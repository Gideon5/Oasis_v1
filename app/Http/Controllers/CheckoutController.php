<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\Ticket;

class CheckoutController extends Controller
{
    public function show(Request $request) {
        $tickets_data = $request->input('tickets', []);

        // dd($tickets_data);

        // Construct the tickets array
        $tickets = [];
        foreach ($tickets_data as $ticket) {
            if (isset($ticket['type']) && isset($ticket['quantity']) && isset($ticket['price'])) {
                $tickets[] = [
                    'id' => $ticket['ticket_id'],
                    'event_id' => $ticket['event_id'],
                    'name' => $ticket['type'],
                    'quantity' => (int) $ticket['quantity'],
                    'price' => (float) $ticket['price'],

                ];
            }
        }

        // dd($tickets);

        // Calculate subtotal and total
        $subtotal = array_reduce($tickets, function ($carry, $ticket) {
            return $carry + ($ticket['price'] * $ticket['quantity']);
        }, 0);

        $total = $subtotal; // Adjust if you have additional fees
        // Pass the tickets, subtotal, and total to the view
        return view('event.ticket.checkout', compact('tickets', 'subtotal', 'total'));
    }

 
    public function checkout(Request $request)
    {
        // Retrieve authenticated user
        $user = Auth::user();

        // Calculate total amount
        $ticketsData = $request->input('tickets', []);
        $total = 0;
        foreach ($ticketsData as $ticket) {
            $total += $ticket['price'] * $ticket['quantity'];
        }

        // Create a new invoice
        $invoice = new Invoice();
        $invoice->user_id = $user->id;
        $invoice->invoice_number = Invoice::generateUniqueInvoiceNumber();
        $invoice->total_amount = $total; // Total amount for the invoice
        $invoice->paid_date = now(); // Current timestamp for paid date
        $invoice->save();

        // Save each ticket in invoice_tickets
        foreach ($ticketsData as $ticket) {
            // Create a new InvoiceTicket
            $invoiceTicket = new InvoiceTicket();
            $invoiceTicket->invoice_id = $invoice->id;
            $invoiceTicket->ticket_id = $ticket['id'];
            $invoiceTicket->quantity = $ticket['quantity'];
            $invoiceTicket->save();

            // Update ticket quantity
            $ticketModel = Ticket::findOrFail($ticket['id']);
            $ticketModel->ticket_quantity -= $ticket['quantity'];
            $ticketModel->tickets_sold += $ticket['quantity'];
            $ticketModel->tickets_left = $ticketModel->ticket_quantity - $ticketModel->tickets_sold;
            $ticketModel->save();
        }

        // Optionally, you can return a response or redirect to a confirmation page
        return view('event.ticket.checkout', compact('invoice', 'ticketsData'));
    }

}
