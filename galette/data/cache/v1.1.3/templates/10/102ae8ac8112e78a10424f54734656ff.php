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

/* components/forms/company.html.twig */
class __TwigTemplate_1727f4047b7ae98d1a9833ca87e82452 extends Template
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
        yield "<div class=\"grouped fields\">
    <div class=\"field\">
";
        // line 23
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isCompany", [], "method", false, false, false, 23)) {
            // line 24
            yield "    ";
            $context["component_class"] = ((($context["component_class"]) ?? ("field")) . " nocompany");
        }
        // line 26
        yield from         $this->loadTemplate("components/forms/text.html.twig", "components/forms/company.html.twig", 26)->unwrap()->yield(CoreExtension::merge($context, ["name" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 27), "id" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 28), "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["member"] ?? null), "company_name", [], "any", false, false, false, 29), "required" => CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["entry"] ?? null), "required", [], "any", false, false, false, 30), "disabled" => CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["entry"] ?? null), "disabled", [], "any", false, false, false, 31), "label" => CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["entry"] ?? null), "label", [], "any", false, false, false, 32), "component_id" => "company_field", "component_class" => ((        // line 34
$context["component_class"]) ?? ("field"))]));
        // line 37
        yield "    </div>
    <div class=\"field\">
";
        // line 39
        yield from         $this->loadTemplate("components/forms/checkbox.html.twig", "components/forms/company.html.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ["name" => "is_company", "id" => "is_company", "value" => "1", "label" => $this->env->getFunction('_T')->getCallable()("Is company?"), "title" => $this->env->getFunction('_T')->getCallable()("Is member a company?"), "tip" => $this->env->getFunction('_T')->getCallable()("Do you manage a non profit organization, or a company? If you do so, check the box, and then enter its name in the field that will appear."), "checked" => CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["member"] ?? null), "isCompany", [], "method", false, false, false, 46)]));
        // line 49
        yield "    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/company.html.twig";
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
        return array (  64 => 49,  62 => 46,  61 => 39,  57 => 37,  55 => 34,  54 => 32,  53 => 31,  52 => 30,  51 => 29,  50 => 28,  49 => 27,  48 => 26,  44 => 24,  42 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/company.html.twig", "/var/www/galette/templates/default/components/forms/company.html.twig");
    }
}
