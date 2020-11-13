<?php

Route::any('/api/get/products', function () {
    return DontFollow\Products\Models\Product::with('category')->with('servers')->get();
});
