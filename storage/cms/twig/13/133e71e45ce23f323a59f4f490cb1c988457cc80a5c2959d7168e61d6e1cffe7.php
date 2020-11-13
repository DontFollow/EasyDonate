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

/* /var/www/demo.easydonate.ru/themes/lullaby-dark/partials/servers.htm */
class __TwigTemplate_0218de95c86a2fee312e1493c80daf379c0472b34852dc4916bee4dd6edc77b0 extends \Twig\Template
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
        echo "<div class=\"row d-flex justify-content-center\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 3
            echo "        <div class=\"col-md-6 mt-5 mt-md-0\">
            <a data-toggle=\"modal\" data-target=\"#server\" id=\"server-block\" data-server-id=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
                ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 5)) {
                // line 6
                echo "                    <div
                        class=\"progress-wrapper animate-up-2\"
                        data-toggle=\"tooltip\"
                        title=\"";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 9), "ListPlayers", [], "any", false, false, false, 9), 0, 10));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    echo twig_escape_filter($this->env, $context["player"], "html", null, true);
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9)) ? (null) : (" • "));
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 9), "ListPlayers", [], "any", false, false, false, 9)) > 10)) ? (" • ...") : (null));
                echo "\"
                    >
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bolder lead\">
                                    ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span class=\"badge bg-elegant\">
                                    <i class=\"fas fa-play mr-2 text-gray\"></i>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "address", [], "any", false, false, false, 19), "html", null, true);
                echo "
                                </span>
                            </div>
                        </div>
                        <div class=\"progress mb-1 shadow-none bg-elegant\">
                            <div
                                class=\"progress-bar bg-danger\"
                                role=\"progressbar\"
                                aria-valuenow=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 27), "Players", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                                aria-valuemin=\"0\"
                                aria-valuemax=\"100\"
                                style=\"width: ";
                // line 30
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 30), "Players", [], "any", false, false, false, 30) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 30), "MaxPlayers", [], "any", false, false, false, 30)) * 100), "html", null, true);
                echo "%; : 3s ease 0s 1 normal none running animate-positive; opacity: 1;\">
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bold\">
                                    Онлайн:
                                    <span class=\"font-weight-light\">
                                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 38), "Players", [], "any", false, false, false, 38), "html", null, true);
                echo " из ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 38), "MaxPlayers", [], "any", false, false, false, 38), "html", null, true);
                echo "
                                    </span>
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span class=\"badge bg-danger text-white\">
                                    <i class=\"fas fa-code-branch mr-2\"></i>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["server"], "info", [], "any", false, false, false, 44), "Version", [], "any", false, false, false, 44), "html", null, true);
                echo "
                                </span>
                            </div>
                        </div>
                    </div>
                ";
            } else {
                // line 50
                echo "                    <div class=\"progress-wrapper animate-up-2\">
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bolder lead z-1\">
                                    ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo "
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span
                                    class=\"badge bg-elegant\"
                                    onclick=\"\$(this).select(); document.execCommand('copy')\">
                                    <i class=\"fas fa-play mr-2 text-gray\"></i>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 61), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 61), "html", null, true);
                echo "
                                </span>
                            </div>
                        </div>
                        <div class=\"progress mb-1 shadow-none bg-elegant\">
                            <div
                                class=\"progress-bar bg-warning\"
                                role=\"progressbar\"
                                aria-valuenow=\"100\"
                                aria-valuemin=\"0\"
                                aria-valuemax=\"100\"
                                style=\"width: 100%; animation: 3s ease 0s 1 normal none running animate-positive; opacity: 1;\">
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bold\">
                                    Информация недоступна
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span class=\"badge bg-warning text-black\">
                                    <i class=\"fas fa-exclamation-triangle mr-2 text-tertiary\"></i>Сервер выключен
                                </span>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 89
            echo "            </a>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "        <div class=\"text-center mt-5 text-uppercase\">
            <i class=\"fas fa-layer-group fa-3x text-light\"></i>
            <p class=\"text-small mb-0 mt-2\">Серверов пока нет</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/servers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 97,  209 => 92,  202 => 89,  169 => 61,  159 => 54,  153 => 50,  144 => 44,  133 => 38,  122 => 30,  116 => 27,  105 => 19,  97 => 14,  59 => 9,  54 => 6,  52 => 5,  48 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row d-flex justify-content-center\">
    {% for server in servers %}
        <div class=\"col-md-6 mt-5 mt-md-0\">
            <a data-toggle=\"modal\" data-target=\"#server\" id=\"server-block\" data-server-id=\"{{ server.id }}\">
                {% if server.info %}
                    <div
                        class=\"progress-wrapper animate-up-2\"
                        data-toggle=\"tooltip\"
                        title=\"{% for player in server.info.ListPlayers[:10] %}{{ player }}{{ loop.last ? null : ' • ' }}{% endfor %}{{ (server.info.ListPlayers | length) > 10 ? ' • ...' : null }}\"
                    >
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bolder lead\">
                                    {{ server.name }}
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span class=\"badge bg-elegant\">
                                    <i class=\"fas fa-play mr-2 text-gray\"></i>{{ server.address }}
                                </span>
                            </div>
                        </div>
                        <div class=\"progress mb-1 shadow-none bg-elegant\">
                            <div
                                class=\"progress-bar bg-danger\"
                                role=\"progressbar\"
                                aria-valuenow=\"{{ server.info.Players }}\"
                                aria-valuemin=\"0\"
                                aria-valuemax=\"100\"
                                style=\"width: {{ server.info.Players / server.info.MaxPlayers * 100 }}%; : 3s ease 0s 1 normal none running animate-positive; opacity: 1;\">
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bold\">
                                    Онлайн:
                                    <span class=\"font-weight-light\">
                                        {{ server.info.Players }} из {{ server.info.MaxPlayers }}
                                    </span>
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span class=\"badge bg-danger text-white\">
                                    <i class=\"fas fa-code-branch mr-2\"></i>{{ server.info.Version }}
                                </span>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"progress-wrapper animate-up-2\">
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bolder lead z-1\">
                                    {{ server.name }}
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span
                                    class=\"badge bg-elegant\"
                                    onclick=\"\$(this).select(); document.execCommand('copy')\">
                                    <i class=\"fas fa-play mr-2 text-gray\"></i>{{ server.ip }}:{{ server.port }}
                                </span>
                            </div>
                        </div>
                        <div class=\"progress mb-1 shadow-none bg-elegant\">
                            <div
                                class=\"progress-bar bg-warning\"
                                role=\"progressbar\"
                                aria-valuenow=\"100\"
                                aria-valuemin=\"0\"
                                aria-valuemax=\"100\"
                                style=\"width: 100%; animation: 3s ease 0s 1 normal none running animate-positive; opacity: 1;\">
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div>
                                <span class=\"font-weight-bold\">
                                    Информация недоступна
                                </span>
                            </div>
                            <div class=\"progress-percentage\">
                                <span class=\"badge bg-warning text-black\">
                                    <i class=\"fas fa-exclamation-triangle mr-2 text-tertiary\"></i>Сервер выключен
                                </span>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </a>
        </div>
    {% else %}
        <div class=\"text-center mt-5 text-uppercase\">
            <i class=\"fas fa-layer-group fa-3x text-light\"></i>
            <p class=\"text-small mb-0 mt-2\">Серверов пока нет</p>
        </div>
    {% endfor %}
</div>", "/var/www/demo.easydonate.ru/themes/lullaby-dark/partials/servers.htm", "");
    }
}
