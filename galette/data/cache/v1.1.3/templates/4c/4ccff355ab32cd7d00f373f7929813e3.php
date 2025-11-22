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

/* components/forms/password.html.twig */
class __TwigTemplate_edec2180a3c3eed6b6a1980ac8c97c85 extends Template
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
        // line 21
        yield from         $this->loadTemplate("components/forms/input.html.twig", "components/forms/password.html.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["type" => "password", "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 23), "id" => CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 24), "required" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["entry"] ?? null), "required", [], "any", false, false, false, 25), "disabled" => CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["entry"] ?? null), "disabled", [], "any", false, false, false, 26), "label" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["entry"] ?? null), "label", [], "any", false, false, false, 27), "autocomplete" => "off", "value" => null, "component_id" => (CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 30) . "_field")]));
        // line 33
        yield from         $this->loadTemplate("components/forms/input.html.twig", "components/forms/password.html.twig", 33)->unwrap()->yield(CoreExtension::merge($context, ["type" => "password", "name" => "mdp_adh2", "id" => "mdp_adh2", "required" => CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["entry"] ?? null), "required", [], "any", false, false, false, 37), "disabled" => CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["entry"] ?? null), "disabled", [], "any", false, false, false, 38), "label" => $this->env->getFunction('_T')->getCallable()("Password confirmation:"), "autocomplete" => "off", "elt_class" => "labelalign", "value" => null]));
        // line 45
        yield "<script type=\"text/javascript\">
    \$(function() {
        ";
        // line 47
        yield from         $this->loadTemplate("elements/js/pwdcheck.js.twig", "components/forms/password.html.twig", 47)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ("#" . CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 48)), "loader" => "inline mini"]));
        // line 51
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
        return "components/forms/password.html.twig";
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
        return array (  57 => 51,  55 => 48,  54 => 47,  50 => 45,  48 => 38,  47 => 37,  46 => 33,  44 => 30,  43 => 27,  42 => 26,  41 => 25,  40 => 24,  39 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/password.html.twig", "/var/www/galette/templates/default/components/forms/password.html.twig");
    }
}
