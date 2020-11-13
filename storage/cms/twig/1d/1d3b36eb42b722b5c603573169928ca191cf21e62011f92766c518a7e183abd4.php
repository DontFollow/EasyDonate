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

/* /var/www/demo.easydonate.ru/plugins/dontfollow/lastpayments/components/partials/last_payments.htm */
class __TwigTemplate_53f24707d86b8a24c5ff44a93739fc0df7021b991f2c217947349088e0c801f4 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "count", [], "any", false, false, false, 1) > 0)) {
            // line 2
            echo "    <section class=\"section section-md pt-5 text-white wow fadeInUp\" id=\"last-payments\">
        <div class=\"container text-white\">
            <h2 class=\"h1 font-weight-bolder text-center mb-5\">Последние покупки</h2>
            <div class=\"owl-carousel owl-theme\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 7
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["payment"], "products", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 8
                    echo "                        <div class=\"item\">
                            <a data-toggle=\"modal\" data-target=\"#product\" data-product-id=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 9), "html", null, true);
                    echo "\">
                                <div class=\"card bg-elegant-dark border-0\">
                                    <div class=\"card-body\">
                                        <img src=\"";
                    // line 12
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 12));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 12), "html", null, true);
                    echo "\" class=\"img-center\" style=\"max-width: 128px\">
                                    </div>
                                    <div class=\"card-body pt-0\">
                                        <p class=\"mb-0\" style=\"line-height: 19px\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 15), "html", null, true);
                    echo ", x";
                    ((twig_get_attribute($this->env, $this->source, $context["product"], "count", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "count", [], "any", false, false, false, 15), "html", null, true))) : (print (1)));
                    echo "</p>
                                        <small class=\"text-muted\" style=\"line-height: 19px\">";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "customer", [], "any", false, false, false, 16), "html", null, true);
                    echo "</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </div>
        </div>
    </section>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".owl-carousel\").owlCarousel({
                items: ";
            // line 30
            ((($context["items"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["items"] ?? null), "html", null, true))) : (print (6)));
            echo ",
                autoWidth: true
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/plugins/dontfollow/lastpayments/components/partials/last_payments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  95 => 23,  89 => 22,  77 => 16,  71 => 15,  63 => 12,  57 => 9,  54 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if payments.count > 0 %}
    <section class=\"section section-md pt-5 text-white wow fadeInUp\" id=\"last-payments\">
        <div class=\"container text-white\">
            <h2 class=\"h1 font-weight-bolder text-center mb-5\">Последние покупки</h2>
            <div class=\"owl-carousel owl-theme\">
                {% for payment in payments %}
                    {% for product in payment.products %}
                        <div class=\"item\">
                            <a data-toggle=\"modal\" data-target=\"#product\" data-product-id=\"{{ product.product_id }}\">
                                <div class=\"card bg-elegant-dark border-0\">
                                    <div class=\"card-body\">
                                        <img src=\"{{ product.image | media }}\" alt=\"{{ product.title }}\" class=\"img-center\" style=\"max-width: 128px\">
                                    </div>
                                    <div class=\"card-body pt-0\">
                                        <p class=\"mb-0\" style=\"line-height: 19px\">{{ product.title }}, x{{ product.count ?: 1 }}</p>
                                        <small class=\"text-muted\" style=\"line-height: 19px\">{{ payment.customer }}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>
    </section>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".owl-carousel\").owlCarousel({
                items: {{ items ?: 6 }},
                autoWidth: true
            });
        });
    </script>
{% endif %}
", "/var/www/demo.easydonate.ru/plugins/dontfollow/lastpayments/components/partials/last_payments.htm", "");
    }
}
