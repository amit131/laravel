<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopproductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function($table) {
            $table->increments('product_id');
            $table->integer('category_id')->index();
            $table->integer('tax_id');
            $table->string('title', 45);
            $table->text('description')->nullable();
            $table->string('price', 45)->nullable();
            $table->string('language', 45)->nullable();
            $table->text('specifications')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_products');
    }

}