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
        Schema::create('tourist_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('nationality');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->text('itinerary');
            $table->integer('group_size');
            $table->string('guide')->nullable();
            $table->string('emergency_name');
            $table->string('emergency_phone');
            $table->boolean('terms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_registrations');
    }
};
