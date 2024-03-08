<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Tpetry\PostgresqlEnhanced\Schema\Concerns\ZeroDowntimeMigration;

class CreateScheduleMonitorTables extends Migration
{
    use ZeroDowntimeMigration;

    public function up()
    {
        Schema::create('monitored_scheduled_tasks', function (Blueprint $table) {
            $table->identity(always: true)->primary();

            $table->string('name');
            $table->string('type')->nullable();
            $table->string('cron_expression');
            $table->string('timezone')->nullable();
            $table->string('ping_url')->nullable();

            $table->dateTimeTz('last_started_at')->nullable();
            $table->dateTimeTz('last_finished_at')->nullable();
            $table->dateTimeTz('last_failed_at')->nullable();
            $table->dateTimeTz('last_skipped_at')->nullable();

            $table->dateTimeTz('registered_on_oh_dear_at')->nullable();
            $table->dateTimeTz('last_pinged_at')->nullable();
            $table->integer('grace_time_in_minutes');

            $table->timestampsTz();
        });


        Schema::create('monitored_scheduled_task_log_items', function (Blueprint $table) {
            $table->identity(always: true)->primary();

            $table->string('type');
            $table->jsonb('meta')->nullable();
            $table->timestampsTz();

            $table->foreignId('monitored_scheduled_task_id')
                ->references('id')
                ->on('monitored_scheduled_tasks')
                ->cascadeOnDelete();
        });
    }
}
