<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string("student_name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("gender");
            $table->date("Date_of_Birth");
            $table->integer("class_id");
            $table->integer("roll");
            $table->string("address");
            $table->integer("phone");
            $table->string("email");
            $table->string("password");
            $table->binary("photo");
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
        Schema::drop('students');
    }
}
