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
        Schema::create('whatsapp_cloud_apis', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('whatsapp_Business_Account_Name')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->integer('user_id');
            $table->string('title');
            $table->text('user_access_token');
            $table->string('phone_number_id');
            $table->string('waba_id');
            $table->string('app_id');
            $table->string('app_secret');
            $table->string('status')->default('Active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('expiry_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whatsapp_cloud_apis');
    }
};
