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
        Schema::create('tag_user_contact', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->biginteger('user_contact_id')->unsigned()->unique();
            $table->biginteger('tag_id')->unsigned()->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_user_contact');
    }
};
