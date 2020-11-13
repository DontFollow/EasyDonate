<?php namespace DontFollow\Surcharge;

use Event;
use Session;
use Carbon\Carbon;
use System\Classes\PluginBase;
use DontFollow\Products\Models\Product;
use DontFollow\Payments\Models\Payment;

/**
 * Surcharge Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Доплата',
            'description' => 'Плагин доплаты.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Product::extend(function($product) {
            $product->bindEvent('model.afterFetch', function() use ($product) {
                if ($product->type !== 'group') {
                    return false;
                }

                $username = Session::get('username', false);
                if (!$username) {
                    return false;
                }

                $targets = collect([]);
                $payments = Payment::whereCustomer($username)->whereStatus(2)->get();
                $payments->each(function ($payment) use ($product, &$targets) {
                    $payment->products->each(function ($target) use ($payment, $product, &$targets) {
                        if ($target->type !== 'group' || $target->product_id === $product->id) {
                            return false;
                        }

                        if ($target->cost >= $product->cost) {
                            return false;
                        }

                        $subseconds = $target->group_lifetime;
                        switch ($target->group_temp_modifier) {
                            case 'm':
                                $subseconds *= 60;
                                break;
                            case 'h':
                                $subseconds *= 3600;
                                break;
                            case 'd':
                                $subseconds *= 86400;
                                break;
                            case 'mo':
                                $subseconds *= 2592000;
                                break;
                        }

                        if (Carbon::now()->subSeconds($subseconds)->gte($payment->updated_at)) {
                            return false;
                        }

                        $targets->push($target);
                    });
                });

                if ($targets->count() > 0) {
                    $product->sale += $targets->max('cost');
                    $product->zest = 'Доплата';
                }
            });
        });

        Event::listen('shop.before.checkout', function (&$cart) {
            $cart->products->each(function ($product) {
                if ($product->zest === 'Доплата') {
                    return false;
                }

                if ($product->type !== 'group') {
                    return false;
                }

                $username = Session::get('username', false);
                if (!$username) {
                    return false;
                }

                $targets = collect([]);
                $payments = Payment::whereCustomer($username)->whereStatus(2)->get();
                $payments->each(function ($payment) use ($product, &$targets) {
                    $payment->products->each(function ($target) use ($payment, $product, &$targets) {
                        if ($target->type !== 'group' || $target->product_id === $product->id) {
                            return false;
                        }

                        if ($target->cost >= $product->cost) {
                            return false;
                        }

                        $subseconds = $target->group_lifetime;
                        switch ($target->group_temp_modifier) {
                            case 'm':
                                $subseconds *= 60;
                                break;
                            case 'h':
                                $subseconds *= 3600;
                                break;
                            case 'd':
                                $subseconds *= 86400;
                                break;
                            case 'mo':
                                $subseconds *= 2592000;
                                break;
                        }

                        if (Carbon::now()->subSeconds($subseconds)->gte($payment->updated_at)) {
                            return false;
                        }

                        $targets->push($target);
                    });
                });

                if ($targets->count() > 0) {
                    $product->sale += $targets->max('cost');
                    $product->zest = 'Доплата';
                    $product->save();
                }
            });
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'DontFollow\Surcharge\Components\Surcharge' => 'Surcharge',
        ];
    }
}
