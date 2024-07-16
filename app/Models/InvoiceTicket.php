<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use App\Models\Ticket;

class InvoiceTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id', 'ticket_id', 'quantity'
    ];
    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }

    public function ticket() {
        return $this->belongsTo(Ticket::class);
    }
}
