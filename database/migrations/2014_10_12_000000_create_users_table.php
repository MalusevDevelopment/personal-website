<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tpetry\PostgresqlEnhanced\Schema\Concerns\ZeroDowntimeMigration;

return new class extends Migration {
    use ZeroDowntimeMigration;

    public function up(): void
    {
        Schema::create('users', static function (Blueprint $table) {
            $table->identity(always: true)->primary();
            $table->string('name');
            $table->string('email');
            $table->timestampTz('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestampsTz();

            $table->uniqueIndex('email');
            $table->uniqueIndex('remember_token');

            $table->index('email', 'fast_users_email_lookup_index')
                ->algorithm('hash');

            $table->index('remember_token', 'fast_remember_token_lookup_index')
                ->algorithm('hash');
        });
    }
};
