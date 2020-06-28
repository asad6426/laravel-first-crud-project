<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_course_table', function (Blueprint $table) {
            $table->id();
            $table->integer('semester_id');
            $table->string('batch')->nullable();
            $table->string('level_term')->nullable();
            $table->string('course_code')->nullable();
            $table->string('course_title')->nullable();
            $table->string('course_hour')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers_course_table');
    }
}
