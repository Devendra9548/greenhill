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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email_id')->nullable();
            $table->string('address')->nullable();
            $table->string('aadhaar_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('aadhaar_file')->nullable();
            $table->string('pan_file')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('quota')->nullable();
            $table->bigInteger('orderid')->unique();
            $table->string('rzp_order_id')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->string('status')->nullable();
            $table->string('paymethod')->nullable();
            $table->string('paystatus')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('PaymentSTS')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
