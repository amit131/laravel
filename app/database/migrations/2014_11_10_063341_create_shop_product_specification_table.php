<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopproductspecificationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_product_specification', function($table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->boolean('is_user_input')->nullable();
            $table->boolean('required')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_product_specification');
    }

}