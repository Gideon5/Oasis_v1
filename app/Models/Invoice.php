<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Payment;
use App\Models\InvoiceTicket;


class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_amount',
        'invoice_id',
        'paid_at'
    ];

 

    public static function generateUniqueInvoiceNumber()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $invoiceNumber = '';
        for ($i = 0; i < 16; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $invoiceNumber .= $characters[$index];
        }
        return $invoiceNumber;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function invoiceTickets() {
        return $this->hasMany(InvoiceTicket::class);
    }



}
