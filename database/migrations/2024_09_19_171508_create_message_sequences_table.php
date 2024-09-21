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
        Schema::create('message_sequences', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->biginteger('user_id');
            $table->biginteger('stage_id');
            $table->longtext('message');
            $table->integer('day');
            $table->string('time')->nullable();
            $table->integer('seconds')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_sequences');
    }
};
