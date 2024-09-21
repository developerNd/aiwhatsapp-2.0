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
        Schema::create('auto_replies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('flow_id')->nullable();
            $table->text('incoming_message');
            $table->text('reply_text')->nullable();
            $table->text('reply_template')->nullable();
            $table->integer('delay_time')->nullable();
            $table->integer('state')->nullable();
            $table->string('functions')->nullable();
            $table->tinyInteger('trigger')->nullable();
            $table->tinyInteger('default_flow_trigger')->nullable();
            $table->integer('next_state')->nullable();
            $table->string('assign_to')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_replies');
    }
};
