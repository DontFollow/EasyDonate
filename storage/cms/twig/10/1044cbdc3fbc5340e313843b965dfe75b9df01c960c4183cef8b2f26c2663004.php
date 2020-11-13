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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/server.htm */
class __TwigTemplate_f710417e44f44f998f3e9739d8594c9f6e7e7de06a3e931fa3707316ddb65f4f extends \Twig\Template
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
        echo "<div class=\"modal-header bg-elegant-night border-0 text-white\">
    <h5 class=\"mb-0 font-weight-light\">Описание сервера</h5>
    <button type=\"button\" class=\"close ml-auto\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\" class=\"text-white\">×</span>
    </button>
</div>
<div class=\"modal-body text-white\">
    <div class=\"py-4 row\">
        <div class=\"col-sm-3 text-center my-auto\">
            <span class=\"modal-icon\"><i class=\"fas fa-server fa-6x\"></i></span>
        </div>
        <div class=\"col-sm-9 my-auto\">
            <h4 class=\"modal-title mt-2\">Сервер <span class=\"font-weight-bolder\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</span></h4>
            <p class=\"m-0\">";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "short_description", [], "any", false, false, false, 14);
        echo "</p>
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "description", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <hr class=\"m-0\"><p class=\"w-100\">";
            echo twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "description", [], "any", false, false, false, 16);
            echo "</p>
            ";
        }
        // line 18
        echo "        </div>
    </div>
</div>
<div class=\"modal-footer border-0 d-block bg-elegant-night px-5\">
    <div class=\"text-white\">        
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "info", [], "any", false, false, false, 23)) {
            // line 24
            echo "            <h5 class=\"font-weight-bold text-center mb-3\">
                Как играть на сервере <span class=\"font-weight-bolder\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>?
            </h5>
            
            <p class=\"font-weight-bold mb-0\">1. Скачать <span class=\"font-weight-bolder\">Minecraft</span></p>
            <p class=\"mt-0\">Скачайте <span class=\"font-weight-bolder\">клиент Minecraft</span> и откройте приложение.</p>
    
            <p class=\"font-weight-bold mb-0\">2. Выбор версии</p>
            <p class=\"mt-0\">
                Установите необходимую <span class=\"font-weight-bolder\">версию</span> игры и дождитесь загрузки клиента.<br>
                Версии, доступные для входа на сервер: <span class=\"badge badge-info\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "info", [], "any", false, false, false, 34), "Version", [], "any", false, false, false, 34), "html", null, true);
            echo "</span>
            </p>
                    
            <p class=\"font-weight-bolder mb-0\">3. Вход на сервер</p>
            <p class=\"mt-0\">Во вкладке <span class=\"font-weight-bolder\">Сетевая игра</span> нажмите на кнопку <span class=\"font-weight-bolder\">Добавить сервер</span> и введите адрес сервера: <span class=\"badge badge-info\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "address", [], "any", false, false, false, 38), "html", null, true);
            echo "</span></p>
        ";
        } else {
            // line 40
            echo "            <div class=\"text-center text-uppercase\">
                <i class=\"fas fa-skull-crossbones fa-3x text-tertiary mt-2\"></i>
                <p class=\"text-white mb-0 mt-1\">Сервер временно недоступен</p>
            </div>
        ";
        }
        // line 45
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/server.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  103 => 40,  98 => 38,  91 => 34,  79 => 25,  76 => 24,  74 => 23,  67 => 18,  61 => 16,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-header bg-elegant-night border-0 text-white\">
    <h5 class=\"mb-0 font-weight-light\">Описание сервера</h5>
    <button type=\"button\" class=\"close ml-auto\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\" class=\"text-white\">×</span>
    </button>
</div>
<div class=\"modal-body text-white\">
    <div class=\"py-4 row\">
        <div class=\"col-sm-3 text-center my-auto\">
            <span class=\"modal-icon\"><i class=\"fas fa-server fa-6x\"></i></span>
        </div>
        <div class=\"col-sm-9 my-auto\">
            <h4 class=\"modal-title mt-2\">Сервер <span class=\"font-weight-bolder\">{{ server.name }}</span></h4>
            <p class=\"m-0\">{{ server.short_description | raw }}</p>
            {% if server.description %}
                <hr class=\"m-0\"><p class=\"w-100\">{{ server.description | raw }}</p>
            {% endif %}
        </div>
    </div>
</div>
<div class=\"modal-footer border-0 d-block bg-elegant-night px-5\">
    <div class=\"text-white\">        
        {% if server.info %}
            <h5 class=\"font-weight-bold text-center mb-3\">
                Как играть на сервере <span class=\"font-weight-bolder\">{{ server.name }}</span>?
            </h5>
            
            <p class=\"font-weight-bold mb-0\">1. Скачать <span class=\"font-weight-bolder\">Minecraft</span></p>
            <p class=\"mt-0\">Скачайте <span class=\"font-weight-bolder\">клиент Minecraft</span> и откройте приложение.</p>
    
            <p class=\"font-weight-bold mb-0\">2. Выбор версии</p>
            <p class=\"mt-0\">
                Установите необходимую <span class=\"font-weight-bolder\">версию</span> игры и дождитесь загрузки клиента.<br>
                Версии, доступные для входа на сервер: <span class=\"badge badge-info\">{{ server.info.Version }}</span>
            </p>
                    
            <p class=\"font-weight-bolder mb-0\">3. Вход на сервер</p>
            <p class=\"mt-0\">Во вкладке <span class=\"font-weight-bolder\">Сетевая игра</span> нажмите на кнопку <span class=\"font-weight-bolder\">Добавить сервер</span> и введите адрес сервера: <span class=\"badge badge-info\">{{ server.address }}</span></p>
        {% else %}
            <div class=\"text-center text-uppercase\">
                <i class=\"fas fa-skull-crossbones fa-3x text-tertiary mt-2\"></i>
                <p class=\"text-white mb-0 mt-1\">Сервер временно недоступен</p>
            </div>
        {% endif %}
    </div>
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/server.htm", "");
    }
}
