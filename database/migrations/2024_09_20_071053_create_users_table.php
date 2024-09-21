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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->integer('role')->default(1);
            $table->tinyinteger('auto_assign')->default(1);
            $table->string('available_from')->nullable();
            $table->string('available_to')->nullable();
            $table->integer('daily_meeting_limit')->nullable();
            $table->integer('member_of')->nullable();
            $table->tinyinteger('has_broadcast_permission')->default(0);
            $table->tinyinteger('shared_number_user')->default(0);
            $table->integer('shared_number_admin_id')->nullable();
            $table->integer('shared_number_admin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('google_id')->nullable();
            $table->integer('message_credits')->nullable();
            $table->tinyinteger('paid')->default(0);
            $table->tinyinteger('status')->default(0);
            $table->tinyinteger('new_ui')->default(0);
            $table->string('zoom_webhook_token')->nullable();
            $table->tinyinteger('deleted')->default(0);
            $table->string('remember_token')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
