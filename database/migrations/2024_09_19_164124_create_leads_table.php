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
        Schema::create('leads', function (Blueprint $table) {
            $table->id()->unique();
            $table->biginteger('user_id')->nullable();
            $table->integer('assigned_to')->nullable();
            $table->biginteger('project_id')->nullable();
            $table->string('name')->nullable();
            $table->string('phone');
            $table->string('city')->nullable();
            $table->integer('user_rating_positive')->nullable()->default(0);
            $table->integer('user_rating_negative')->nullable()->default(0);
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->string('source')->nullable();
            $table->tinyinteger('wp_group')->nullable();
            $table->tinyinteger('gm')->nullable();
            $table->string('mm')->nullable();
            $table->string('akw')->nullable();
            $table->biginteger('stage_id')->unique()->unsigned()->nullable();
            $table->string('inquiry_status')->nullable();
            $table->string('next_call')->nullable();
            $table->string('meeting_schedule')->nullable();
            $table->text('ramark')->nullable();
            $table->tinyinteger('talk_to_support')->nullable();
            $table->string('follow_up_1')->nullable();
            $table->time('follow_up_time')->nullable();
            $table->integer('value')->nullable();
            $table->integer('received')->nullable();
            $table->integer('remaining')->nullable();
            $table->string('follow_up_2')->nullable();
            $table->string('follow_up_3')->nullable();
            $table->string('follow_up_4')->nullable();
            $table->string('follow_up_5')->nullable();
            $table->string('venue_of_function')->nullable();
            $table->string('date_of_function')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
 });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
