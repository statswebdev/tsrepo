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
        Schema::create('estagris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('watermelon_inhouse');
            $table->integer('watermelon_grown')->nullable();
            $table->string('coconut_inhouse');
            $table->integer('coconut_grown')->nullable();
            $table->string('papaya_inhouse');
            $table->integer('papaya_grown')->nullable();
            $table->string('pumpkin_inhouse');
            $table->integer('pumpkin_grown')->nullable();
            $table->string('cucumber_inhouse');
            $table->integer('cucumber_grown')->nullable();
            $table->string('banana_inhouse');
            $table->integer('banana_grown')->nullable();
            $table->string('brinjal_inhouse');
            $table->integer('brinjal_grown')->nullable();
            $table->string('chillies_inhouse');
            $table->integer('chillies_grown')->nullable();
            $table->string('bottlegourd_inhouse');
            $table->integer('bottlegourd_grown')->nullable();
            $table->string('butternut_inhouse');
            $table->integer('butternut_grown')->nullable();
            $table->string('cabbage_inhouse');
            $table->integer('cabbage_grown')->nullable();
            $table->string('mango_inhouse');
            $table->integer('mango_grown')->nullable();
            $table->string('waxgourd_inhouse');
            $table->integer('waxgourd_grown')->nullable();
            $table->string('otheragrione_inhouse')->nullable();
            $table->integer('otheragrione_grown')->nullable();
            $table->string('otheragritwo_inhouse')->nullable();
            $table->integer('otheragritwo_grown')->nullable();
            $table->string('otheragrithree_inhouse')->nullable();
            $table->integer('otheragrithree_grown')->nullable();
            $table->string('otheragrifour_inhouse')->nullable();
            $table->integer('otheragrifour_grown')->nullable();
            $table->string('watermelon_farmers');
            $table->integer('watermelon_farmers_qty')->nullable();
            $table->integer('watermelon_farmers_value')->nullable();
            $table->string('coconut_farmers');
            $table->integer('coconut_farmers_qty')->nullable();
            $table->integer('coconut_farmers_value')->nullable();
            $table->string('papaya_farmers');
            $table->integer('papaya_farmers_qty')->nullable();
            $table->integer('papaya_farmers_value')->nullable();
            $table->string('pumpkin_farmers');
            $table->integer('pumpkin_farmers_qty')->nullable();
            $table->integer('pumpkin_farmers_value')->nullable();
            $table->string('cucumber_farmers');
            $table->integer('cucumber_farmers_qty')->nullable();
            $table->integer('cucumber_farmers_value')->nullable();
            $table->string('banana_farmers');
            $table->integer('banana_farmers_qty')->nullable();
            $table->integer('banana_farmers_value')->nullable();
            $table->string('brinjal_farmers');
            $table->integer('brinjal_farmers_qty')->nullable();
            $table->integer('brinjal_farmers_value')->nullable();
            $table->string('chillies_farmers');
            $table->integer('chillies_farmers_qty')->nullable();
            $table->integer('chillies_farmers_value')->nullable();
            $table->string('bottlegourd_farmers');
            $table->integer('bottlegourd_farmers_qty')->nullable();
            $table->integer('bottlegourd_farmers_value')->nullable();
            $table->string('butternut_farms');
            $table->integer('butternut_farmers_qty')->nullable();
            $table->integer('butternut_farmers_value')->nullable();
            $table->string('cabbage_farmers');
            $table->integer('cabbage_farmers_qty')->nullable();
            $table->integer('cabbage_farmers_value')->nullable();
            $table->string('mango_farmers');
            $table->integer('mango_farmers_qty')->nullable();
            $table->integer('mango_farmers_value')->nullable();
            $table->string('waxgourd_farmers');
            $table->integer('waxgourd_farmers_qty')->nullable();
            $table->integer('waxgourd_farmers_value')->nullable();
            $table->string('otheragrione_farmers')->nullable();
            $table->integer('otheragrione_farmers_qty')->nullable();
            $table->integer('otheragrione_farmers_value')->nullable();
            $table->string('otheragritwo_farmers')->nullable();
            $table->integer('otheragritwo_farmers_qty')->nullable();
            $table->integer('otheragritwo_farmers_value')->nullable();
            $table->string('otheragrithree_farmers')->nullable();
            $table->integer('otheragrithree_farmers_qty')->nullable();
            $table->integer('otheragrithree_farmers_value')->nullable();
            $table->string('otheragrifour_farmers')->nullable();
            $table->integer('otheragrifour_farmers_qty')->nullable();
            $table->integer('otheragrifour_farmers_value')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estagris');
    }
};
