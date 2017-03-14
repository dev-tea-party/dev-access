<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function(Blueprint $table) {
            $table->increments('po_id');
            $table->date('po_date');
            $table->integer('po_num');
            $table->integer('po_sup_id');
            $table->integer('po_in_budget');
            $table->text('po_vat');
            $table->integer('po_prep_user_id');
            $table->integer('po_app_user_id');
            $table->string('po_status');
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
        Schema::drop('purchase_orders');
    }
}
