<?php

use Illuminate\Database\Migrations\Migration;

class CreateShoptaxTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_tax', function($table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->integer('percent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_tax');
    }

}