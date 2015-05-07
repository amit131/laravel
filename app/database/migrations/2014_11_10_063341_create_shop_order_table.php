<?php

use Illuminate\Database\Migrations\Migration;

class CreateShoporderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_order', function($table) {
            $table->increments('order_id');
            $table->integer('customer_id')->index();
            $table->integer('delivery_address_id');
            $table->integer('billing_address_id');
            $table->integer('ordering_date');
            $table->boolean('ordering_done')->nullable();
            $table->boolean('ordering_confirmed')->nullable();
            $table->integer('payment_method');
            $table->integer('shipping_method');
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_order');
    }

}