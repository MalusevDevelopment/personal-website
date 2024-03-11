<?php

use App\Enums\PostStatus;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Tpetry\PostgresqlEnhanced\Schema\Concerns\ZeroDowntimeMigration;

return new class extends Migration
{
    use ZeroDowntimeMigration;

    public function up(): void
    {
        Schema::createEnumIfNotExists('post_status', PostStatus::cases());

        Schema::create('posts', function (Blueprint $table) {
            $table->identity(always: true)->primary();
            $table->string('title')->nullable(false);
            $table->longText('body')->nullable(false);
            $table->jsonb('metadata')->nullable();
            $table->enumeration('status', 'post_status')
                ->default(PostStatus::DRAFT->value);
            $table->timestampsTz();

            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->uniqueIndex('title');
            $table->index('status');
        });
    }
};
