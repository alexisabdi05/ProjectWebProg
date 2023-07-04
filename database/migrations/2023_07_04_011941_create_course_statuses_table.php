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
        Schema::create('course_statuses', function (Blueprint $table) {
            $table->id();
            $table->Boolean('status')->default(FALSE);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('coursedetail_id')->references('id')->on('course_detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_statuses');
    }
};
