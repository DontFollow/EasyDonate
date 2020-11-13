<?php

Route::prefix('api')->group(function () {

    Route::any('payment/unitpay/handler', function () {
        return new DontFollow\Payments\Classes\Handlers\UnitPay;
    });

    Route::any('get/payments', function () {
        return DontFollow\Payments\Models\Payment::with('products')->get();
    });

});
