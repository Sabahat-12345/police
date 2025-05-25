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
        Schema::create('preliminary_reports', function (Blueprint $table) {
            $table->id();
                 $table->string('missing_name');
        $table->string('last_seen_location');
        $table->dateTime('disappearance_datetime');
        $table->string('contact_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_reports');
    }
};
