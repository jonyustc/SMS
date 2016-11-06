<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysToClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("students",function(Blueprint $table){
            $table->foreign('class_id')
                  ->reference('id')
                  ->on('classnames')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('students',function(Blueprint $table){
            $table->dropForeign('students_class_id_foreign');
        });
    }
}
