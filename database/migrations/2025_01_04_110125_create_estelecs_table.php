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
        Schema::create('estelecs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('generated_inhouse');
            $table->integer('electricity_generated')->nullable();
            $table->string('electricity_outsourced');
            $table->integer('outsourced_generated')->nullable();
            $table->string('electricity_othersources');
            $table->integer('othersources_generated') ->nullable();
            $table->integer('electricity_consumption');
            $table->string('solargrid_energy');
            $table->integer('solargrid_production') ->nullable();
            $table->integer('solargrid_consumption') ->nullable();
            $table->string('renewable_other');
            $table->integer('renewable_other_production') ->nullable();
            $table->integer('renewable_other_consumption') ->nullable();
            $table->integer('consume_jan_diesel');
            $table->integer('consume_feb_diesel');
            $table->integer('consume_mar_diesel');
            $table->integer('consume_apr_diesel');
            $table->integer('consume_may_diesel');
            $table->integer('consume_jun_diesel');
            $table->integer('consume_jul_diesel');
            $table->integer('consume_aug_diesel');
            $table->integer('consume_sep_diesel');
            $table->integer('consume_oct_diesel');
            $table->integer('consume_nov_diesel');
            $table->integer('consume_dec_diesel');
            $table->integer('consume_jan_lub');
            $table->integer('consume_feb_lub');
            $table->integer('consume_mar_lub');
            $table->integer('consume_apr_lub');
            $table->integer('consume_may_lub');
            $table->integer('consume_jun_lub');
            $table->integer('consume_jul_lub');
            $table->integer('consume_aug_lub');
            $table->integer('consume_sep_lub');
            $table->integer('consume_oct_lub');
            $table->integer('consume_nov_lub');
            $table->integer('consume_dec_lub');
            $table->integer('generate_jan_diesel');
            $table->integer('generate_feb_diesel');
            $table->integer('generate_mar_diesel');
            $table->integer('generate_apr_diesel');
            $table->integer('generate_may_diesel');
            $table->integer('generate_jun_diesel');
            $table->integer('generate_jul_diesel');
            $table->integer('generate_aug_diesel');
            $table->integer('generate_sep_diesel');
            $table->integer('generate_oct_diesel');
            $table->integer('generate_nov_diesel');
            $table->integer('generate_dec_diesel');
            $table->integer('generate_jan_solar');
            $table->integer('generate_feb_solar');
            $table->integer('generate_mar_solar');
            $table->integer('generate_apr_solar');
            $table->integer('generate_may_solar');
            $table->integer('generate_jun_solar');
            $table->integer('generate_jul_solar');
            $table->integer('generate_aug_solar');
            $table->integer('generate_sep_solar');
            $table->integer('generate_oct_solar');
            $table->integer('generate_nov_solar');
            $table->integer('generate_dec_solar');
            $table->integer('generate_jan_renewable');
            $table->integer('generate_feb_renewable');
            $table->integer('generate_mar_renewable');
            $table->integer('generate_apr_renewable');
            $table->integer('generate_may_renewable');
            $table->integer('generate_jun_renewable');
            $table->integer('generate_jul_renewable');
            $table->integer('generate_aug_renewable');
            $table->integer('generate_sep_renewable');
            $table->integer('generate_oct_renewable');
            $table->integer('generate_nov_renewable');
            $table->integer('generate_dec_renewable'); 
            $table->integer('generate_jan_total');
            $table->integer('generate_feb_total');
            $table->integer('generate_mar_total');
            $table->integer('generate_apr_total');
            $table->integer('generate_may_total');
            $table->integer('generate_jun_total');
            $table->integer('generate_jul_total');
            $table->integer('generate_aug_total');
            $table->integer('generate_sep_total');
            $table->integer('generate_oct_total');
            $table->integer('generate_nov_total');
            $table->integer('generate_dec_total');
            $table->integer('demand_jan_max');
            $table->integer('demand_feb_max');
            $table->integer('demand_mar_max');
            $table->integer('demand_apr_max');
            $table->integer('demand_may_max');
            $table->integer('demand_jun_max');
            $table->integer('demand_jul_max');
            $table->integer('demand_aug_max');
            $table->integer('demand_sep_max');
            $table->integer('demand_oct_max');
            $table->integer('demand_nov_max');
            $table->integer('demand_dec_max');
            $table->integer('demand_jan_min');
            $table->integer('demand_feb_min');
            $table->integer('demand_mar_min');
            $table->integer('demand_apr_min');
            $table->integer('demand_may_min');
            $table->integer('demand_jun_min');
            $table->integer('demand_jul_min');
            $table->integer('demand_aug_min');
            $table->integer('demand_sep_min');
            $table->integer('demand_oct_min');
            $table->integer('demand_nov_min');
            $table->integer('demand_dec_min');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estelecs');
    }
};
