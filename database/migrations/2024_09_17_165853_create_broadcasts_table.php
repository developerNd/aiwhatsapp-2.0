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
        Schema::create('broadcasts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('broadcast_title');
            $table->string('broadcast_type');
            $table->string('broadcast_time')->nullable();
            $table->string('broadcast_send_to');
            $table->string('broadcast_whatsapp_api');
            $table->string('broadcast_message_type');
            $table->longtext('broadcast_template_name');
            $table->string('broadcast_message')->nullable();
            $table->string('broadcast_status')->nullable();
            $table->timestamp('processed_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broadcasts');
    }
};
