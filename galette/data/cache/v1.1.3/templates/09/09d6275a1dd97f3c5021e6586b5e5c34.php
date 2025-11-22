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

/* components/forms/hidden.html.twig */
class __TwigTemplate_f161105c4069f41ff1e811c9022520ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'label' => [$this, 'block_label'],
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
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/hidden.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        $context["type"] = "hidden";
        // line 25
        yield "    ";
        $context["notag"] = true;
        // line 26
        yield "    ";
        $context["title"] = "";
        // line 27
        yield "    ";
        $context["required"] = "";
        // line 28
        yield "    ";
        $context["disabled"] = "";
        // line 29
        yield "    ";
        yield from $this->yieldParentBlock("component", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 31
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/hidden.html.twig";
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
        return array (  75 => 31,  67 => 29,  64 => 28,  61 => 27,  58 => 26,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/hidden.html.twig", "/var/www/galette/templates/default/components/forms/hidden.html.twig");
    }
}
