<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_manages', function(Blueprint $table) {
            $table->increments('sup_id');
            $table->string('sup_name');
            $table->string('sup_cat_id');
            $table->string('sup_vat_num');
            $table->string('sup_op_bal');
            $table->string('sup_addr_1');
            $table->string('sup_addr_2');
            $table->string('sup_contact_name');
            $table->string('sup_contact_email');
            $table->string('sup_tel_num');
            $table->string('sup_mobile_num');
            $table->string('sup_fax_num');
            $table->string('sup_website');
            $table->string('sup_bank_acct_holder');
            $table->string('sup_bank_acct_num');
            $table->string('sup_bank_acct_type');
            $table->string('sup_bank_name');
            $table->string('sup_bank_code');
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
        Schema::drop('supplier_manages');
    }
}
