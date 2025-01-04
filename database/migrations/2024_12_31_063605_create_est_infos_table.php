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
        Schema::create('est_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('info_provider');
            $table->string('contact_number');
            $table->string('type_organisation');
            $table->string('operator_name');
            $table->string('operator_register');
            $table->string('owner_one');
            $table->string('owner_two');
            $table->string('operator_contact');
            $table->string('operator_email');
            $table->integer('government_share');
            $table->integer('maldivian_share');
            $table->integer('foreign_share');
            $table->string('taxpayer_number');
            $table->dateTime('establishment_regdate');
            $table->integer('bedcapacity');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_infos');
    }
};
