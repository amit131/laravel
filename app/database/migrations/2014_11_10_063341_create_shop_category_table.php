<?php

use Illuminate\Database\Migrations\Migration;

class CreateShopcategoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_category', function($table) {
            $table->increments('category_id');
            $table->integer('parent_id')->nullable();
            $table->string('title', 45);
            $table->text('description')->nullable();
            $table->string('language', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_category');
    }

}