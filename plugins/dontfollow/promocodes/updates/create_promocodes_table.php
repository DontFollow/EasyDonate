<?php namespace DontFollow\Promocodes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePromocodesTable extends Migration
{
    public function up()
    {
        Schema::create('promocodes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('code')->unique();
            $table->double('sale')->default(10)->unsigned();
            $table->integer('limit')->nullable()->unsigned();
            $table->text('products')->nullable();
            $table->text('product_types')->nullable();
            $table->text('servers')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promocodes');
    }
}
