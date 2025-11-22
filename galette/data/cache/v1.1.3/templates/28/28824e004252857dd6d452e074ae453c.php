<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/password_recover.html.twig */
class __TwigTemplate_22caebe347341d8986b5e8481152f8e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "public_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["body_class"] = "front_page";
        // line 21
        $this->parent = $this->loadTemplate("public_page.html.twig", "pages/password_recover.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "        <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("do-password-recovery"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
            <div class=\"ui segment\">
                <div class=\"field\" id=\"mdp_adh_field\">
                    <div class=\"ui left icon input\">
                        <i class=\"lock icon\" aria-hidden=\"true\"></i><label for=\"mdp_adh\" class=\"visually-hidden\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New password:"), "html", null, true);
        yield "</label>
                        <input type=\"password\" name=\"mdp_adh\" id=\"mdp_adh\" value=\"\" required=\"required\" autofocus placeholder=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New password:"), "html", null, true);
        yield "\"/>
                    </div>
                </div>
                <div class=\"field\">
                    <div class=\"ui left icon input\">
                        <i class=\"lock icon\" aria-hidden=\"true\"></i><label for=\"mdp_adh2\" class=\"visually-hidden\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Confirmation:"), "html", null, true);
        yield "</label>
                        <input type=\"password\" name=\"mdp_adh2\" id=\"mdp_adh2\" value=\"\" required=\"required\" placeholder=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Confirmation:"), "html", null, true);
        yield "\"/>
                    </div>
                </div>
                <input type=\"submit\" name=\"change_passwd\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change my password"), "html", null, true);
        yield "\" class=\"ui fluid large primary submit button\"/>
                <input type=\"hidden\" name=\"hash\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hash"] ?? null), "html", null, true);
        yield "\"/>
                ";
        // line 42
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/password_recover.html.twig", 42)->unwrap()->yield($context);
        // line 43
        yield "            </div>
        </form>
";
        return; yield '';
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        yield "<script type=\"text/javascript\">
    \$(function() {
        ";
        // line 50
        yield from         $this->loadTemplate("elements/js/pwdcheck.js.twig", "pages/password_recover.html.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#mdp_adh", "loader" => "inline mini"]));
        // line 54
        yield "    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/password_recover.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  112 => 54,  110 => 50,  106 => 48,  102 => 47,  95 => 43,  93 => 42,  89 => 41,  85 => 40,  79 => 37,  75 => 36,  67 => 31,  63 => 30,  55 => 26,  51 => 25,  46 => 21,  44 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/password_recover.html.twig", "/var/www/galette/templates/default/pages/password_recover.html.twig");
    }
}
