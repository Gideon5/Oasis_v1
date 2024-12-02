<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\Invoice;
use App\Models\Favorite;


class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function show(){
        $user = Auth::user();
        $payments = Payment::where('user_id', $user->id)->get();
        $favorites = $user->favorites()->with('event')->get();

        $transactions = DB::table('users')
        ->join('invoices','users.id', '=' ,'invoices.user_id')
        ->get();

        //fix the favroites on the dashboard
        //come back and check to put all invoice tickets together in one transaction
        
        return view('user.dashboard', compact('transactions' , 'favorites'));

    }

    public function users(){
        return view('dashboard.users.index'); 
    }

    public function create_user(){
        return view('dashboard.users.create');
    }

    public function invoice_tickets($id){
        $tickets = DB::table('users')
        ->join('invoices','users.id', '=' ,'invoices.user_id')
        ->join('invoice_tickets', 'invoices.id', '=' ,'invoice_tickets.invoice_id')
        ->join('tickets', 'invoice_tickets.ticket_id', '=', 'tickets.id')
        ->join('events', 'tickets.event_id', '=', 'events.id')
        ->where('invoices.invoice_id', '=', $id)
        ->select('events.name','invoice_tickets.quantity', 'tickets.type', 'tickets.price', 'events.image')
        ->get();

        // dd($tickets);

        return view('user.invoice.invoice_tickets', compact('tickets'));
    }
}
