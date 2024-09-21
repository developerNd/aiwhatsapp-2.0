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
        Schema::create('whatsapp_message_templates', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->biginteger('user_id');
            $table->biginteger('template_id');
            $table->string('template_name');
            $table->string('template_category');
            $table->string('template_language');
            $table->string('template_status');
            $table->longtext('message_components');
            $table->tinyinteger('template_attachment')->nullable();
            $table->string('template_image')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whatsapp_message_templates');
    }
};
