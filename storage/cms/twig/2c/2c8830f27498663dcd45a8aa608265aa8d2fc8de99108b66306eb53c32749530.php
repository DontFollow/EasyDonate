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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/select_server.htm */
class __TwigTemplate_5dfbe723fc17d1e516b3606e73e7fe71ea063d969f73e83a6f3a07004b161f40 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["servers"] ?? null)) > 0)) {
            // line 2
            echo "    <div class=\"btn-group h6\">
        Сервер:
        <a
            class=\"dropdown-toggle dropdown-toggle-split font-weight-bold text-underline\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\">
            ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
        </a>
        ";
            // line 11
            if ((twig_length_filter($this->env, ($context["servers"] ?? null)) > 1)) {
                // line 12
                echo "            <div class=\"dropdown-menu\" x-placement=\"bottom\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["servers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["_server"]) {
                    if ((twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 13) != twig_get_attribute($this->env, $this->source, $context["_server"], "id", [], "any", false, false, false, 13))) {
                        // line 14
                        echo "                    <a
                        class=\"dropdown-item font-weight-bolder text-black chose-server\"
                        data-request=\"onSelectServer\"
                        data-request-data=\"server_id: ";
                        // line 17
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_server"], "id", [], "any", false, false, false, 17), "html", null, true);
                        echo "\"
                        data-request-update=\"
                            shop: '.shop',
                            select_server: '.select-server',
                            cart_products: '.cart-products',
                            cart_cost: '.cart-cost',
                            selected_server: '.server',
                            cart_counter: '.cart-counter'
                        \"
                        data-request-loading
                        data-request-flash>
                        ";
                        // line 28
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_server"], "name", [], "any", false, false, false, 28), "html", null, true);
                        echo "
                    </a>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_server'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            </div>
        ";
            }
            // line 33
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/select_server.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  92 => 31,  82 => 28,  68 => 17,  63 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if servers | length > 0 %}
    <div class=\"btn-group h6\">
        Сервер:
        <a
            class=\"dropdown-toggle dropdown-toggle-split font-weight-bold text-underline\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\">
            {{ server.name }}
        </a>
        {% if servers | length > 1 %}
            <div class=\"dropdown-menu\" x-placement=\"bottom\" style=\"position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);\">
                {% for _server in servers if server.id != _server.id %}
                    <a
                        class=\"dropdown-item font-weight-bolder text-black chose-server\"
                        data-request=\"onSelectServer\"
                        data-request-data=\"server_id: {{ _server.id }}\"
                        data-request-update=\"
                            shop: '.shop',
                            select_server: '.select-server',
                            cart_products: '.cart-products',
                            cart_cost: '.cart-cost',
                            selected_server: '.server',
                            cart_counter: '.cart-counter'
                        \"
                        data-request-loading
                        data-request-flash>
                        {{ _server.name }}
                    </a>
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endif %}", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/select_server.htm", "");
    }
}
