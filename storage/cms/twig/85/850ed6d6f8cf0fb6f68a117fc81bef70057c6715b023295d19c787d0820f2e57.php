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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/server.htm */
class __TwigTemplate_867fa2663aa44906f00942a29141e2a517e170c8e9cac492877f0178076e7f07 extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"server\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content server-modal bg-elegant\">
            <p class=\"text-center m-5\">
                Загрузка сервера...
            </p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/server.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"server\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content server-modal bg-elegant\">
            <p class=\"text-center m-5\">
                Загрузка сервера...
            </p>
        </div>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/server.htm", "");
    }
}
