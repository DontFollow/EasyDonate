<?php namespace DontFollow\Payments\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePaymentProductTable extends Migration
{
    public function up()
    {
        Schema::create('payment_product', function (Blueprint $table) {
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
            $table->boolean('first_delete')->default(false);
            $table->string('image')->nullable();
            $table->integer('payment_id')->unsigned();
            $table->integer('amount')->unsigned()->default(1);
            $table->timestamps();
        });

        Schema::table('payment_product', function (Blueprint $table) {
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_product');
    }
}
