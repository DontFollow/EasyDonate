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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_products.htm */
class __TwigTemplate_655fb37768ad434c887974107aef82c46b59415d1c90439a795ad92dc87be47c extends \Twig\Template
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
        echo "<div class=\"col-md-12\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product'] = $context["product"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart_item"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 5
            echo "        <div class=\"text-center text-uppercase\">
            <i class=\"fas fa-cogs text-light fa-3x\"></i>
            <p class=\"text-white text-small mb-0 mt-2\">Корзина пуста</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  56 => 5,  51 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-12\">
    {% for product in cart.products %}
        {% partial 'cart_item' product = product %}
    {% else %}
        <div class=\"text-center text-uppercase\">
            <i class=\"fas fa-cogs text-light fa-3x\"></i>
            <p class=\"text-white text-small mb-0 mt-2\">Корзина пуста</p>
        </div>
    {% endfor %}
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_products.htm", "");
    }
}
