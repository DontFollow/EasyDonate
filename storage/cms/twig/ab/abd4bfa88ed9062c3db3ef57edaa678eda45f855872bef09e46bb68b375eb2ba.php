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

/* /var/www/demo.easydonate.ru/plugins/dontfollow/surcharge/components/partials/alert.htm */
class __TwigTemplate_d91855f9e44ce8441ea48e95a0885ee650cbee0b30cdf37b9c6011e90eab89bd extends \Twig\Template
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
        echo "<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
    <span class=\"alert-inner--icon\"><i class=\"far fa-bell\"></i></span>
    <span class=\"alert-inner--text\">
        <strong>Внимание!</strong> На сайте работает доплата. Цены на товары выставляются автоматически.
    </span>
    <button type=\"button\" class=\"close\" style=\"right: 0; top: 0; padding: 20px; transform: none\" data-dismiss=\"alert\" aria-label=\"Close\" data-request=\"onAcceptSurcharge\">
        <span aria-hidden=\"true\">×</span>
    </button>
    <div class=\"form-group mt-4\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text border-0 text-dark\">
                    <i class=\"fas fa-user\"></i>
                </span>
            </div>
            <input
                class=\"form-control border-0 pl-2\"
                placeholder=\"Имя пользователя\"
                type=\"text\"
                value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\"
                name=\"username\"
                data-request=\"onAcceptUsername\"
                data-request-update=\"shop: '.shop'\"
                data-track-input>
        </div>
        <small>Введите имя пользователя, чтобы посмотреть доступные товары с доплатой.</small>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/plugins/dontfollow/surcharge/components/partials/alert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
    <span class=\"alert-inner--icon\"><i class=\"far fa-bell\"></i></span>
    <span class=\"alert-inner--text\">
        <strong>Внимание!</strong> На сайте работает доплата. Цены на товары выставляются автоматически.
    </span>
    <button type=\"button\" class=\"close\" style=\"right: 0; top: 0; padding: 20px; transform: none\" data-dismiss=\"alert\" aria-label=\"Close\" data-request=\"onAcceptSurcharge\">
        <span aria-hidden=\"true\">×</span>
    </button>
    <div class=\"form-group mt-4\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text border-0 text-dark\">
                    <i class=\"fas fa-user\"></i>
                </span>
            </div>
            <input
                class=\"form-control border-0 pl-2\"
                placeholder=\"Имя пользователя\"
                type=\"text\"
                value=\"{{ username }}\"
                name=\"username\"
                data-request=\"onAcceptUsername\"
                data-request-update=\"shop: '.shop'\"
                data-track-input>
        </div>
        <small>Введите имя пользователя, чтобы посмотреть доступные товары с доплатой.</small>
    </div>

</div>
", "/var/www/demo.easydonate.ru/plugins/dontfollow/surcharge/components/partials/alert.htm", "");
    }
}
