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
        Schema::table('support_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(); // Assuming user_id is nullable
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Add foreign key reference to users table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('support_requests', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
        });
    }
};
