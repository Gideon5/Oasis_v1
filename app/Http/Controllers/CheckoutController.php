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

 
    // public function checkout(Request $request)
    // {
    //     dd($request);
    //     $user = Auth::user();

    //     dd($user);
        
    //     $ticketsData = $request->input('tickets', []);
    //     $total = 0;
    //     foreach ($ticketsData as $ticket) {
    //         $total += $ticket['price'] * $ticket['quantity'];
    //     }

    //     $invoice = new Invoice();
    //     $invoice->user_id = $user->id;
    //     $invoice->invoice_number = Invoice::generateUniqueInvoiceNumber();
    //     $invoice->total_amount = $total; 
    //     $invoice->paid_date = now(); 
    //     $invoice->save();

      
    //     foreach ($ticketsData as $ticket) {
    //         $invoiceTicket = new InvoiceTicket();
    //         $invoiceTicket->invoice_id = $invoice->id;
    //         $invoiceTicket->ticket_id = $ticket['id'];
    //         $invoiceTicket->quantity = $ticket['quantity'];
    //         $invoiceTicket->save();

    //         $ticketModel = Ticket::findOrFail($ticket['id']);

    //         $ticketModel->update([
    //             'tickets_sold' => $ticketModel->tickets_sold + $ticket['quantity'],
    //         ]);
    //         // $ticketModel->ticket_quantity -= $ticket['quantity'];
    //         // $ticketModel->tickets_sold += $ticket['quantity'];
    //         // $ticketModel->tickets_left = $ticketModel->ticket_quantity - $ticketModel->tickets_sold;
    //         // $ticketModel->save();
    //     }

    //     // Optionally, you can return a response or redirect to a confirmation page
    //     return view('event.ticket.checkout', compact('invoice', 'ticketsData'));
    // }

}
