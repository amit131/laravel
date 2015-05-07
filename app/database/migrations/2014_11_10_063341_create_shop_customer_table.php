<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopcustomerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_customer', function($table) {
            $table->increments('customer_id');
            $table->integer('user_id')->nullable();
            $table->integer('address_id');
            $table->integer('delivery_address_id');
            $table->integer('billing_address_id');
            $table->string('email', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_customer');
    }

}