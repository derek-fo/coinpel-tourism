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
        Schema::create('vehicles', function (Blueprint $table) {
        $table->id();
        $table->string('prefix');
        $table->string('plate')->unique(); // placa
        $table->string('model');   // modelo
        $table->string('chassis'); // chassi
        $table->string('type');    // ônibus, micro-ônibus, van...
        $table->integer('capacity');
        $table->string('year');

        // comodidades
        $table->boolean('has_internet')->default(false);
        $table->boolean('has_wc')->default(false);
        $table->boolean('has_plug')->default(false);
        $table->boolean('has_air_conditioner')->default(false);
        $table->boolean('has_fridge')->default(false);
        $table->boolean('has_heating')->default(false);
        $table->boolean('has_video')->default(false);
        
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
