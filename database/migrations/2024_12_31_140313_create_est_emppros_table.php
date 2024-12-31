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
        Schema::create('est_emppros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('generated_inhouse');
            $table->integer('electricity_generated')->nullable();
            $table->string('electricity_outsourced');
            $table->integer('outsourced_generated')->nullable();
            $table->string('electricity_othersources');
            $table->integer('othersources_generated') ->nullable();
            $table->integer('electricity_consumption');
            $table->string('solargrid_energy');
            $table->integer('solargrid_production') ->nullable();
            $table->integer('solargrid_consumption') ->nullable();
            $table->string('renewable_other');
            $table->integer('renewable_other_production') ->nullable();
            $table->integer('renewable_other_consumption') ->nullable();
            $table->string('waterinhouse_production')->default(false);
            $table->integer('waterinhouse_monthly') ->nullable();
            $table->string('water_outsourced');
            $table->integer('water_outsourced_monthly') ->nullable();
            $table->integer('monthly_water_jan');
            $table->integer('monthly_water_feb');
            $table->integer('monthly_water_mar');
            $table->integer('monthly_water_apr');
            $table->integer('monthly_water_may');
            $table->integer('monthly_water_jun');
            $table->integer('monthly_water_july');
            $table->integer('monthly_water_aug');
            $table->integer('monthly_water_sep');
            $table->integer('monthly_water_oct');
            $table->integer('monthly_water_nov');
            $table->integer('monthly_water_dec');
            $table->string('waste_disposedinhouse');
            $table->string('waste_disposedoutsourced');
            $table->string('waste_disposalother');
            $table->integer('waste_monthly');
            $table->integer('plastic_waste');
            $table->string('plastic_waste_method');
            $table->integer('organic_waste');
            $table->string('organic_waste_method');
            $table->integer('metal_waste');
            $table->string('metal_waste_method');
            $table->integer('other_waste');
            $table->string('other_waste_method');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_emppros');
    }
};
