<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopshippingmethodTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_shipping_method', function($table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->integer('tax_id');
            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_shipping_method');
    }

}