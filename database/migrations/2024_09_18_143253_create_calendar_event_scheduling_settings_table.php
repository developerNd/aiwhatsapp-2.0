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
        Schema::create('calendar_event_scheduling_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->string('event_calendar_type');
            $table->integer('event_calendar_days')->nullable();
            $table->string('event_calendar_from')->nullable();
            $table->string('event_calendar_to')->nullable();
            $table->tinyinteger('event_buffer_time')->default(0);
            $table->integer('time_before_event')->nullable();
            $table->integer('time_after_event')->nullable();
            $table->integer('incremental_time');
            $table->integer('event_daily_limit')->nullable();
            $table->integer('event_notice_time')->nullable();
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_scheduling_settings');
    }
};
