<?php namespace DontFollow\Servers\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddServersIsPortHiddenColumn extends Migration
{
    public function up()
    {
        Schema::table('servers', function (Blueprint $table) {
            $table->boolean('is_port_hidden')->default(false);
        });
    }

    public function down()
    {
        Schema::table('server', function (Blueprint  $table) {
            $table->dropColumn('is_port_hidden');
        });
    }
}
