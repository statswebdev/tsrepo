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
        Schema::create('est_operas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('months_operated');
            $table->integer('rooms_yearend');
            $table->integer('beds_yearend');
            $table->integer('roomnights_sold');
            $table->integer('bednights_sold');
            $table->integer('roomrate_annual');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_operas');
    }
};
