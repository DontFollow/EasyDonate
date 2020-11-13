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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/cart.htm */
class __TwigTemplate_7c90a29312fdf7f675fa0b38c20d7603084148711a8f49bdb13a2e4543a557e6 extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"cart\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content cart bg-elegant\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['cart'] = ($context["cart"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"cart\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content cart bg-elegant\">
            {% partial 'cart' cart = cart %}
        </div>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/cart.htm", "");
    }
}
