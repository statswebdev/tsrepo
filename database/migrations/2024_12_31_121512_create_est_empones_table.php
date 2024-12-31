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
        Schema::create('est_empones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->integer('maldivian_male');
            $table->integer('maldivian_female');
            $table->integer('foreign_male');
            $table->integer('foreign_female');
            $table->integer('maldivian_male_commuting');
            $table->integer('maldivian_female_commuting');
            $table->integer('foreign_male_commuting');
            $table->integer('foreign_female_commuting');
            $table->integer('maldivian_male_permanent');
            $table->integer('maldivian_female_permanent');
            $table->integer('foreign_male_permanent');
            $table->integer('foreign_female_permanent');
            $table->integer('accomo_maldivian_male');
            $table->integer('accomo_maldivian_female');
            $table->integer('accomo_foreign_male');
            $table->integer('accomo_foreign_female');
            $table->integer('food_maldivian_male');
            $table->integer('food_maldivian_female');
            $table->integer('food_foreign_male');
            $table->integer('food_foreign_female');
            $table->integer('transport_maldivian_male');
            $table->integer('transport_maldivian_female');
            $table->integer('transport_foreign_male');
            $table->integer('transport_foreign_female');
            $table->integer('sports_maldivian_male');
            $table->integer('sports_maldivian_female');
            $table->integer('sports_foreign_male');
            $table->integer('sports_foreign_female');
            $table->integer('admin_maldivian_male');
            $table->integer('admin_maldivian_female');
            $table->integer('admin_foreign_male');
            $table->integer('admin_foreign_female');
            $table->integer('other_maldivian_male');
            $table->integer('other_maldivian_female');
            $table->integer('other_foreign_male');
            $table->integer('other_foreign_female');
            $table->integer('manager_maldivian_male');
            $table->integer('manager_maldivian_female');
            $table->integer('manager_foreign_male');
            $table->integer('manager_foreign_female');
            $table->integer('professional_maldivian_male');
            $table->integer('professional_maldivian_female');
            $table->integer('professional_foreign_male');
            $table->integer('professional_foreign_female');
            $table->integer('service_maldivian_male');
            $table->integer('service_maldivian_female');
            $table->integer('service_foreign_male');
            $table->integer('service_foreign_female');
            $table->integer('elementary_maldivian_male');
            $table->integer('elementary_maldivian_female');
            $table->integer('elementary_foreign_male');
            $table->integer('elementary_foreign_female');
            $table->integer('bylevelother_maldivian_male');
            $table->integer('bylevelother_maldivian_female');
            $table->integer('bylevelother_foreign_male');
            $table->integer('bylevelother_foreign_female');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_empones');
    }
};
