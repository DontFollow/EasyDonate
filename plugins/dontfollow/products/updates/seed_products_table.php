<?php namespace DontFollow\Obsidian\Updates;

use DontFollow\Servers\Models\Server;
use DontFollow\Products\Models\Product;
use DontFollow\Products\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedProductsTable extends Seeder
{
    public function run()
    {
        $product = Product::create([
            'title' => 'Алмазный меч',
            'description' => 'Самое мощное оружие в игре',
            'short_description' => 'Блестит...',
            'minecraft_id' => 'minecraft:diamondsword',
            'number' => 1,
            'type' => 'item',
            'price' => 10,
            'sale' => 0,
            'category_id' => 1,
            'first_delete' => false
        ]);
    }
}
