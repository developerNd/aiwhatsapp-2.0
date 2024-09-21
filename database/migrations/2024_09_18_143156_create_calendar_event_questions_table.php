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
        Schema::create('calendar_event_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->text('event_question');
            $table->string('event_question_type');
            $table->tinyinteger('is_required')->nullable();
            $table->text('answer-options')->nullable();
            $table->boolean('question_status')->default(1);
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_questions');
    }
};
