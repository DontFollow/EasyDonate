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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_item.htm */
class __TwigTemplate_364a3f9ff00c7a47d4e229dc4d54ec935708d1c4fb48f7190822f5c5455cf1b9 extends \Twig\Template
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
        echo "<div class=\"profile-card\" id=\"cart-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"card bg-elegant-dark border-0\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-3 px-0 my-auto\">
                    <div class=\"card-image text-center\">
                        <img class=\"img-fluid img-center shop-basket-image\" src=\"";
        // line 7
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 7));
        echo "\">
                    </div>
                </div>
                <div class=\"col-9 px-3 my-auto\">
                    <div class=\"card-body p-2 text-white\">
                        <h5 class=\"card-title mb-3 font-weight-bolder\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                        <h6 class=\"font-weight-bolder basket-pricelist-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
                            ";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cost", [], "any", false, false, false, 14), 2, ".", ""), "html", null, true);
        echo "<i class=\"fas fa-ruble-sign mx-1\"></i>";
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 14), [0 => "group", 1 => "other"])) {
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "count", [], "any", false, false, false, 14), "html", null, true);
            echo " шт.";
        }
        // line 15
        echo "                        </h6>
                        <div class=\"mt-3\">
                            <button
                                class=\"btn mb-2 mr-2 btn-danger animate-up-2\"
                                type=\"button\"
                                data-request=\"onRemove\"
                                data-request-data=\"product_id: '";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 21), "html", null, true);
        echo "', server_id: '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "'\"
                                data-request-update=\"cart_cost: '.cart-cost', cart_products: '.cart-products', shop_item: '#product-";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 22), "html", null, true);
        echo "'\"
                                data-request-flash>
                                <i class=\"fas fa-trash fa-xs\"></i>
                            </button>
                            ";
        // line 26
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 26), [0 => "group", 1 => "other"])) {
            // line 27
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "count", [], "any", false, false, false, 27) > twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "number", [], "any", false, false, false, 27))) {
                // line 28
                echo "                                    <button
                                        class=\"btn mb-2 mr-2 bg-elegant animate-up-2\"
                                        type=\"button\"
                                        data-request=\"onDecrease\"
                                        data-request-data=\"product_id: '";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 32), "html", null, true);
                echo "', server_id: '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["chosenServer"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
                echo "'\"
                                        data-request-update=\"cart_cost: '.cart-cost', cart_item: '#cart-";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 33), "html", null, true);
                echo "'\"
                                        data-request-flash>
                                        <i class=\"fas fa-minus fa-xs\"></i>
                                    </button>
                                ";
            } else {
                // line 38
                echo "                                    <button
                                        class=\"btn mb-2 mr-2 btn-light disabled\"
                                        style=\"cursor: not-allowed\"
                                        type=\"button\">
                                        <i class=\"fas fa-minus fa-xs\"></i>
                                    </button>
                                ";
            }
            // line 45
            echo "                                <button
                                    class=\"btn mb-2 mr-2 bg-elegant animate-up-2\"
                                    type=\"button\"
                                    data-request=\"onIncrease\"
                                    data-request-data=\"product_id: '";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 49), "html", null, true);
            echo "'\"
                                    data-request-update=\"cart_cost: '.cart-cost', cart_item: '#cart-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 50), "html", null, true);
            echo "'\"
                                    data-request-flash>
                                    <i class=\"fas fa-plus fa-xs\"></i>
                                </button>
                            ";
        } else {
            // line 55
            echo "                                <button
                                    class=\"btn mb-2 mr-2 btn-light disabled\"
                                    style=\"cursor: not-allowed\"
                                    type=\"button\">
                                    <i class=\"fas fa-minus fa-xs\"></i>
                                </button>
                                <button
                                    class=\"btn mb-2 mr-2 btn-light disabled\"
                                    style=\"cursor: not-allowed\"
                                    type=\"button\">
                                    <i class=\"fas fa-plus fa-xs\"></i>
                                </button>
                            ";
        }
        // line 68
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 68,  144 => 55,  136 => 50,  132 => 49,  126 => 45,  117 => 38,  109 => 33,  103 => 32,  97 => 28,  94 => 27,  92 => 26,  85 => 22,  79 => 21,  71 => 15,  63 => 14,  59 => 13,  55 => 12,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"profile-card\" id=\"cart-{{ product.product_id }}\">
    <div class=\"card bg-elegant-dark border-0\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-3 px-0 my-auto\">
                    <div class=\"card-image text-center\">
                        <img class=\"img-fluid img-center shop-basket-image\" src=\"{{ product.image | media }}\">
                    </div>
                </div>
                <div class=\"col-9 px-3 my-auto\">
                    <div class=\"card-body p-2 text-white\">
                        <h5 class=\"card-title mb-3 font-weight-bolder\">{{ product.title }}</h5>
                        <h6 class=\"font-weight-bolder basket-pricelist-{{ product.product_id }}\">
                            {{ product.cost | number_format(2, '.', '') }}<i class=\"fas fa-ruble-sign mx-1\"></i>{% if product.type not in ['group', 'other'] %} / {{ product.count }} шт.{% endif %}
                        </h6>
                        <div class=\"mt-3\">
                            <button
                                class=\"btn mb-2 mr-2 btn-danger animate-up-2\"
                                type=\"button\"
                                data-request=\"onRemove\"
                                data-request-data=\"product_id: '{{ product.product_id }}', server_id: '{{ server.id }}'\"
                                data-request-update=\"cart_cost: '.cart-cost', cart_products: '.cart-products', shop_item: '#product-{{ product.product_id }}'\"
                                data-request-flash>
                                <i class=\"fas fa-trash fa-xs\"></i>
                            </button>
                            {% if product.type not in ['group', 'other'] %}
                                {% if product.count > product.number %}
                                    <button
                                        class=\"btn mb-2 mr-2 bg-elegant animate-up-2\"
                                        type=\"button\"
                                        data-request=\"onDecrease\"
                                        data-request-data=\"product_id: '{{ product.product_id }}', server_id: '{{ chosenServer.id }}'\"
                                        data-request-update=\"cart_cost: '.cart-cost', cart_item: '#cart-{{ product.product_id }}'\"
                                        data-request-flash>
                                        <i class=\"fas fa-minus fa-xs\"></i>
                                    </button>
                                {% else %}
                                    <button
                                        class=\"btn mb-2 mr-2 btn-light disabled\"
                                        style=\"cursor: not-allowed\"
                                        type=\"button\">
                                        <i class=\"fas fa-minus fa-xs\"></i>
                                    </button>
                                {% endif %}
                                <button
                                    class=\"btn mb-2 mr-2 bg-elegant animate-up-2\"
                                    type=\"button\"
                                    data-request=\"onIncrease\"
                                    data-request-data=\"product_id: '{{ product.product_id }}'\"
                                    data-request-update=\"cart_cost: '.cart-cost', cart_item: '#cart-{{ product.product_id }}'\"
                                    data-request-flash>
                                    <i class=\"fas fa-plus fa-xs\"></i>
                                </button>
                            {% else %}
                                <button
                                    class=\"btn mb-2 mr-2 btn-light disabled\"
                                    style=\"cursor: not-allowed\"
                                    type=\"button\">
                                    <i class=\"fas fa-minus fa-xs\"></i>
                                </button>
                                <button
                                    class=\"btn mb-2 mr-2 btn-light disabled\"
                                    style=\"cursor: not-allowed\"
                                    type=\"button\">
                                    <i class=\"fas fa-plus fa-xs\"></i>
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_item.htm", "");
    }
}
