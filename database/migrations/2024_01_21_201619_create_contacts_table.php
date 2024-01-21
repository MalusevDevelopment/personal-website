<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tpetry\PostgresqlEnhanced\Schema\Concerns\ZeroDowntimeMigration;

return new class extends Migration
{
    use ZeroDowntimeMigration;

    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->identity(always: true)->primary();
            $table->string('name');
            $table->timestampsTz();
        });
    }
};
