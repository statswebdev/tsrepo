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
        Schema::create('estfues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->integer('generator_capacity_unit');
            $table->integer('generator_capacity_qty');
            $table->integer('solar_rooftop');
            $table->integer('solar_groundmounted');
            $table->integer('solar_floating');
            $table->string('energy_storage');
            $table->integer('energy_storage_power');
            $table->integer('energy_storage_kwh');
            $table->string('energy_storage_other');
            $table->string('energy_storage_othertype')->nullable();
            $table->integer('energy_storage_othercapacity')->nullable();
            $table->integer('solar_waterheating');
            $table->integer('waste_heatrecovery');
            $table->integer('other_energy_capacity')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estfues');
    }
};
