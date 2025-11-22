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

/* components/forms/checkbox.html.twig */
class __TwigTemplate_05d97fc66278322cceb05f8b6089f11c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "components/forms/input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["inline"] = true;
        // line 21
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/checkbox.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        $context["type"] = "checkbox";
        // line 26
        yield "    ";
        yield from $this->yieldParentBlock("component", $context, $blocks);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/checkbox.html.twig";
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
        return array (  57 => 26,  54 => 25,  50 => 24,  45 => 21,  43 => 22,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/checkbox.html.twig", "/var/www/galette/templates/default/components/forms/checkbox.html.twig");
    }
}
