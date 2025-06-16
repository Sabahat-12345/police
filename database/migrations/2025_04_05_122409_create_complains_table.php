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
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();  
            $table->string('cnic_passport')->nullable();    
            $table->string('contactNo')->nullable();    
            $table->string('fatherName')->nullable(); 
            $table->string('gender')->nullable();    
            $table->string('whatsAppNo')->nullable();    
            $table->string('complainantAddress')->nullable(); 
            $table->string('incidentDate')->nullable();    
            $table->string('natureOfComplaint')->nullable();    
            $table->string('frNo')->nullable(); 
            $table->string('complainantCountry')->nullable();    
            $table->string('incidentDetails')->nullable();
            $table->tinyInteger('status')->default('0');    
            $table->string('attachFile')->nullable(); 
            $table->timestamps();

           

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
