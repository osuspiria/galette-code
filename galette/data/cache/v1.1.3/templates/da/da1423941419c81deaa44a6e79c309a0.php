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

/* components/forms/search.html.twig */
class __TwigTemplate_b8f99b1613add0b2d14bdc6192e2f43c extends Template
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
        yield from         $this->loadTemplate("components/forms/input.html.twig", "components/forms/search.html.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["type" => "text", "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 23), "id" => CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 24), "required" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["entry"] ?? null), "required", [], "any", false, false, false, 25), "disabled" => CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["entry"] ?? null), "disabled", [], "any", false, false, false, 26), "label" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["entry"] ?? null), "label", [], "any", false, false, false, 27), "autocomplete" => "off", "search_id" => (CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 29) . "_field"), "elt_class" => "prompt"]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/search.html.twig";
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
        return array (  44 => 29,  43 => 27,  42 => 26,  41 => 25,  40 => 24,  39 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/search.html.twig", "/var/www/galette/templates/default/components/forms/search.html.twig");
    }
}
