<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover_image')->nullable(); // Imagen opcional
            $table->text('content');
            $table->unsignedBigInteger('robotics_kit_id');
            $table->foreign('robotics_kit_id')->references('id')->on('robotics_kits')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
