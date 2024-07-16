<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id');
            $table->decimal('amount', 10, 2);
            $table->string('currency');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->unsignedBigInteger('invoice_id')->nullable(); // Make invoice_id nullable
            $table->unsignedBigInteger('user_id')->nullable(); // Add user_id column
            $table->timestamps();
        
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
