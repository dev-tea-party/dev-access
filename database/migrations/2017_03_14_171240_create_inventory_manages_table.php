<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_manages', function(Blueprint $table) {
            $table->increments('inv_item_id');
            $table->integer('inv_item_qty');
            $table->string('inv_item_code');
            $table->text('inv_item_desc');
            $table->string('inv_item_unit');
            $table->string('inv_item_unit_cost');
            $table->string('inv_item_condition');
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
        Schema::drop('inventory_manages');
    }
}
