<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/demo.easydonate.ru/plugins/dontfollow/payments/components/partials/unitpay.htm */
class __TwigTemplate_f5e6103421d616e98be24f0d3a49d4c274f697f0f46caff786c7d4392f292403 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script type=\"text/javascript\">
    function pay(publicKey, account, signature, sum = 0, desc = 'Покупка товаров', locale = 'ru', currency = 'RUB') {
        var payment = new UnitPay();
        payment.createWidget({
            publicKey: publicKey,
            account: account,
            signature: signature,
            sum: sum,
            desc: desc,
            locale: locale,
            currency: currency
        });
        payment.success(function (params) {
            \$.request('Shop::onFlush', {
                update: {
                    cart_counter: '.cart-counter',
                    shop: '.shop',
                    cart_products: '.cart-products',
                    cart_cost: '.cart-cost'
                }
            });
        });
        payment.error(function (message, params) {
            console.log(message);
        });
        return false;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/plugins/dontfollow/payments/components/partials/unitpay.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    function pay(publicKey, account, signature, sum = 0, desc = 'Покупка товаров', locale = 'ru', currency = 'RUB') {
        var payment = new UnitPay();
        payment.createWidget({
            publicKey: publicKey,
            account: account,
            signature: signature,
            sum: sum,
            desc: desc,
            locale: locale,
            currency: currency
        });
        payment.success(function (params) {
            \$.request('Shop::onFlush', {
                update: {
                    cart_counter: '.cart-counter',
                    shop: '.shop',
                    cart_products: '.cart-products',
                    cart_cost: '.cart-cost'
                }
            });
        });
        payment.error(function (message, params) {
            console.log(message);
        });
        return false;
    };
</script>
", "/var/www/demo.easydonate.ru/plugins/dontfollow/payments/components/partials/unitpay.htm", "");
    }
}
