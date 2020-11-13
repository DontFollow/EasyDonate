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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/pages/main.htm */
class __TwigTemplate_cbd6c685e929c6426cd9326789cb7f6847532b32b2e04d381e58716286555b1c extends \Twig\Template
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
        echo "<main class=\"bg-elegant-dark\" id=\"sections\">
    <section class=\"section section-xl section-image overlay-dark text-white overflow-hidden jarallax\" data-background=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["app_background"] ?? null), "html", null, true);
        echo "\" id=\"welcome-section\">
        <div class=\"container z-2\">
            <div class=\"row\">
                <div class=\"col-lg-6 text-center text-lg-left wow fadeInLeftBig my-auto\">
                    <h1 class=\"display-2 mb-3 font-weight-bolder\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "html", null, true);
        echo "</h1>
                    <h3 class=\"display-4 font-weight-light mb-0\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["app_description"] ?? null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col-lg-6 d-none d-lg-block d-lg-non wow fadeInRightBig my-auto\">
                    <div class=\"d-flex justify-content-center\">
                        <img class=\"fh-300\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["app_side"] ?? null), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"pattern bottom\" data-negative=\"false\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 283.5 27.8\" preserveAspectRatio=\"none\">
                <path class=\"fill-elegant-dark\" d=\"M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7 s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7\tc-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3\tc-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6\tc0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7\tC239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5\tc0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1\tc-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7\tc0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6\tC8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8\tc0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2\tC74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3\tC97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1\tz M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1\tc-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z\">
                </path>
            </svg>
        </div>
    </section>
    <section class=\"section section-md pt-5 text-white wow fadeInUp\" id=\"servers\">
        <div class=\"container text-white\">
            <h2 class=\"h1 font-weight-bolder text-center mb-5\">Наши серверы</h2>
            
            <div class=\"servers\">
                ";
        // line 28
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Servers"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 29
        echo "            </div>
        </div>
    </section>
    <section class=\"section section-md pt-5 wow fadeInUp\" id=\"shop\">
        <div class=\"container text-white\">
            <div class=\"d-flex justify-content-between\">
                <h2 class=\"h1 font-weight-bolder mb-0\">Наши товары</h2>
                <div class=\"form-group my-auto\">
                    <div class=\"input-group mb-0\">
                        <input class=\"form-control bg-elegant border-0\" placeholder=\"Поиск\" name=\"search_name\" type=\"text\" data-request=\"onSearchProducts\" data-request-update=\"shop: '.shop'\" data-track-input>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text bg-elegant text-white border-0\"><i class=\"fas fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"shop\">
                ";
        // line 47
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Shop"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 48
        echo "            </div>
        </div>
    </section>

    <section class=\"section section-sm text-white wow fadeInUp\" id=\"help\">
        <div class=\"container\">
            <h2 class=\"h2 font-weight-bolder\">Инструкция по покупке</h2>
            <p class=\"font-weight-bolder mb-0\">1. Выбор товара</p>
            <p class=\"mt-0\">Добавьте необходимые товары в корзину и заполните предлагаемую форму.</p>

            <p class=\"font-weight-bolder mb-0\">2. Оплата товара</p>
            <p class=\"mt-0\">Оплатите товары, добавленные в корзину.</p>

            <p class=\"font-weight-bolder mb-0\">3. Активация</p>
            <p class=\"mt-0\">После оплаты товары выдаются на выбранном Вами сервере автоматически.</p>
        </div>
    </section>
</main>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/pages/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 48,  102 => 47,  82 => 29,  78 => 28,  58 => 11,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"bg-elegant-dark\" id=\"sections\">
    <section class=\"section section-xl section-image overlay-dark text-white overflow-hidden jarallax\" data-background=\"{{ app_background }}\" id=\"welcome-section\">
        <div class=\"container z-2\">
            <div class=\"row\">
                <div class=\"col-lg-6 text-center text-lg-left wow fadeInLeftBig my-auto\">
                    <h1 class=\"display-2 mb-3 font-weight-bolder\">{{ app_name }}</h1>
                    <h3 class=\"display-4 font-weight-light mb-0\">{{ app_description }}</h3>
                </div>
                <div class=\"col-lg-6 d-none d-lg-block d-lg-non wow fadeInRightBig my-auto\">
                    <div class=\"d-flex justify-content-center\">
                        <img class=\"fh-300\" src=\"{{ app_side }}\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"pattern bottom\" data-negative=\"false\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 283.5 27.8\" preserveAspectRatio=\"none\">
                <path class=\"fill-elegant-dark\" d=\"M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7 s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7\tc-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3\tc-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6\tc0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7\tC239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5\tc0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1\tc-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7\tc0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6\tC8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8\tc0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2\tC74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3\tC97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1\tz M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1\tc-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z\">
                </path>
            </svg>
        </div>
    </section>
    <section class=\"section section-md pt-5 text-white wow fadeInUp\" id=\"servers\">
        <div class=\"container text-white\">
            <h2 class=\"h1 font-weight-bolder text-center mb-5\">Наши серверы</h2>
            
            <div class=\"servers\">
                {% component 'Servers' %}
            </div>
        </div>
    </section>
    <section class=\"section section-md pt-5 wow fadeInUp\" id=\"shop\">
        <div class=\"container text-white\">
            <div class=\"d-flex justify-content-between\">
                <h2 class=\"h1 font-weight-bolder mb-0\">Наши товары</h2>
                <div class=\"form-group my-auto\">
                    <div class=\"input-group mb-0\">
                        <input class=\"form-control bg-elegant border-0\" placeholder=\"Поиск\" name=\"search_name\" type=\"text\" data-request=\"onSearchProducts\" data-request-update=\"shop: '.shop'\" data-track-input>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text bg-elegant text-white border-0\"><i class=\"fas fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"shop\">
                {% component 'Shop' %}
            </div>
        </div>
    </section>

    <section class=\"section section-sm text-white wow fadeInUp\" id=\"help\">
        <div class=\"container\">
            <h2 class=\"h2 font-weight-bolder\">Инструкция по покупке</h2>
            <p class=\"font-weight-bolder mb-0\">1. Выбор товара</p>
            <p class=\"mt-0\">Добавьте необходимые товары в корзину и заполните предлагаемую форму.</p>

            <p class=\"font-weight-bolder mb-0\">2. Оплата товара</p>
            <p class=\"mt-0\">Оплатите товары, добавленные в корзину.</p>

            <p class=\"font-weight-bolder mb-0\">3. Активация</p>
            <p class=\"mt-0\">После оплаты товары выдаются на выбранном Вами сервере автоматически.</p>
        </div>
    </section>
</main>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/pages/main.htm", "");
    }
}
