<?php namespace DontFollow\EasyDonate\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use DontFollow\Products\Models\Product;

class Products extends ReportWidgetBase
{
    public function defineProperties()
    {
        return [
            'title' => [
                'title'   => 'Информация о товарах',
                'default' => 'Информация о товарах'
            ]
        ];
    }

    public function render()
    {
        $products = Product::all();
        if (!$products) {
            return false;
        }

        $products = $products->toArray();

        return $this->makePartial('products', [
            'items' => array_where($products, function ($value) { return $value['type'] === 'item'; }),
            'groups' => array_where($products, function ($value) { return $value['type'] === 'group'; }),
            'coins' => array_where($products, function ($value) { return $value['type'] === 'coin'; }),
            'boxes' => array_where($products, function ($value) { return $value['type'] === 'box'; }),
            'others' => array_where($products, function ($value) { return $value['type'] === 'other'; }),
            'overallCost' => array_sum(array_pluck($products, 'price')),
            'overallSaleCost' => array_sum(array_pluck($products, 'cost')),
            'products' => $products
        ]);
    }
}
