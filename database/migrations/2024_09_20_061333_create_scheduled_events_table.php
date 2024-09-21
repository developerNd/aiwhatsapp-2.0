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
        Schema::create('scheduled_events', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->biginteger('lead_id')->nullable();
            $table->integer('assign_to')->nullable();
            $table->string('invitee_name');
            $table->string('invitee_email');
            $table->string('invitee_phone');
            $table->string('event_date');
            $table->string('event_time');
            $table->tinyinteger('status')->default(1);
            $table->tinyinteger('follow_up')->default(0);
            $table->tinyinteger('no_show')->default(0);
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_events');
    }
};
