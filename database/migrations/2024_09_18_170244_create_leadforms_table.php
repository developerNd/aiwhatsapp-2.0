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
        Schema::create('leadforms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('project_name');
            $table->string('form_id');
            $table->string('page_id');
            $table->text('page_access_token');
            $table->string('token_expiry_date');
            $table->integer('form_status')->nullable();
            $table->timestamp('last_fetched_at')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->useCurrentOnupdate();
            $table->timestamp('updated_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leadforms');
    }
};
