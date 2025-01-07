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
        Schema::create('estfuelconsums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->integer('diesel_bought_qty');
            $table->string('diesel_bought_year');
            $table->integer('petrol_bought_qty');
            $table->string('petrol_bought_year');
            $table->integer('lpg_bought_qty');
            $table->string('lpg_bought_year');
            $table->integer('other_bought_qty')->nullable();
            $table->string('other_bought_year')->nullable();
            $table->string('diesel_inventory_unit');
            $table->integer('diesel_inventory_yearfirst');
            $table->integer('diesel_inventory_yearend');
            $table->string('petrol_inventory_unit');
            $table->integer('petrol_inventory_yearfirst');
            $table->integer('petrol_inventory_yearend');
            $table->string('lpg_inventory_unit');
            $table->integer('lpg_inventory_unit_yearfirst');
            $table->integer('lpg_inventory_unit_yearend');
            $table->string('other_inventory_specify')->nullable();
            $table->string('other_inventory_unit')->nullable();
            $table->integer('other_inventory_unit_yearfirst')->nullable();
            $table->integer('other_inventory_unit_yearend')->nullable();
            $table->string('diesel_electricity_unit');
            $table->integer('diesel_electricity_qty');
            $table->string('petrol_electricity_unit');
            $table->integer('petrol_electricity_qty');
            $table->string('diesel_desalination_unit');
            $table->integer('diesel_desalination_qty');
            $table->string('petrol_desalination_unit');
            $table->integer('petrol_desalination_qty');
            $table->string('diesel_transportsea_unit');
            $table->integer('diesel_transportsea_qty');
            $table->string('petrol_transportsea_unit');
            $table->integer('petrol_transportsea_qty');
            $table->string('diesel_transportland_unit');
            $table->integer('diesel_transportland_qty');
            $table->string('petrol_transportland_unit');
            $table->integer('petrol_transportland_qty');
            $table->string('lpg_cooking_unit');
            $table->integer('lpg_cooking_qty');
            $table->string('diesel_cooking_unit');
            $table->integer('diesel_cooking_qty');
            $table->string('petrol_cooking_unit');
            $table->integer('petrol_cooking_qty');
            $table->string('diesel_other_fuelconsumption')->nullable();
            $table->string('diesel_other_fuelconsumption_unit')->nullable();
            $table->integer('diesel_other_fuelconsumption_qty')->nullable();
            $table->string('petrol_other_fuelconsumption')->nullable();
            $table->string('petrol_other_fuelconsumption_unit')->nullable();
            $table->integer('petrol_other_fuelconsumption_qty')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estfuelconsums');
    }
};
