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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/shop.htm */
class __TwigTemplate_e583111290897e3766bce4adbcd9850bc11bd8f4b47cce6806c7056b74a16186 extends \Twig\Template
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
        echo "<div class=\"select-server\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("select_server"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>


<div class=\"row d-flex justify-content-center\">
    <div class=\"col-12 filter-item\" id=\"category-";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12\">
                <div class=\"row\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "                        <div class=\"col-lg-6\">
                            ";
            // line 13
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product'] = $context["product"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("shop_item"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "                        <div class=\"col-12\">
                            <div class=\"text-center mt-6 text-uppercase\">
                                <i class=\"fas fa-cogs text-light fa-3x\"></i>
                                <p class=\"text-white text-small mb-0 mt-2\">Товаров пока нет</p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  76 => 16,  70 => 14,  65 => 13,  62 => 12,  57 => 11,  50 => 7,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"select-server\">
    {% partial 'select_server' %}
</div>


<div class=\"row d-flex justify-content-center\">
    <div class=\"col-12 filter-item\" id=\"category-{{ category.name }}\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12\">
                <div class=\"row\">
                    {% for product in products %}
                        <div class=\"col-lg-6\">
                            {% partial 'shop_item' product = product %}
                        </div>
                    {% else %}
                        <div class=\"col-12\">
                            <div class=\"text-center mt-6 text-uppercase\">
                                <i class=\"fas fa-cogs text-light fa-3x\"></i>
                                <p class=\"text-white text-small mb-0 mt-2\">Товаров пока нет</p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/shop.htm", "");
    }
}
