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

/* /var/www/demo.easydonate.ru/plugins/dontfollow/socialwidgets/components/partials/community_posts.htm */
class __TwigTemplate_966356c566b6676adb9b51661cb19321028eefbf5b6e14ce8df970aa0c39ceca extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "id", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div id=\"vk_community_messages\"></div>

    <script type=\"text/javascript\">
        VK.Widgets.CommunityMessages(
            \"vk_community_messages\",
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
            echo ",
            {
                expandTimeout: \"";
            // line 9
            (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "expandTimeout", [], "any", false, false, false, 9) * 1000)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "expandTimeout", [], "any", false, false, false, 9) * 1000), "html", null, true))) : (print (60000)));
            echo "\",
                ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "disableExpandChatSound", [], "any", false, false, false, 10)) {
                // line 11
                echo "                    disableExpandChatSound: \"1\",
                ";
            }
            // line 13
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "disableNewMessagesSound", [], "any", false, false, false, 13)) {
                // line 14
                echo "                    disableNewMessagesSound: \"1\",
                ";
            }
            // line 16
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "disableButtonTooltip", [], "any", false, false, false, 16)) {
                // line 17
                echo "                    disableButtonTooltip: \"1\"
                ";
            } else {
                // line 19
                echo "                    tooltipButtonText: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tooltipButtonText", [], "any", false, false, false, 19), "html", null, true);
                echo "\"
                ";
            }
            // line 21
            echo "            }
        );
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/plugins/dontfollow/socialwidgets/components/partials/community_posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  75 => 19,  71 => 17,  68 => 16,  64 => 14,  61 => 13,  57 => 11,  55 => 10,  51 => 9,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if settings.id %}
    <div id=\"vk_community_messages\"></div>

    <script type=\"text/javascript\">
        VK.Widgets.CommunityMessages(
            \"vk_community_messages\",
            {{ settings.id }},
            {
                expandTimeout: \"{{ settings.expandTimeout * 1000 ?: 60000 }}\",
                {% if settings.disableExpandChatSound %}
                    disableExpandChatSound: \"1\",
                {% endif %}
                {% if settings.disableNewMessagesSound %}
                    disableNewMessagesSound: \"1\",
                {% endif %}
                {% if settings.disableButtonTooltip %}
                    disableButtonTooltip: \"1\"
                {% else %}
                    tooltipButtonText: \"{{ settings.tooltipButtonText }}\"
                {% endif %}
            }
        );
    </script>
{% endif %}
", "/var/www/demo.easydonate.ru/plugins/dontfollow/socialwidgets/components/partials/community_posts.htm", "");
    }
}
