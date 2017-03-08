<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_manages', function(Blueprint $table) {
            $table->increments('prj_id');
            $table->string('prj_code');
            $table->string('prj_name');
            $table->text('prj_desc');
            $table->dateTime('prj_start');
            $table->dateTime('prj_end');
            $table->string('prj_budget');
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
        Schema::drop('project_manages');
    }
}
