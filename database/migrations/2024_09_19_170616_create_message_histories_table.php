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
        Schema::create('message_histories', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->biginteger('user_id')->nullable();
            $table->string('broadcast_name')->nullable();
            $table->biginteger('project_id')->nullable();
            $table->string('sender');
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone');
            $table->longtext('message_text')->nullable();
            $table->string('message_id')->nullable();
            $table->string('status');
            $table->string('error_message')->nullable();
            $table->longtext('reply_message')->nullable();
            $table->string('context_from_id')->nullable();
            $table->tinyinteger('seen')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_histories');
    }
};
