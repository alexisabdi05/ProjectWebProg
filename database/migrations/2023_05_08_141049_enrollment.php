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
        Schema::create('enrollment', function (Blueprint $table) {
            $table->string('userID')->unique();
            // $table->foreign('userID')->references('userID')->on('users');
            $table->string('CourseID')->unique();
            // $table->foreign('CourseID')->references('CourseID')->on('course');
            $table->string('EnrollmentID')->unique()->autoincrement();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment');
    }
};
