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
        Schema::create('estexps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->decimal('expense_salary');
            $table->decimal('expense_allowance');
            $table->decimal('expense_inkind');
            $table->decimal('expense_salary_foreign');
            $table->decimal('expense_allowance_foreign');
            $table->decimal('expense_inkind_foreign');
            $table->decimal('expense_food');
            $table->decimal('expense_laundry');
            $table->decimal('expense_transport');
            $table->decimal('expense_water');
            $table->decimal('expense_electricity');
            $table->decimal('expense_fuel');
            $table->decimal('expense_tele');
            $table->decimal('expense_fines');
            $table->decimal('expense_costofgoodssold');
            $table->decimal('expense_lease');
            $table->decimal('expense_depreciation');
            $table->decimal('expense_financialcost');
            $table->decimal('expense_marketing');
            $table->decimal('expense_admin');
            $table->decimal('expense_management');
            $table->decimal('expense_other');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estexps');
    }
};
