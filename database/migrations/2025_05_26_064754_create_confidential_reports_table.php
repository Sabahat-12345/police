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
        Schema::create('confidential_reports', function (Blueprint $table) {
            $table->id();
                        $table->string('incident_type');
            $table->date('observation_date');
            $table->text('details');
            $table->string('evidence')->nullable(); // store file paths
            $table->enum('status', ['anonymous', 'identified']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confidential_reports');
    }
};
