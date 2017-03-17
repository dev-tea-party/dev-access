<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function(Blueprint $table) {
            $table->increments('id');
            $table->text('company_name');
            $table->text('contact_name');
            $table->text('billing_address');
            $table->text('business_type');
            $table->text('city');
            $table->text('state_province');
            $table->text('country');
            $table->text('zip_code');
            $table->string('email');
            $table->text('url');
            $table->integer('tel_no');
            $table->integer('mob_no');
            $table->integer('fax_no');
            $table->string('other_details');
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
        Schema::drop('company_details');
    }
}
