<?php namespace DontFollow\Promocodes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsernamePromocodeTable extends Migration
{
    public function up()
    {
        Schema::create('username_promocode', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username')->index();
            $table->integer('promocode_id')->unsigned();
            $table->integer('uses')->default(0)->unsigned();
            $table->timestamps();
        });

        Schema::table('username_promocode', function (Blueprint $table) {
            $table->foreign('promocode_id')->references('id')->on('promocodes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('username_promocode');
    }
}
