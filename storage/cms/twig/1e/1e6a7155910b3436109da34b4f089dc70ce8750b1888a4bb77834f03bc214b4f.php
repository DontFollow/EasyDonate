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

/* /var/www/demo.easydonate.ru/plugins/dontfollow/promocodes/components/partials/type_username_modal.htm */
class __TwigTemplate_6d25ac0111ef82886baf1cf54ba32ef14aef3b9da13fa997df16a0d1643cc531 extends \Twig\Template
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
        echo "<div id=\"type-username-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"type-username-modal\" aria-hidden=\"true\" class=\"modal fade\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
        <div class=\"modal-content bg-elegant-dark\">
            <div class=\"modal-body\">
                <div class=\"py-3 text-center text-white\">
                    <span class=\"modal-icon display-1-lg\"><i class=\"fas fa-user-plus\"></i></span>
                    <h4 class=\"modal-title mb-5\">Введите сначала Ваш логин в игре</h4>
                    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onTypeUsername", ["flash" => true, "success" => "\$(\"#type-username-modal\").modal(\"hide\")"]]);
        // line 11
        echo "
                        <div class=\"form-group\">
                            <div class=\"d-sm-flex flex-column flex-sm-row mb-3 justify-content-center\">
                                <input type=\"text\" name=\"username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Ваш логин в игре\" class=\"mr-sm-1 mb-2 mb-sm-0 form-control form-control-lg\">
                                <button type=\"submit\" class=\"ml-sm-1 btn btn-danger\">Подтвердить</button>
                            </div>
                        </div>
                    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    \$('#type-username-modal').modal();
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/demo.easydonate.ru/plugins/dontfollow/promocodes/components/partials/type_username_modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  53 => 14,  48 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"type-username-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"type-username-modal\" aria-hidden=\"true\" class=\"modal fade\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
        <div class=\"modal-content bg-elegant-dark\">
            <div class=\"modal-body\">
                <div class=\"py-3 text-center text-white\">
                    <span class=\"modal-icon display-1-lg\"><i class=\"fas fa-user-plus\"></i></span>
                    <h4 class=\"modal-title mb-5\">Введите сначала Ваш логин в игре</h4>
                    {{ form_ajax('onTypeUsername', {
                        flash: true,
                        success: '\$(\"#type-username-modal\").modal(\"hide\")'
                    }) }}
                        <div class=\"form-group\">
                            <div class=\"d-sm-flex flex-column flex-sm-row mb-3 justify-content-center\">
                                <input type=\"text\" name=\"username\" value=\"{{ username }}\" placeholder=\"Ваш логин в игре\" class=\"mr-sm-1 mb-2 mb-sm-0 form-control form-control-lg\">
                                <button type=\"submit\" class=\"ml-sm-1 btn btn-danger\">Подтвердить</button>
                            </div>
                        </div>
                    {{ form_close() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    \$('#type-username-modal').modal();
</script>
", "/var/www/demo.easydonate.ru/plugins/dontfollow/promocodes/components/partials/type_username_modal.htm", "");
    }
}
