<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_manages', function(Blueprint $table) {
            $table->increments('acc_bal_id');
            $table->string('acc_bal_code');
            $table->string('acc_bal_name');
            $table->integer('acc_bal_current');
            $table->string('acc_bal_type');
            $table->text('acc_bal_desc');
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
        Schema::drop('accounts_manages');
    }
}
