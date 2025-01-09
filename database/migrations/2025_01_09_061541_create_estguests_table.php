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
        Schema::create('estguests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->integer('maldivian_male');
            $table->integer('maldivian_female');
            $table->integer('foreign_male');
            $table->integer('foreign_female');
            $table->integer('maldivian_male_permanent');
            $table->integer('maldivian_female_permanent');
            $table->integer('foreign_male_permanent');
            $table->integer('foreign_female_permanent');

            $table->integer('hundred_maldivian');
            $table->integer('hundred_foreign');
            $table->integer('threehundred_maldivian');
            $table->integer('threehundred_foreign');
            $table->integer('fivehundred_maldivian');
            $table->integer('fivehundred_foreign');
            $table->integer('sevenhundred_maldivian');
            $table->integer('sevenhundred_foreign');
            $table->integer('ninehundred_maldivian');
            $table->integer('ninehundred_foreign');
            $table->integer('thausand_maldivian');
            $table->integer('thausand_foreign');
            $table->integer('threethausand_maldivian');
            $table->integer('threethausand_foreign');
            $table->integer('fivethausand_maldivian');
            $table->integer('fivethausand_foreign');
            $table->integer('seventhausand_maldivian');
            $table->integer('seventhausand_foreign');
            $table->integer('tenthausand_maldivian');
            $table->integer('tenthausand_foreign');

            $table->integer('age_eighteen_mdv_male');
            $table->integer('age_eighteen_mdv_female');
            $table->integer('age_eighteen_foreign_male');
            $table->integer('age_eighteen_foreign_female');
            $table->integer('age_twenty_mdv_male');
            $table->integer('age_twenty_mdv_female');
            $table->integer('age_twenty_foreign_male');
            $table->integer('age_twenty_foreign_female');
            $table->integer('age_thirty_mdv_male');
            $table->integer('age_thirty_mdv_female');
            $table->integer('age_thirty_foreign_male');
            $table->integer('age_thirty_foreign_female');
            $table->integer('age_sixty_mdv_male');
            $table->integer('age_sixty_mdv_female');
            $table->integer('age_sixty_foreign_male');
            $table->integer('age_sixty_foreign_female');
            $table->integer('age_old_mdv_male');
            $table->integer('age_old_mdv_female');
            $table->integer('age_old_foreign_male');
            $table->integer('age_old_foreign_female');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estguests');
    }
};
