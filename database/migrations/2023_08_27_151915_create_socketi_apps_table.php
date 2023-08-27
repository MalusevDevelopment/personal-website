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
        Schema::create('socketi_apps', function (Blueprint $table) {
            $table->string('id')->primary()->nullable(false);
            $table->string('key')->unique()->nullable(false);
            $table->string('secret')->nullable(false);
            $table->integer('max_connections')->nullable(false);
            $table->boolean('enable_client_messages')->nullable(false);
            $table->boolean('enabled')->nullable(false);
            $table->integer('max_backend_events_per_sec')->nullable(false);
            $table->integer('max_client_events_per_sec')->nullable(false);
            $table->integer('max_read_req_per_sec')->nullable(false);
            $table->integer('max_presence_members_per_channel')
                ->nullable()
                ->default(null);
            $table->integer('max_presence_member_size_in_kb')
                ->nullable()
                ->default(null);
            $table->integer('max_channel_name_length')
                ->nullable()
                ->default(null);
            $table->integer('max_event_channels_at_once')
                ->nullable()
                ->default(null);
            $table->integer('max_event_name_length')
                ->nullable()
                ->default(null);
            $table->integer('max_event_payload_in_kb')
                ->nullable()
                ->default(null);
            $table->integer('max_event_batch_size')
                ->nullable()
                ->default(null);
            $table->jsonb('webhooks')->nullable(false);
            $table->boolean('enable_user_authentication')->nullable(false);

            $table->timestamps();
        });
    }
};
