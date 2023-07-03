<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * test
     * test
     */
    public function up(): void
    {
        Schema::create('course_detail', function (Blueprint $table) {
            // $table->Integer('CourseID');
            $table->id();
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->string('CourseDetailTitle');
            $table->text('CourseDetailDesc');
            $table->string('CourseDetailVideo');
            $table->integer('CourseStatus');
            $table->integer('day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_detail');
    }
};


