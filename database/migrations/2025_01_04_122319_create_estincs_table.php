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
        Schema::create('estincs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->decimal('income_boarding');
            $table->decimal('income_food');
            $table->decimal('income_beverage');
            $table->decimal('income_catering');
            $table->decimal('income_transport');
            $table->decimal('income_spa');
            $table->decimal('income_laundry');
            $table->decimal('income_servicecharge');
            $table->decimal('income_excursion');
            $table->decimal('income_watersports');
            $table->decimal('income_watersports_third');
            $table->decimal('income_retailshop');
            $table->decimal('income_retailshop_third');
            $table->decimal('income_exchange');
            $table->decimal('income_commission');
            $table->decimal('income_managementfee');
            $table->decimal('income_lease');
            $table->decimal('income_finance');
            $table->decimal('income_dividend');
            $table->decimal('income_other');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estincs');
    }
};
