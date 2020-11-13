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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/product.htm */
class __TwigTemplate_80d18e98b2312952fa8a7eae0b1c563d9b4da62eb4e93c8538cf27434a185f00 extends \Twig\Template
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
        echo "<div class=\"modal-header bg-elegant-night border-0\">
    <h6 class=\"modal-title text-white mb-0\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "</h6>
    <button style=\"padding: 0.95rem\" type=\"button\" class=\"close ml-auto\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\" class=\"text-white\">×</span>
    </button>
</div>
<div class=\"modal-body text-white\">
    <span class=\"badge badge-md bg-elegant-dark font-weight-bold text-uppercase\">
        <i class=\"fas fa-tag mr-2 text-gray\"></i>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "
    </span>
    <div class=\"py-3 text-center\">
        <div class=\"card-image text-center p-2\">
            <img class=\"img-fluid fw-200\" width=\"156\" src=\"";
        // line 13
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 13));
        echo "\">
        </div>
        <h3 class=\"modal-title mt-3\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</h3>
        <div class=\"mt-2\">
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <p class=\"text-through text-small text-muted mb-0\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 18), 2, ".", ""), "html", null, true);
            echo " руб.</p>
            ";
        }
        // line 20
        echo "            <h5 class=\"mb-0 font-weight-bolder\">
                ";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cost", [], "any", false, false, false, 21), 2, ".", ""), "html", null, true);
        echo " руб. / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "number", [], "any", false, false, false, 21), "html", null, true);
        echo " шт.
            </h5>
        </div>
    </div>
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "short_description", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <div class=\"my-3 text-underline\">
            ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "short_description", [], "any", false, false, false, 27);
            echo "
        </div>
    ";
        }
        // line 30
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"my-3\">
            ";
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 32);
            echo "
        </div>
    ";
        }
        // line 35
        echo "</div>
<div class=\"modal-footer bg-elegant-night d-flex justify-content-center border-0\">
    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "has", [0 => ($context["product"] ?? null)], "method", false, false, false, 37)) {
            // line 38
            echo "        <button
            class=\"btn btn-icon btn-danger animate-up-2\"
            type=\"button\"
            data-request=\"onRemove\"
            data-request-data=\"product_id: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\"
            data-request-update=\"shop_item: '#product-";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
            echo "', cart_counter: '.cart-counter', product: '.product-modal', cart_cost: '.cart-cost', cart_products: '.cart-products'\"
            data-request-loading
            data-request-flash>
            <span class=\"btn-inner-icon\"><i class=\"fas fa-times\"></i></span>
            <span class=\"btn-inner-text\">Убрать из корзины</span>
        </button>
        <button class=\"btn btn-icon btn-secondary animate-up-2\" data-toggle=\"modal\" data-target=\"#cart\">
            <span class=\"btn-inner-icon\"><i class=\"fas fa-shopping-basket\"></i></span>
            <span class=\"btn-inner-text\">Открыть корзину</span>
        </button>
    ";
        } else {
            // line 54
            echo "        <button
            class=\"btn btn-icon btn-secondary animate-up-2\"
            type=\"button\"
            data-request=\"onAdd\"
            data-request-data=\"product_id: ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
            data-request-update=\"shop_item: '#product-";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "', cart_counter: '.cart-counter', product: '.product-modal', cart_cost: '.cart-cost', cart_products: '.cart-products'\"
            data-request-loading
            data-request-flash>
            <span class=\"btn-inner-icon\"><i class=\"fas fa-cart-plus\"></i></span>
            <span class=\"btn-inner-text\">Добавить в корзину</span>
        </button>
    ";
        }
        // line 66
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  150 => 59,  146 => 58,  140 => 54,  126 => 43,  122 => 42,  116 => 38,  114 => 37,  110 => 35,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  89 => 26,  87 => 25,  78 => 21,  75 => 20,  69 => 18,  67 => 17,  62 => 15,  57 => 13,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header bg-elegant-night border-0\">
    <h6 class=\"modal-title text-white mb-0\">{{ product.title }}</h6>
    <button style=\"padding: 0.95rem\" type=\"button\" class=\"close ml-auto\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\" class=\"text-white\">×</span>
    </button>
</div>
<div class=\"modal-body text-white\">
    <span class=\"badge badge-md bg-elegant-dark font-weight-bold text-uppercase\">
        <i class=\"fas fa-tag mr-2 text-gray\"></i>{{ product.category.name }}
    </span>
    <div class=\"py-3 text-center\">
        <div class=\"card-image text-center p-2\">
            <img class=\"img-fluid fw-200\" width=\"156\" src=\"{{ product.image | media }}\">
        </div>
        <h3 class=\"modal-title mt-3\">{{ product.title }}</h3>
        <div class=\"mt-2\">
            {% if product.sale %}
                <p class=\"text-through text-small text-muted mb-0\">{{ product.price | number_format(2, '.', '') }} руб.</p>
            {% endif %}
            <h5 class=\"mb-0 font-weight-bolder\">
                {{ product.cost | number_format(2, '.', '') }} руб. / {{ product.number }} шт.
            </h5>
        </div>
    </div>
    {% if product.short_description %}
        <div class=\"my-3 text-underline\">
            {{ product.short_description | raw }}
        </div>
    {% endif %}
    {% if product.description %}
        <div class=\"my-3\">
            {{ product.description | raw }}
        </div>
    {% endif %}
</div>
<div class=\"modal-footer bg-elegant-night d-flex justify-content-center border-0\">
    {% if cart.has(product) %}
        <button
            class=\"btn btn-icon btn-danger animate-up-2\"
            type=\"button\"
            data-request=\"onRemove\"
            data-request-data=\"product_id: {{ product.id }}\"
            data-request-update=\"shop_item: '#product-{{ product.id }}', cart_counter: '.cart-counter', product: '.product-modal', cart_cost: '.cart-cost', cart_products: '.cart-products'\"
            data-request-loading
            data-request-flash>
            <span class=\"btn-inner-icon\"><i class=\"fas fa-times\"></i></span>
            <span class=\"btn-inner-text\">Убрать из корзины</span>
        </button>
        <button class=\"btn btn-icon btn-secondary animate-up-2\" data-toggle=\"modal\" data-target=\"#cart\">
            <span class=\"btn-inner-icon\"><i class=\"fas fa-shopping-basket\"></i></span>
            <span class=\"btn-inner-text\">Открыть корзину</span>
        </button>
    {% else %}
        <button
            class=\"btn btn-icon btn-secondary animate-up-2\"
            type=\"button\"
            data-request=\"onAdd\"
            data-request-data=\"product_id: {{ product.id }}\"
            data-request-update=\"shop_item: '#product-{{ product.id }}', cart_counter: '.cart-counter', product: '.product-modal', cart_cost: '.cart-cost', cart_products: '.cart-products'\"
            data-request-loading
            data-request-flash>
            <span class=\"btn-inner-icon\"><i class=\"fas fa-cart-plus\"></i></span>
            <span class=\"btn-inner-text\">Добавить в корзину</span>
        </button>
    {% endif %}
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/product.htm", "");
    }
}
