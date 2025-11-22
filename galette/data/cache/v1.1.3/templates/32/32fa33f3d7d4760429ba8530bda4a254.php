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

/* components/forms/address.html.twig */
class __TwigTemplate_0820cd64e58c19fb0308ed04b7820ea9 extends Template
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
    <div class=\"field";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entry"] ?? null), "required", [], "any", false, false, false, 22) == true)) {
            yield " required";
        }
        yield "\">
";
        // line 23
        yield from         $this->loadTemplate("components/forms/textarea.html.twig", "components/forms/address.html.twig", 23)->unwrap()->yield(CoreExtension::merge($context, ["name" => CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 24), "id" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["entry"] ?? null), "field_id", [], "any", false, false, false, 25), "rows" => 2, "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["member"] ?? null), "address", [], "any", false, false, false, 27), "required" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["entry"] ?? null), "required", [], "any", false, false, false, 28), "disabled" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["entry"] ?? null), "disabled", [], "any", false, false, false, 29), "label" => CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["entry"] ?? null), "label", [], "any", false, false, false, 30), "notag" => true, "elt_class" => "large"]));
        // line 35
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
        return "components/forms/address.html.twig";
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
        return array (  55 => 35,  53 => 30,  52 => 29,  51 => 28,  50 => 27,  49 => 25,  48 => 24,  47 => 23,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/address.html.twig", "/var/www/galette/templates/default/components/forms/address.html.twig");
    }
}
