<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopproductvariationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_product_variation', function($table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('specification_id');
            $table->integer('position');
            $table->string('title', 255);
            $table->float('price_adjustion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_product_variation');
    }

}