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
        Schema::create('estfishes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('skipjacktuna_inhouse');
            $table->integer('skipjacktuna_inhouse_qty');
            $table->string('yellowfin_inhouse');
            $table->integer('yellowfin_inhouse_qty');
            $table->string('reeffish_inhouse');
            $table->integer('reeffish_inhouse_qty');
            $table->string('seafood_inhouse');
            $table->integer('seafood_inhouse_qty');
            $table->string('otherfish_inhouse')->nullable();
            $table->integer('otherfish_inhouse_qty')->nullable();
            $table->string('skipjack_purchased');
            $table->integer('skipjack_purchased_qty');
            $table->integer('skipjack_purchased_value');
            $table->string('yellowfin_purchased');
            $table->integer('yellowfin_purchased_qty');
            $table->integer('yellowfin_purchased_value');
            $table->string('reeffish_purchased');
            $table->integer('reeffish_purchased_qty');
            $table->integer('reeffish_purchased_value');
            $table->string('seafood_purchased');
            $table->integer('seafood_purchased_qty');
            $table->integer('seafood_purchased_value');
            $table->string('otherfish_purchased')->nullable();
            $table->integer('otherfish_purchased_qty')->nullable();
            $table->integer('otherfish_purchased_value')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estfishes');
    }
};
