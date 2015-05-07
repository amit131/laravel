<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopimageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_image', function($table) {
            $table->increments('id');
            $table->string('title', 45);
            $table->string('filename', 45);
            $table->integer('product_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_image');
    }

}