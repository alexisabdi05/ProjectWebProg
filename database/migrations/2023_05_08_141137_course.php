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
        Schema::create('course', function (Blueprint $table) {
            $table->increments('CourseID');
            $table->integer('CategoryID');
            // $table->foreign('CategoryID')->references('CategoryID')->on('category');
            $table->string('CourseName');
            $table->text('CourseDesc');
            $table->string('CourseIMG');
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
