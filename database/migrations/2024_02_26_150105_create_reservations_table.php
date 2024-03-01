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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destinations_id');
            $table->unsignedBigInteger('offres_id');
            $table->unsignedBigInteger('users_id');
            
            $table->string('date');
            $table->string('status');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('price_total');
            $table->string('numbre_person');
            $table->string('remark');
            $table->string('payment_mehod');
            $table->timestamps();

            $table->foreign('destinations_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->foreign('offres_id')->references('id')->on('offres')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
