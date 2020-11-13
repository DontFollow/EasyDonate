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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/shop_item.htm */
class __TwigTemplate_dfdb7c72f54e6235013e07a040c287caa337240c089114769e10e9ad010290aa extends \Twig\Template
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
        echo "<div class=\"profile-card\" id=\"product-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"card mt-3 shadow-dark border-0 bg-elegant animate-up-2\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "zest", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <div class=\"sale\">
                ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale", [], "any", false, false, false, 5)) {
                // line 6
                echo "                    <div class=\"sale__size\">-";
                echo twig_escape_filter($this->env, twig_round((((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 6) - twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cost", [], "any", false, false, false, 6)) / twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 6)) * 100)), "html", null, true);
                echo "%</div>
                ";
            }
            // line 8
            echo "                <div class=\"sale__timer\">
                    <div class=\"text\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "zest", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
                </div>                     
            </div>
        ";
        }
        // line 13
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "has", [0 => ($context["product"] ?? null)], "method", false, false, false, 13)) {
            // line 14
            echo "            <a
                class=\"mr-2 mt-1\"
                data-toggle=\"tooltip\"
                data-request=\"onRemove\"
                data-request-data=\"product_id: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                data-request-update=\"shop_item: '#product-";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "', cart_counter: '.cart-counter', cart_products: '.cart-products', cart_cost: '.cart-cost'\"
                data-request-loading
                data-request-flash
                style=\"position: absolute; top: 10px; right: 10px; z-index: 10\">
                <span class=\"btn-inner-icon text-danger\"><i class=\"fas fa-trash\"></i></span>
            </a>
        ";
        } else {
            // line 26
            echo "            <a
                class=\"mr-2 mt-1\"
                data-toggle=\"tooltip\"
                data-request=\"onAdd\"
                data-request-data=\"product_id: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"
                data-request-update=\"shop_item: '#product-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "', cart_counter: '.cart-counter', cart_products: '.cart-products', cart_cost: '.cart-cost'\"
                data-request-loading
                data-request-flash
                style=\"position: absolute; top: 10px; right: 10px; z-index: 10\">
                <span class=\"btn-inner-icon text-success\"><i class=\"fas fa-cart-arrow-down\"></i></span>
            </a>
        ";
        }
        // line 38
        echo "        <a data-toggle=\"modal\" data-target=\"#product\" data-product-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
            <div class=\"row align-items-center\">
                <div class=\"col-sm-5\">
                    <div class=\"card-image text-center p-2 bg-elegant-night position-relative\" style=\"height: 180px\">
                        <span class=\"shop-image-block\">
                            <img class=\"img-fluid img-center\" width=\"156\" src=\"";
        // line 43
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 43));
        echo "\">
                        </span>
                    </div>
                </div>
                <div class=\"col-sm-7\">
                    <div class=\"card-body p-4\">
                        <span class=\"badge badge-md bg-elegant font-weight-bolder text-uppercase badge-active animate-up-2\">
                            <i class=\"fas fa-tag mr-2 text-gray\"></i>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "
                        </span>
                        <h3 class=\"card-title font-weight-bolder\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 52), "html", null, true);
        echo "</h3>
                        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale", [], "any", false, false, false, 53)) {
            // line 54
            echo "                            <p class=\"text-through text-small text-muted mb-0\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 54), 2, ".", ""), "html", null, true);
            echo " руб.</p>
                        ";
        }
        // line 56
        echo "                        <h6 class=\"my-0 font-weight-bold\">
                            ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cost", [], "any", false, false, false, 57), 2, ".", ""), "html", null, true);
        echo " руб. / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "number", [], "any", false, false, false, 57), "html", null, true);
        echo " шт.
                        </h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/shop_item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  145 => 56,  139 => 54,  137 => 53,  133 => 52,  128 => 50,  118 => 43,  109 => 38,  99 => 31,  95 => 30,  89 => 26,  79 => 19,  75 => 18,  69 => 14,  66 => 13,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"profile-card\" id=\"product-{{ product.id }}\">
    <div class=\"card mt-3 shadow-dark border-0 bg-elegant animate-up-2\">
        {% if product.zest %}
            <div class=\"sale\">
                {% if product.sale %}
                    <div class=\"sale__size\">-{{ ((product.price - product.cost) / product.price * 100) | round }}%</div>
                {% endif %}
                <div class=\"sale__timer\">
                    <div class=\"text\">{{ product.zest }}</div>
                </div>                     
            </div>
        {% endif %}
        {% if cart.has(product) %}
            <a
                class=\"mr-2 mt-1\"
                data-toggle=\"tooltip\"
                data-request=\"onRemove\"
                data-request-data=\"product_id: {{ product.id }}\"
                data-request-update=\"shop_item: '#product-{{ product.id }}', cart_counter: '.cart-counter', cart_products: '.cart-products', cart_cost: '.cart-cost'\"
                data-request-loading
                data-request-flash
                style=\"position: absolute; top: 10px; right: 10px; z-index: 10\">
                <span class=\"btn-inner-icon text-danger\"><i class=\"fas fa-trash\"></i></span>
            </a>
        {% else %}
            <a
                class=\"mr-2 mt-1\"
                data-toggle=\"tooltip\"
                data-request=\"onAdd\"
                data-request-data=\"product_id: {{ product.id }}\"
                data-request-update=\"shop_item: '#product-{{ product.id }}', cart_counter: '.cart-counter', cart_products: '.cart-products', cart_cost: '.cart-cost'\"
                data-request-loading
                data-request-flash
                style=\"position: absolute; top: 10px; right: 10px; z-index: 10\">
                <span class=\"btn-inner-icon text-success\"><i class=\"fas fa-cart-arrow-down\"></i></span>
            </a>
        {% endif %}
        <a data-toggle=\"modal\" data-target=\"#product\" data-product-id=\"{{ product.id }}\">
            <div class=\"row align-items-center\">
                <div class=\"col-sm-5\">
                    <div class=\"card-image text-center p-2 bg-elegant-night position-relative\" style=\"height: 180px\">
                        <span class=\"shop-image-block\">
                            <img class=\"img-fluid img-center\" width=\"156\" src=\"{{ product.image | media }}\">
                        </span>
                    </div>
                </div>
                <div class=\"col-sm-7\">
                    <div class=\"card-body p-4\">
                        <span class=\"badge badge-md bg-elegant font-weight-bolder text-uppercase badge-active animate-up-2\">
                            <i class=\"fas fa-tag mr-2 text-gray\"></i>{{ product.category.name }}
                        </span>
                        <h3 class=\"card-title font-weight-bolder\">{{ product.title }}</h3>
                        {% if product.sale %}
                            <p class=\"text-through text-small text-muted mb-0\">{{ product.price | number_format(2, '.', '') }} руб.</p>
                        {% endif %}
                        <h6 class=\"my-0 font-weight-bold\">
                            {{ product.cost | number_format(2, '.', '') }} руб. / {{ product.number }} шт.
                        </h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/shop_item.htm", "");
    }
}
