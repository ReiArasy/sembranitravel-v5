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
        Schema::create('package_bookings', function (Blueprint $table) {
            $table->id();
            $table->int('package_tour_id');
            $table->int('user_id');
            $table->int('quantity');
            $table->date('start_date');
            $table->date('end_date');
            $table->int('total_amount');
            $table->boolean('is_paid');
            $table->varchar('proof');
            $table->int('package_bank_id');
            $table->int('sub_total');
            $table->int('insurance');
            $table->int('tax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_bookings');
    }
};
