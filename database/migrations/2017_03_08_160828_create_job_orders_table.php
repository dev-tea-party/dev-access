<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_orders', function(Blueprint $table) {
            $table->increments('jo_id');
            $table->string('jo_code');
            $table->text('jo_desc');
            $table->string('jo_cost');
            $table->string('prj_id');
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
        Schema::drop('job_orders');
    }
}
