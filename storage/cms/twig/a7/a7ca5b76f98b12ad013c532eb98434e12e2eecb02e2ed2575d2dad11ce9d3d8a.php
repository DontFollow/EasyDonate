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

/* /var/www/demo.easydonate.ru/plugins/dontfollow/promocodes/components/partials/promocode_field.htm */
class __TwigTemplate_acf367461d714929cbc23e81b8c964d587d9ad267cee09ee493dbb473f9a79cb extends \Twig\Template
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
        echo "<div class=\"form-group col-12 focused\">
    <div class=\"input-group\">
        <div class=\"input-group-prepend\">
            <span class=\"input-group-text border-0 bg-elegant-dark text-dark\">
                <i class=\"fas fa-code\"></i>
            </span>
        </div>
        <input
            class=\"form-control border-0 bg-elegant-dark pl-2\"
            placeholder=\"Промокод\"
            type=\"text\"
            name=\"code\"
            data-request=\"onAcceptPromocode\"
            data-request-update=\"cart_products: '.cart-products', cart_cost: '.cart-cost'\"
            data-track-input
            data-request-flash>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/plugins/dontfollow/promocodes/components/partials/promocode_field.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group col-12 focused\">
    <div class=\"input-group\">
        <div class=\"input-group-prepend\">
            <span class=\"input-group-text border-0 bg-elegant-dark text-dark\">
                <i class=\"fas fa-code\"></i>
            </span>
        </div>
        <input
            class=\"form-control border-0 bg-elegant-dark pl-2\"
            placeholder=\"Промокод\"
            type=\"text\"
            name=\"code\"
            data-request=\"onAcceptPromocode\"
            data-request-update=\"cart_products: '.cart-products', cart_cost: '.cart-cost'\"
            data-track-input
            data-request-flash>
    </div>
</div>
", "/var/www/demo.easydonate.ru/plugins/dontfollow/promocodes/components/partials/promocode_field.htm", "");
    }
}
