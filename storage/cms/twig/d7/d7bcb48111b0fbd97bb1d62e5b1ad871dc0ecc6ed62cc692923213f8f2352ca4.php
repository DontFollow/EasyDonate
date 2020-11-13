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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart.htm */
class __TwigTemplate_77c392c55d046e522eb33b737dc3069a986233a8fafd9ea0d96f66855633d69d extends \Twig\Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row text-white\">
        <div class=\"col-lg-7 bg-elegant-dark\">
            <div class=\"row\">
                <div class=\"col-12 bg-elegant-dark\">
                    <div class=\"m-3 mt-4\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <h3 class=\"h3 font-weight-bolder text-white mb-0\">Корзина</h3>
                                <div class=\"select-server\">";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("select_server"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>
                            </div>
                            <div class=\"col-6 text-right\">
                                <a
                                    data-toggle=\"tooltip\"
                                    data-placement=\"left\"
                                    title=\"Очистить корзину\"
                                    class=\"text-danger\"
                                    data-request=\"onFlush\"
                                    data-request-confirm=\"Вы действительно хотите очистить корзину?\"
                                    data-request-update=\"cart_products: '.cart-products', cart_cost: '.cart-cost', shop: '.shop'\"
                                    data-request-flash>
                                    <i class=\"fas fa-dumpster-fire\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"row my-5 cart-products\">
                            ";
        // line 27
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 27)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart_products"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-12 py-4\">
                    <h5 class=\"h5 ml-3 font-weight-bolder\">
                        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_more_products", [], "any", false, false, false, 33) && ($context["moreProducts"] ?? null))) {
            // line 34
            echo "                            С этими товарами также покупают
                        ";
        } else {
            // line 36
            echo "                            Инструкция по покупке
                        ";
        }
        // line 38
        echo "                    </h3>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["moreProducts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_more_products", [], "any", false, false, false, 39)) {
                // line 40
                echo "                        <div class=\"col-12\">
                            <div class=\"profile-card mb-3\">
                                <div class=\"card bg-elegant-dark border-0\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-4 px-0 my-auto\">
                                            <div class=\"card-image text-center\">
                                                <img class=\"img-fluid shop-basket-image\" src=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 46), "html", null, true);
                echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col-7 px-0 my-auto\">
                                            <div class=\"card-body p-2 text-white\">
                                                <h5 class=\"card-title mb-0\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "</h5>
                                                <h6 class=\"font-weight-bolder basket-pricelist-";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\">
                                                    ";
                // line 53
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['product'] = $context["product"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pricelist"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 54
                echo "                                                </h6>
                                                <div class=\"mt-3\">
                                                    <button
                                                        class=\"btn mb-2 mr-2 btn-success animate-up-2\"
                                                        type=\"button\"
                                                        data-request=\"onPut\"
                                                        data-request-data=\"product_id: '";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "'\"
                                                        data-request-flash>
                                                        <i class=\"fas fa-cart-arrow-down fa-xs\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                        <div class=\"m-3 mt-4\">
                            <p class=\"font-weight-bolder mb-0\">1. Выбор товара</p>
                            <p class=\"mt-0\">Добавьте необходимые товары в корзину и заполните предлагаемую форму.</p>
        
                            <p class=\"font-weight-bolder mb-0\">2. Оплата товара</p>
                            <p class=\"mt-0\">Оплатите товары, добавленные в корзину.</p>
        
                            <p class=\"font-weight-bolder mb-0\">3. Активация</p>
                            <p class=\"mt-0\">После оплаты товары выдаются на выбранном Вами сервере автоматически.</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>
            </div>
        </div>
        
        <div class=\"col-lg-5\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"mx-3 mt-4 mb-4\" style=\"border-bottom: 2px dashed #f4f4f4\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <p class=\"text-uppercase position-absolute\" style=\"bottom: 0\">
                                    <small class=\"font-weight-bolder\">Итого:</small>
                                </p>
                            </div>
                            <div class=\"col-6\">
                                <h2 class=\"text-right font-weight-bolder\">
                                    <span class=\"cart-cost\">";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart_cost"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</span><i class=\"fas fa-ruble-sign ml-2\"></i>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"mx-3\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"alert-warning p-3 mb-3\">
                                    <span class=\"alert-inner--icon\"><i class=\"fas fa-exclamation-circle\"></i></span>
                                    <span class=\"alert-inner--text\">
                                        <strong>Внимание!</strong>
                                        Некоторые товары (например блоки) могут быть выданы только в том случае, если Вы находитесь на сервере.
                                    </span>
                                </div>
                                <p class=\"font-weight-bolder\">Для покупки товара заполните форму.</p>
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 117
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onBuy", ["flash" => true, "update" => "cart_products: '.cart-products', cart_cost: '.cart-cost', shop: '.shop'", "success" => "if (data[\"force\"] === false) return pay(data[\"publicKey\"], data[\"account\"], data[\"signature\"], data[\"sum\"], data[\"desc\"], data[\"locale\"], data[\"currency\"])"]]);
        // line 121
        echo "
                                    <div class=\"form-row form-input-username\" id=\"cart-fields\">
                                        <div class=\"form-group col-12 focused\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text border-0 bg-elegant-dark text-dark\">
                                                        <i class=\"fas fa-user\"></i>
                                                    </span>
                                                </div>
                                                <input
                                                    class=\"form-control border-0 bg-elegant-dark pl-2\"
                                                    placeholder=\"Ник на сервере\"
                                                    type=\"text\"
                                                    name=\"username\"
                                                    ";
        // line 135
        if (($context["username"] ?? null)) {
            // line 136
            echo "                                                        value=\"";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Сохраненный ник\"
                                                        data-placement=\"left\"
                                                    ";
        }
        // line 140
        echo ">
                                            </div>
                                        </div>
                                    </div>
        
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-danger mb-4 animate-right-2\">
                                        Купить на <span class=\"text-underline server\">";
        // line 148
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("selected_server"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</span>
                                    </button>
                                ";
        // line 150
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 150,  252 => 148,  242 => 140,  233 => 136,  231 => 135,  215 => 121,  213 => 117,  190 => 99,  172 => 83,  156 => 72,  138 => 60,  130 => 54,  125 => 53,  121 => 52,  117 => 51,  109 => 46,  101 => 40,  95 => 39,  92 => 38,  88 => 36,  84 => 34,  82 => 33,  75 => 28,  70 => 27,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row text-white\">
        <div class=\"col-lg-7 bg-elegant-dark\">
            <div class=\"row\">
                <div class=\"col-12 bg-elegant-dark\">
                    <div class=\"m-3 mt-4\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <h3 class=\"h3 font-weight-bolder text-white mb-0\">Корзина</h3>
                                <div class=\"select-server\">{% partial 'select_server' %}</div>
                            </div>
                            <div class=\"col-6 text-right\">
                                <a
                                    data-toggle=\"tooltip\"
                                    data-placement=\"left\"
                                    title=\"Очистить корзину\"
                                    class=\"text-danger\"
                                    data-request=\"onFlush\"
                                    data-request-confirm=\"Вы действительно хотите очистить корзину?\"
                                    data-request-update=\"cart_products: '.cart-products', cart_cost: '.cart-cost', shop: '.shop'\"
                                    data-request-flash>
                                    <i class=\"fas fa-dumpster-fire\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"row my-5 cart-products\">
                            {% partial 'cart_products' products = cart.products %}
                        </div>
                    </div>
                </div>
                <div class=\"col-12 py-4\">
                    <h5 class=\"h5 ml-3 font-weight-bolder\">
                        {% if settings.show_more_products and moreProducts %}
                            С этими товарами также покупают
                        {% else %}
                            Инструкция по покупке
                        {% endif %}
                    </h3>
                    {% for product in moreProducts if settings.show_more_products %}
                        <div class=\"col-12\">
                            <div class=\"profile-card mb-3\">
                                <div class=\"card bg-elegant-dark border-0\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-4 px-0 my-auto\">
                                            <div class=\"card-image text-center\">
                                                <img class=\"img-fluid shop-basket-image\" src=\"{{ product.image }}\">
                                            </div>
                                        </div>
                                        <div class=\"col-7 px-0 my-auto\">
                                            <div class=\"card-body p-2 text-white\">
                                                <h5 class=\"card-title mb-0\">{{ product.name }}</h5>
                                                <h6 class=\"font-weight-bolder basket-pricelist-{{ product.id }}\">
                                                    {% partial 'pricelist' product = product %}
                                                </h6>
                                                <div class=\"mt-3\">
                                                    <button
                                                        class=\"btn mb-2 mr-2 btn-success animate-up-2\"
                                                        type=\"button\"
                                                        data-request=\"onPut\"
                                                        data-request-data=\"product_id: '{{ product.id }}'\"
                                                        data-request-flash>
                                                        <i class=\"fas fa-cart-arrow-down fa-xs\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"m-3 mt-4\">
                            <p class=\"font-weight-bolder mb-0\">1. Выбор товара</p>
                            <p class=\"mt-0\">Добавьте необходимые товары в корзину и заполните предлагаемую форму.</p>
        
                            <p class=\"font-weight-bolder mb-0\">2. Оплата товара</p>
                            <p class=\"mt-0\">Оплатите товары, добавленные в корзину.</p>
        
                            <p class=\"font-weight-bolder mb-0\">3. Активация</p>
                            <p class=\"mt-0\">После оплаты товары выдаются на выбранном Вами сервере автоматически.</p>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-5\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"mx-3 mt-4 mb-4\" style=\"border-bottom: 2px dashed #f4f4f4\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <p class=\"text-uppercase position-absolute\" style=\"bottom: 0\">
                                    <small class=\"font-weight-bolder\">Итого:</small>
                                </p>
                            </div>
                            <div class=\"col-6\">
                                <h2 class=\"text-right font-weight-bolder\">
                                    <span class=\"cart-cost\">{% partial 'cart_cost' %}</span><i class=\"fas fa-ruble-sign ml-2\"></i>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"mx-3\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"alert-warning p-3 mb-3\">
                                    <span class=\"alert-inner--icon\"><i class=\"fas fa-exclamation-circle\"></i></span>
                                    <span class=\"alert-inner--text\">
                                        <strong>Внимание!</strong>
                                        Некоторые товары (например блоки) могут быть выданы только в том случае, если Вы находитесь на сервере.
                                    </span>
                                </div>
                                <p class=\"font-weight-bolder\">Для покупки товара заполните форму.</p>
                            </div>
                            <div class=\"col-12\">
                                {{ form_ajax('onBuy', {
                                    flash: true,
                                    update: \"cart_products: '.cart-products', cart_cost: '.cart-cost', shop: '.shop'\",
                                    success: 'if (data[\"force\"] === false) return pay(data[\"publicKey\"], data[\"account\"], data[\"signature\"], data[\"sum\"], data[\"desc\"], data[\"locale\"], data[\"currency\"])'
                                }) }}
                                    <div class=\"form-row form-input-username\" id=\"cart-fields\">
                                        <div class=\"form-group col-12 focused\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text border-0 bg-elegant-dark text-dark\">
                                                        <i class=\"fas fa-user\"></i>
                                                    </span>
                                                </div>
                                                <input
                                                    class=\"form-control border-0 bg-elegant-dark pl-2\"
                                                    placeholder=\"Ник на сервере\"
                                                    type=\"text\"
                                                    name=\"username\"
                                                    {% if username %}
                                                        value=\"{{ username }}\"
                                                        data-toggle=\"tooltip\"
                                                        title=\"Сохраненный ник\"
                                                        data-placement=\"left\"
                                                    {% endif %}>
                                            </div>
                                        </div>
                                    </div>
        
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-danger mb-4 animate-right-2\">
                                        Купить на <span class=\"text-underline server\">{% partial 'selected_server' %}</span>
                                    </button>
                                {{ form_close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart.htm", "");
    }
}
