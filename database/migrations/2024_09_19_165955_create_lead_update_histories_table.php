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
        Schema::create('lead_update_histories', function (Blueprint $table) {
            $table->id()->unique();
            $table->biginteger('lead_id')->unsigned();
            $table->string('follow_up')->nullable();
            $table->string('next_follow_up')->nullable();
            $table->string('inquiry_status')->nullable();
            $table->string('stage')->nullable();
            $table->text('remark')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_update_histories');
    }
};
