<?php namespace DontFollow\Products\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductServerTable extends Migration
{
    public function up()
    {
        Schema::create('product_server', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('product_id')->unsigned();
            $table->integer('server_id')->unsigned();
            $table->primary(['product_id', 'server_id']);
        });

        Schema::table('product_server', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('server_id')->references('id')->on('servers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_server');
    }
}
