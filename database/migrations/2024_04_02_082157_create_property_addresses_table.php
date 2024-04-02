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
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained();
            $table->string('place_id')->nullable();
            $table->string('place_name')->nullable();
            $table->string('cities')->nullable();
            $table->string('region')->nullable();
            $table->string('geocode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_addresses');
    }
};
