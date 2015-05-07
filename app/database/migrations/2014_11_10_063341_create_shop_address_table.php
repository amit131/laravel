<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopaddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_address', function($table) {
            $table->increments('id');
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('street', 255);
            $table->string('zipcode', 255);
            $table->string('city', 255);
            $table->string('country', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_address');
    }

}