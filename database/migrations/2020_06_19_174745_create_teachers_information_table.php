<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_information', function (Blueprint $table) {
            $table->id();
            $table->integer('tid')->unique();
            $table->string('t_name')->nullable();
            $table->string('t_i_name')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('phone_number')->nullable()->unique();
            $table->string('max_cr')->nullable();
            $table->string('day_off')->nullable();
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
        Schema::dropIfExists('teachers_information');
    }
}
