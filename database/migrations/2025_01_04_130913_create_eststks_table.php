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
        Schema::create('eststks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->decimal('stock_fuel');
            $table->decimal('stock_fuel_yearend');
            $table->decimal('stock_tradedgoods');
            $table->decimal('stock_tradedgoods_yearend');
            $table->decimal('stock_food');
            $table->decimal('stock_food_yearend');
            $table->decimal('stock_chemicals');
            $table->decimal('stock_chemicals_yearend');
            $table->decimal('stock_packing');
            $table->decimal('stock_packing_yearend');
            $table->decimal('stock_spare');
            $table->decimal('stock_spare_yearend');
            $table->decimal('stock_textile');
            $table->decimal('stock_textile_yearend');
            $table->decimal('stock_stationary');
            $table->decimal('stock_stationary_yearend');
            $table->string('stock_other_one')->nullable();
            $table->decimal('stock_other_one_value')->nullable();
            $table->decimal('stock_other_one_value_yearend')->nullable();
            $table->string('stock_other_two')->nullable();
            $table->decimal('stock_other_two_value')->nullable();
            $table->decimal('stock_other_two_value_yearend')->nullable();
            $table->string('stock_other_three')->nullable();
            $table->decimal('stock_other_three_value')->nullable();
            $table->decimal('stock_other_three_value_yearend')->nullable();
            $table->string('stock_other_four')->nullable();
            $table->decimal('stock_other_four_value')->nullable();
            $table->decimal('stock_other_four_value_yearend')->nullable();
            $table->decimal('profit_loss');
            $table->text('remarks');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eststks');
    }
};
