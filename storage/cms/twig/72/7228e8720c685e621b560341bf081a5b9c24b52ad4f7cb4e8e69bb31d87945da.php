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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_cost.htm */
class __TwigTemplate_eed5825ded248c2dfccf94e3fdeb48a7fb493de0340278db9102f067456d6b7f extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cost", [], "any", false, false, false, 1), 2, ".", ""), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_cost.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ cart.cost | number_format(2, '.', '') }}", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/cart_cost.htm", "");
    }
}
