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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/layouts/default.htm */
class __TwigTemplate_0d4ef0b4ebde3875f7105e4479c59bb56cc3d549c2746851aeea782c0abd5ad5 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"author\" content=\"Виталий Эксузян <https://vk.com/user.dontfollow>\">
        <meta name=\"copyright\" lang=\"ru\" content=\"SPACESTUDIO\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 9
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</title>

        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["app_favicon"] ?? null), "html", null, true);
        echo "\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/fontawesome.css", 1 => "assets/css/pixel.css", 2 => "assets/css/animate.css", 3 => "assets/css/style.css"]);
        // line 18
        echo "\">

        ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark\">
            <div class=\"container position-relative\">
                <a class=\"navbar-brand text-center\" href=\"";
        // line 25
        echo url("/");
        echo "\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["app_logo"] ?? null), "html", null, true);
        echo "\">
                </a>
                <div class=\"navbar-collapse collapse\" id=\"navbar-dark-donate\">
                    <ul class=\"navbar-nav navbar-nav-hover align-items-lg-center\" id=\"navbar-links\">
                        <li class=\"nav-item\">
                            <a href=\"#servers\" class=\"nav-link animate-up-2\">
                                <i class=\"fas fa-server\"></i>
                                <span class=\"nav-link-inner-text\">Наши серверы</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#shop\" class=\"nav-link animate-up-2\">
                                <i class=\"fas fa-shopping-basket\"></i>
                                <span class=\"nav-link-inner-text\">Магазин</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#help\" class=\"nav-link animate-up-2\">
                                <i class=\"fas fa-info\"></i>
                                <span class=\"nav-link-inner-text\">Помощь</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"d-flex align-items-center\">
                    <ul class=\"flex-row list-style-none mr-4 d-none d-sm-flex\" id=\"navbar-social-links\">
                        ";
        // line 52
        if (($context["vk_link"] ?? null)) {
            // line 53
            echo "                            <li class=\"mr-3 animate-up-2\">
                                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["vk_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-link text-white\">
                                    <i class=\"fab fa-vk\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 59
        echo "                        ";
        if (($context["discord_link"] ?? null)) {
            // line 60
            echo "                            <li class=\"mr-3 animate-up-2\">
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["discord_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-link text-white\">
                                    <i class=\"fab fa-discord\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 66
        echo "                        ";
        if (($context["youtube_link"] ?? null)) {
            // line 67
            echo "                            <li class=\"mr-3 animate-up-2\">
                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["youtube_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-link text-white\">
                                    <i class=\"fab fa-youtube\"></i>
                                </a>
                            </li>
                        ";
        }
        // line 73
        echo "                    </ul>
                </div>
            </div>
        </nav>
        
        ";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 79
        echo "
        <footer class=\"footer section section-sm bg-elegant-night text-white\">
            <div class=\"container\">
                <div class=\"row align-items-md-center\" id=\"footer\">
                    <div class=\"col-sm-6 mb-4 mb-md-0\">
                        <div class=\"d-flex align-items-center\">
                            <a class=\"footer-brand mr-3\" href=\"";
        // line 85
        echo url("/");
        echo "\">
                                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["app_logo"] ?? null), "html", null, true);
        echo "\">
                            </a>
                            <p class=\"small mb-0\">© ";
        // line 88
        echo twig_escape_filter($this->env, ($context["app_name"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".<br>Все права защищены.</p>
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <ul class=\"list-inline text-sm-right ml-2 ml-sm-0\" id=\"footer-social-links\">
                            ";
        // line 94
        if (($context["vk_link"] ?? null)) {
            // line 95
            echo "                                <li class=\"list-inline-item\">
                                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["vk_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-link btn-twitter text-white\">
                                        <i class=\"fab fa-vk\"></i>
                                    </a>
                                </li>
                            ";
        }
        // line 101
        echo "                            ";
        if (($context["discord_link"] ?? null)) {
            // line 102
            echo "                                <li class=\"list-inline-item\">
                                    <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, ($context["discord_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-link btn-dribbble text-white\">
                                        <i class=\"fab fa-discord\"></i>
                                    </a>
                                </li>
                            ";
        }
        // line 108
        echo "                            ";
        if (($context["youtube_link"] ?? null)) {
            // line 109
            echo "                                <li class=\"list-inline-item\">
                                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, ($context["youtube_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-link btn-google-plus text-white\">
                                        <i class=\"fab fa-youtube\"></i>
                                    </a>
                                </li>
                            ";
        }
        // line 115
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class=\"fixed-bottom-right text-right\" style=\"z-index: 10\" id=\"widgets\">
            <a class=\"basket-button\" data-toggle=\"modal\" data-target=\"#cart\">
                <span
                    class=\"badge badge-pill badge-primary text-uppercase cart-counter\"
                    style=\"position: absolute; top: -5px; right: -5px\">
                    ";
        // line 125
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart_counter.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 126
        echo "                </span>
    \t        <i class=\"fas fa-shopping-basket\"></i>
    \t        <span class=\"corner items-count\"></span>
            </a>
        </div>
        
        ";
        // line 132
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/product"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 133
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/cart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 134
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals/server"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 135
        echo "    </body>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.min.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/headroom.min.js", 3 => "assets/js/counter.min.js", 4 => "assets/js/countdown.min.js", 5 => "assets/js/owl-carousel.min.js", 6 => "assets/js/waypoints.min.js", 7 => "assets/js/jarallax.min.js", 8 => "assets/js/smooth-scroll.min.js", 9 => "assets/js/pixel.min.js", 10 => "assets/js/wow.min.js", 11 => "assets/js/app.js"]);
        // line 151
        echo "\"></script>

    ";
        // line 153
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 154
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 155
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 155,  286 => 154,  275 => 153,  271 => 151,  269 => 138,  264 => 135,  259 => 134,  254 => 133,  250 => 132,  242 => 126,  238 => 125,  226 => 115,  218 => 110,  215 => 109,  212 => 108,  204 => 103,  201 => 102,  198 => 101,  190 => 96,  187 => 95,  185 => 94,  174 => 88,  169 => 86,  165 => 85,  157 => 79,  155 => 78,  148 => 73,  140 => 68,  137 => 67,  134 => 66,  126 => 61,  123 => 60,  120 => 59,  112 => 54,  109 => 53,  107 => 52,  78 => 26,  74 => 25,  68 => 21,  65 => 20,  61 => 18,  59 => 13,  54 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"author\" content=\"Виталий Эксузян <https://vk.com/user.dontfollow>\">
        <meta name=\"copyright\" lang=\"ru\" content=\"SPACESTUDIO\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{{ app_name }} - {{ this.page.title }}</title>

        <link rel=\"icon\" href=\"{{ app_favicon }}\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"{{ [
            'assets/css/fontawesome.css',
            'assets/css/pixel.css',
            'assets/css/animate.css',
            'assets/css/style.css'
        ] | theme }}\">

        {% styles %}
    </head>
    <body>
        <nav class=\"navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark\">
            <div class=\"container position-relative\">
                <a class=\"navbar-brand text-center\" href=\"{{ url('/') }}\">
                    <img src=\"{{ app_logo }}\">
                </a>
                <div class=\"navbar-collapse collapse\" id=\"navbar-dark-donate\">
                    <ul class=\"navbar-nav navbar-nav-hover align-items-lg-center\" id=\"navbar-links\">
                        <li class=\"nav-item\">
                            <a href=\"#servers\" class=\"nav-link animate-up-2\">
                                <i class=\"fas fa-server\"></i>
                                <span class=\"nav-link-inner-text\">Наши серверы</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#shop\" class=\"nav-link animate-up-2\">
                                <i class=\"fas fa-shopping-basket\"></i>
                                <span class=\"nav-link-inner-text\">Магазин</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#help\" class=\"nav-link animate-up-2\">
                                <i class=\"fas fa-info\"></i>
                                <span class=\"nav-link-inner-text\">Помощь</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"d-flex align-items-center\">
                    <ul class=\"flex-row list-style-none mr-4 d-none d-sm-flex\" id=\"navbar-social-links\">
                        {% if vk_link %}
                            <li class=\"mr-3 animate-up-2\">
                                <a href=\"{{ vk_link }}\" target=\"_blank\" class=\"btn btn-link text-white\">
                                    <i class=\"fab fa-vk\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if discord_link %}
                            <li class=\"mr-3 animate-up-2\">
                                <a href=\"{{ discord_link }}\" target=\"_blank\" class=\"btn btn-link text-white\">
                                    <i class=\"fab fa-discord\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if youtube_link %}
                            <li class=\"mr-3 animate-up-2\">
                                <a href=\"{{ youtube_link }}\" target=\"_blank\" class=\"btn btn-link text-white\">
                                    <i class=\"fab fa-youtube\"></i>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
        
        {% page %}

        <footer class=\"footer section section-sm bg-elegant-night text-white\">
            <div class=\"container\">
                <div class=\"row align-items-md-center\" id=\"footer\">
                    <div class=\"col-sm-6 mb-4 mb-md-0\">
                        <div class=\"d-flex align-items-center\">
                            <a class=\"footer-brand mr-3\" href=\"{{ url('/') }}\">
                                <img src=\"{{ app_logo }}\">
                            </a>
                            <p class=\"small mb-0\">© {{ app_name }} {{ 'now' | date('Y') }}.<br>Все права защищены.</p>
                        </div>
                    </div>

                    <div class=\"col-sm-6\">
                        <ul class=\"list-inline text-sm-right ml-2 ml-sm-0\" id=\"footer-social-links\">
                            {% if vk_link %}
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ vk_link }}\" target=\"_blank\" class=\"btn btn-link btn-twitter text-white\">
                                        <i class=\"fab fa-vk\"></i>
                                    </a>
                                </li>
                            {% endif %}
                            {% if discord_link %}
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ discord_link }}\" target=\"_blank\" class=\"btn btn-link btn-dribbble text-white\">
                                        <i class=\"fab fa-discord\"></i>
                                    </a>
                                </li>
                            {% endif %}
                            {% if youtube_link %}
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ youtube_link }}\" target=\"_blank\" class=\"btn btn-link btn-google-plus text-white\">
                                        <i class=\"fab fa-youtube\"></i>
                                    </a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class=\"fixed-bottom-right text-right\" style=\"z-index: 10\" id=\"widgets\">
            <a class=\"basket-button\" data-toggle=\"modal\" data-target=\"#cart\">
                <span
                    class=\"badge badge-pill badge-primary text-uppercase cart-counter\"
                    style=\"position: absolute; top: -5px; right: -5px\">
                    {% partial 'cart_counter.htm' %}
                </span>
    \t        <i class=\"fas fa-shopping-basket\"></i>
    \t        <span class=\"corner items-count\"></span>
            </a>
        </div>
        
        {% partial 'modals/product' %}
        {% partial 'modals/cart' %}
        {% partial 'modals/server' %}
    </body>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ [
        'assets/js/jquery.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/headroom.min.js',
        'assets/js/counter.min.js',
        'assets/js/countdown.min.js',
        'assets/js/owl-carousel.min.js',
        'assets/js/waypoints.min.js',
        'assets/js/jarallax.min.js',
        'assets/js/smooth-scroll.min.js',
        'assets/js/pixel.min.js',
        'assets/js/wow.min.js',
        'assets/js/app.js',
    ] | theme }}\"></script>

    {% framework extras %}
    {% scripts %}
</html>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/layouts/default.htm", "");
    }
}
