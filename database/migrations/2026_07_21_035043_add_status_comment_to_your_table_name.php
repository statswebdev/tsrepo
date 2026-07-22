<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tables that use the form status feature.
     */
    private array $tables = [
        'est_infos',
        'est_operas',
        'est_empones',
        'est_emptwos',
        'est_emppros',
        'estagris',
        'estfishes',
        'estelecs',
        'estfuels',
        'estfuelconsums',
        'estothersers',
        'estincs',
        'estexps',
        'estitks',
        'estguests',
    ];

    public function up(): void
    {
        foreach ($this->tables as $tableName) {
            if (
                Schema::hasTable($tableName) &&
                !Schema::hasColumn($tableName, 'status_comment')
            ) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->text('status_comment')
                        ->nullable()
                        ->after('status');
                });
            }
        }
    }

    public function down(): void
    {
        foreach ($this->tables as $tableName) {
            if (
                Schema::hasTable($tableName) &&
                Schema::hasColumn($tableName, 'status_comment')
            ) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->dropColumn('status_comment');
                });
            }
        }
    }
};