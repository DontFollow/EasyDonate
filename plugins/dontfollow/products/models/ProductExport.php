<?php namespace DontFollow\Products\Models;

use Backend\Models\ExportModel;

class ProductExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $products = Product::all();
        $products->each(function($product) use ($columns) {
            foreach ($columns as $column) {
                if (is_array($product->{$column})) {
                    $product->{$column} = json_encode($product->{$column}, JSON_UNESCAPED_UNICODE);
                }
            }
            
            $product->addVisible($columns);
        });
        return $products->toArray();
    }
}
