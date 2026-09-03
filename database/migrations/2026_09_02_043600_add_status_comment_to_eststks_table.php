<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (
            Schema::hasTable('eststks') &&
            !Schema::hasColumn('eststks', 'status_comment')
        ) {
            Schema::table('eststks', function (Blueprint $table) {
                $table->text('status_comment')
                    ->nullable()
                    ->after('status');
            });
        }
    }

    public function down(): void
    {
        if (
            Schema::hasTable('eststks') &&
            Schema::hasColumn('eststks', 'status_comment')
        ) {
            Schema::table('eststks', function (Blueprint $table) {
                $table->dropColumn('status_comment');
            });
        }
    }
};
