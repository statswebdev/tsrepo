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
        Schema::create('est_emptwos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
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

            $table->integer('duration_maldivian_male_lessthanoneyear');
            $table->integer('duration_maldivian_female_lessthanoneyear');
            $table->integer('duration_foreign_male_lessthanoneyear');
            $table->integer('duration_foreign_female_lessthanoneyear');

            $table->integer('duration_maldivian_male_one_two_years');
            $table->integer('duration_maldivian_female_one_two_years');
            $table->integer('duration_foreign_male_one_two_years');
            $table->integer('duration_foreign_female_one_two_years');

            $table->integer('duration_maldivian_male_three_four_years');
            $table->integer('duration_maldivian_female_three_four_years');
            $table->integer('duration_foreign_male_three_four_years');
            $table->integer('duration_foreign_female_three_four_years');

            $table->integer('duration_maldivian_male_five_nine_years');
            $table->integer('duration_maldivian_female_five_nine_years');
            $table->integer('duration_foreign_male_five_nine_years');
            $table->integer('duration_foreign_female_five_nine_years');

            $table->integer('duration_maldivian_male_ten_years');
            $table->integer('duration_maldivian_female_ten_years');
            $table->integer('duration_foreign_male_ten_years');
            $table->integer('duration_foreign_female_ten_years');



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
            $table->integer('capital_male');
            $table->integer('capital_female');
            $table->integer('ha_male');
            $table->integer('ha_female');
            $table->integer('hdh_male');
            $table->integer('hdh_female');
            $table->integer('shaviyani_male');
            $table->integer('shaviyani_female');
            $table->integer('noonu_male');
            $table->integer('noonu_female');
            $table->integer('raa_male');
            $table->integer('raa_female');
            $table->integer('baa_male');
            $table->integer('baa_female');
            $table->integer('lhaviyani_male');
            $table->integer('lhaviyani_female');
            $table->integer('kaafu_male');
            $table->integer('kaafu_female');
            $table->integer('alifalif_male');
            $table->integer('alifalif_female');
            $table->integer('alifdhaal_male');
            $table->integer('alifdhaal_female');
            $table->integer('vaav_male');
            $table->integer('vaav_female');
            $table->integer('meem_male');
            $table->integer('meem_female');
            $table->integer('faaf_male');
            $table->integer('faaf_female');
            $table->integer('dhaal_male');
            $table->integer('dhaal_female');
            $table->integer('thaa_male');
            $table->integer('thaa_female');
            $table->integer('laam_male');
            $table->integer('laam_female');
            $table->integer('ga_male');
            $table->integer('ga_female');
            $table->integer('gdh_male');
            $table->integer('gdh_female');
            $table->integer('gn_male');
            $table->integer('gn_female');
            $table->integer('seenu_male');
            $table->integer('seenu_female');
            $table->string('retailshop_outsourced');
            $table->integer('retailshop_male');
            $table->integer('retailshop_female');
            $table->string('divingcenter_outsourced');
            $table->integer('divingcenter_male');
            $table->integer('divingcenter_female');
            $table->string('restaurant_outsourced');
            $table->integer('restaurant_male');
            $table->integer('restaurant_female');
            $table->string('spa_outsourced');
            $table->integer('spa_male');
            $table->integer('spa_female');
            $table->string('transport_outsourced');
            $table->integer('transport_male');
            $table->integer('transport_female');
            $table->string('construction_outsourced');
            $table->integer('construction_male');
            $table->integer('construction_female');
            $table->string('otherone_name')->nullable();
            $table->string('otherone_outsourced')->nullable();
            $table->integer('otherone_male')->nullable();
            $table->integer('otherone_female')->nullable();
            $table->string('othertwo_name')->nullable();
            $table->string('othertwo_outsourced')->nullable();
            $table->integer('othertwo_male')->nullable();
            $table->integer('othertwo_female')->nullable();
            $table->string('otherthree_name')->nullable();
            $table->string('otherthree_outsourced')->nullable();
            $table->integer('otherthree_male')->nullable();
            $table->integer('otherthree_female')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_emptwos');
    }
};
