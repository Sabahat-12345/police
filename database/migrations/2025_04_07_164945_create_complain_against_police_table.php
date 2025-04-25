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
        Schema::create('complain_against_police', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('contact_method')->nullable();
            $table->string('incident_date')->nullable();
            $table->string('location', 255)->nullable();
            $table->text('officer_details')->nullable(); // 1000 characters max
            $table->string('description', 255)->nullable();
            $table->string('evidence')->nullable(); // store file path or name
            $table->text('witness_info')->nullable(); // 1000 characters max
            $table->string('info_confirm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complain_against_police');
    }
};
