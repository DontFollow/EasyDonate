<?php namespace DontFollow\Products\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateCartProductAddZestColumn extends Migration
{
    public function up()
    {
        Schema::table('cart_product', function (Blueprint $table) {
            $table->string('zest')->nullable();
        });
    }

    public function down()
    {
        Schema::table('cart_product', function (Blueprint $table) {
            $table->dropColumn('zest');
        });
    }
}
