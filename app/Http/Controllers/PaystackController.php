<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use App\Models\Ticket;
use App\Models\InvoiceTicket;
use App\Models\Event;
use App\Models\Payment;
use Carbon\Carbon;





class PaystackController extends Controller
{
    public function callback(Request $request){
            // dd($request);
            $reference = $request->reference;
            $secret_key = env('PAYSTACK_SECRET_KEY');
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Bearer $secret_key",
                    "Cache-Control: no-cache",
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            // dd($response);

            $meta_data = $response->data->metadata->custom_fields;

            if($response->data->status == 'success') {

                $user = auth()->user();

                $invoice_id = 'T' . strtoupper(uniqid());

                $paid_at = Carbon::parse($response->data->paid_at)->format('Y-m-d H:i:s');


                
                $invoice = new Invoice();
                $invoice->user_id = $user->id;
                $invoice->total_amount = $response->data->amount / 100; // Adjust amount to match your currency format
                $invoice->invoice_id = $invoice_id;
                $invoice->paid_at = $paid_at;
                $invoice->save();

            $meta_data = $response->data->metadata->custom_fields;
            // dd($meta_data[0]->event_id);

            foreach ($meta_data as $field) {
                $invoice_ticket = new InvoiceTicket();
                $invoice_ticket->invoice_id = $invoice->id;
                $invoice_ticket->ticket_id = $field->ticket_id; // Adjust to match your metadata structure
                $invoice_ticket->quantity = $field->ticket_quantity; // Adjust to match your metadata structure
                $invoice_ticket->save();

                $ticketModel = Ticket::findOrFail($field->ticket_id); 
                $ticketModel->ticket_quantity -= $field->ticket_quantity; 
                $ticketModel->tickets_sold += $field->ticket_quantity; 
                $ticketModel->tickets_left = $ticketModel->ticket_quantity; 
                $ticketModel->save();
            }

            $event = Event::where('id', $meta_data[0]->event_id)->first();
            // dd($event->name);

            $payment = new Payment();
            $payment->invoice_id = $invoice->id;
            $payment->payment_id = $reference;
            $payment->user_id = $user->id;
            $payment->amount = $response->data->amount / 100;
            $payment->currency = $response->data->currency;
            $payment->payment_status = "Completed";
            $payment->payment_method = "Paystack";
            $payment->save();
            

                return redirect()->route('success');
            } else {
                return redirect()->route('cancel');
            }

    }

    public function success(){
        return view('components.success');
    }
    public function cancel(){
        return "Payment is cancelled";
    }
}
