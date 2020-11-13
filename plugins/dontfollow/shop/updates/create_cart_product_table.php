<?php namespace DontFollow\Products\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCartProductTable extends Migration
{
    public function up()
    {
        Schema::create('cart_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('title')->index();
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('minecraft_id')->nullable();
            $table->integer('number')->default(1)->unsigned();
            $table->string('type')->default('item');
            $table->integer('group_lifetime')->nullable();
            $table->string('group_temp_modifier')->nullable();
            $table->string('case_type')->nullable();
            $table->string('case_content')->nullable();
            $table->string('force_commands')->nullable();
            $table->double('price')->unsigned();
            $table->double('sale')->unsigned()->default(0);
            $table->integer('category_id')->unsigned()->nullable();
            $table->boolean('first_delete')->default(false);
            $table->string('image')->nullable();
            $table->integer('cart_id')->unsigned();
            $table->integer('server_id')->unsigned();
            $table->integer('amount')->unsigned()->default(1);
            $table->timestamps();
        });

        Schema::table('cart_product', function (Blueprint $table) {
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('cart_product', function (Blueprint $table) {
            $table->dropForeign(['cart_id']);
        });

        Schema::dropIfExists('cart_product');
    }
}
