<?php namespace DontFollow\Shop\Classes;

use Exception;
use Thedudeguy\Rcon;
use ApplicationException;
use DontFollow\Shop\Models\Cart;
use DontFollow\Products\Models\Product;
use DontFollow\Products\Models\Settings;

class Delivery
{
    private $cart;
    private $rcon;
    private $payment;

    public function __construct($payment, $timeout = 3)
    {
        $this->cart = Cart::instance();
        $this->payment = $payment;
        $this->rcon = new Rcon(
            $payment->server->ip,
            $payment->server->rcon_port,
            $payment->server->rcon_password,
            $timeout
        );

        try {
            $this->rcon->connect();
        } catch (Exception $e) {
            throw new ApplicationException('Не удалось установить соединение с сервером.');
        }
    }

    public function deliver()
    {
        $this->payment->products->each(function ($product) {
            if (method_exists($this, $product->type) && call_user_func([$this, $product->type], $product)) {
                if ($product->first_delete) {
                    Product::whereId($product->product_id)->delete();
                }

                return true;
            }

            return false;
        });

        return $this->cart->flush();
    }

    private function item($product)
    {
        if (!$product->minecraft_id) {
            return false;
        }

        $command = str_replace([
            '{user}',
            '{item}',
            '{amount}'
        ], [
            $this->payment->customer,
            $product->minecraft_id,
            $product->count
        ], Settings::get('command_item', 'give {user} {item} {amount}'));

        try {
            $this->rcon->sendCommand($command);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    private function group($product)
    {
        if (!$product->group_lifetime || !$product->minecraft_id) {
            return false;
        }

        $lifetime = $product->group_lifetime;
        switch ($product->group_temp_modifier) {
            case 'm':
                $lifetime *= 60;
                break;
            case 'h':
                $lifetime *= 3600;
                break;
            case 'd':
                $lifetime *= 86400;
                break;
            case 'mo':
                $lifetime *= 2592000;
                break;
        }

        $command = str_replace([
            '{user}',
            '{group}',
            '{lifetime}'
        ], [
            $this->payment->customer,
            $product->minecraft_id,
            $lifetime
        ], Settings::get('command_group', 'lp user {user} parent addtemp {group} {lifetime}'));

        try {
            $this->rcon->sendCommand($command);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    private function case($product)
    {
        if (!$product->case_type || !$product->case_content) {
            return false;
        }

        $command = str_replace([
            '{type}',
            '{content}',
            '{amount}',
            '{user}'
        ], [
            $product->case_type,
            $product->case_content,
            $product->count,
            $this->payment->customer
        ], Settings::get('command_case', 'cc give {type} {content} {amount} {user}'));

        try {
            $this->rcon->sendCommand($command);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    private function coin($product)
    {
        $command = str_replace([
            '{user}',
            '{amount}'
        ], [
            $this->payment->customer,
            $product->count
        ], Settings::get('command_coin', 'eco give {user} {amount}'));

        try {
            $this->rcon->sendCommand($command);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    private function other($product)
    {
        if (!$product->force_commands) {
            return false;
        }

        foreach ($product->force_commands as $force_command) {
            $command = str_replace([
                '{user}',
                '{amount}'
            ], [
                $this->payment->customer,
                $product->count
            ], $force_command['command']);

            try {
                $this->rcon->sendCommand($command);
            } catch (Exception $e) {
                return false;
            }
        }

        return true;
    }
}
