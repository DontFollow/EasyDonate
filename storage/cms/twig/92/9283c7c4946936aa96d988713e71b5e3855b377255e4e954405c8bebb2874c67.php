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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/product.htm */
class __TwigTemplate_9da80b82ee34f020166dbf24b22f2be3481e9ac02bba46a359f7673988d03e06 extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"product\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content product-modal bg-elegant\">
            <div class=\"modal-header bg-elegant-night border-0\">
                <h6 class=\"modal-title text-white w-100\"><div class=\"fake-content h3 w-25\"></div></h6>
                <button style=\"padding: 0.95rem\" type=\"button\" class=\"close ml-auto\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\" class=\"text-white\">×</span>
                </button>
            </div>
            <div class=\"modal-body text-white\">
                <span class=\"badge bg-elegant-dark font-weight-bold text-uppercase w-25 text-left\">
                    <i class=\"fas fa-tag mr-2 text-gray\"></i>
                </span>
                <div class=\"py-3 text-center\">
                    <div class=\"card-image text-center p-2\">
                        <img class=\"img-fluid fw-200\" width=\"156\" src=\"";
        // line 16
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["image"] ?? null));
        echo "\">
                    </div>
                    <h3 class=\"modal-title mt-3\"><div class=\"fake-content h2 w-50\"></div></h3>
                    <p class=\"m-0\"><div class=\"fake-content h2 w-75\"></div></p>
                    <h5 class=\"mt-2 mb-0 font-weight-bolder\">
                        <div class=\"fake-content h3 w-25\"></div>
                    </h5>
                </div>
            </div>
            <div class=\"modal-footer bg-elegant-night d-flex justify-content-center border-0\">
                <button
                    class=\"btn btn-icon btn-secondary animate-up-2\"
                    type=\"button\">
                    <span class=\"btn-inner-icon\"><i class=\"fas fa-cart-plus\"></i></span>
                    <span class=\"btn-inner-text\">Добавить в корзину</span>
                </button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"product\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content product-modal bg-elegant\">
            <div class=\"modal-header bg-elegant-night border-0\">
                <h6 class=\"modal-title text-white w-100\"><div class=\"fake-content h3 w-25\"></div></h6>
                <button style=\"padding: 0.95rem\" type=\"button\" class=\"close ml-auto\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\" class=\"text-white\">×</span>
                </button>
            </div>
            <div class=\"modal-body text-white\">
                <span class=\"badge bg-elegant-dark font-weight-bold text-uppercase w-25 text-left\">
                    <i class=\"fas fa-tag mr-2 text-gray\"></i>
                </span>
                <div class=\"py-3 text-center\">
                    <div class=\"card-image text-center p-2\">
                        <img class=\"img-fluid fw-200\" width=\"156\" src=\"{{ image | media }}\">
                    </div>
                    <h3 class=\"modal-title mt-3\"><div class=\"fake-content h2 w-50\"></div></h3>
                    <p class=\"m-0\"><div class=\"fake-content h2 w-75\"></div></p>
                    <h5 class=\"mt-2 mb-0 font-weight-bolder\">
                        <div class=\"fake-content h3 w-25\"></div>
                    </h5>
                </div>
            </div>
            <div class=\"modal-footer bg-elegant-night d-flex justify-content-center border-0\">
                <button
                    class=\"btn btn-icon btn-secondary animate-up-2\"
                    type=\"button\">
                    <span class=\"btn-inner-icon\"><i class=\"fas fa-cart-plus\"></i></span>
                    <span class=\"btn-inner-text\">Добавить в корзину</span>
                </button>
            </div>
        </div>
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/modals/product.htm", "");
    }
}
