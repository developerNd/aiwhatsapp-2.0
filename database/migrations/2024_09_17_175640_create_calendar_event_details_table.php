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
        Schema::create('calendar_event_details', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->string('event_name');
            $table->text('event_description');
            $table->string('event_location');
            $table->string('event_duration');
            $table->string('event_link');
            $table->string('event_color');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_details');
    }
};
