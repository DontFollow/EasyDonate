<?php namespace DontFollow\Servers\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServersTable extends Migration
{
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->index()->unique();
            $table->ipAddress('ip')->default('127.0.0.1');
            $table->integer('port')->default(25565);
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->integer('rcon_port')->default(25566);
            $table->string('rcon_password');
        });
    }

    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
