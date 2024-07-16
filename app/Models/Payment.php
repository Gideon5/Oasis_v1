<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use App\Models\User;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_id', 'invoice_id', 'amount', 'currency', 'payment_status', 'payment_method'];


    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
