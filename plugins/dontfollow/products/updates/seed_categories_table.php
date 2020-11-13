<?php namespace DontFollow\Obsidian\Updates;

use DontFollow\Products\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedCategoriesTable extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Предметы'
        ]);
        Category::create([
            'name' => 'Привилегии'
        ]);
        Category::create([
            'name' => 'Кейсы'
        ]);
        Category::create([
            'name' => 'Валюта'
        ]);
        Category::create([
            'name' => 'Другое'
        ]);
    }
}
