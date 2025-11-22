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

/* components/forms/textarea.html.twig */
class __TwigTemplate_af9c36dba11f3d293d76d5459b88d7e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'element' => [$this, 'block_element'],
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
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/textarea.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->yieldParentBlock("label", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 27
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <textarea
        name=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["name"]) ?? (($context["id"] ?? null))), "html", null, true);
        yield "\"
        id=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
        cols=\"";
        // line 31
        (((array_key_exists("cols", $context) &&  !(null === ($context["cols"] ?? null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cols"] ?? null), "html", null, true)) : (yield 50));
        yield "\"
        rows=\"";
        // line 32
        (((array_key_exists("rows", $context) &&  !(null === ($context["rows"] ?? null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rows"] ?? null), "html", null, true)) : (yield 6));
        yield "\"
        ";
        // line 33
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield " required=\"required\"";
        }
        // line 34
        yield "        ";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        // line 35
        yield "        ";
        if (array_key_exists("title", $context)) {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 36
        yield "        ";
        if (array_key_exists("maxlength", $context)) {
            yield " maxlength=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxlength"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 37
        yield "        ";
        if (array_key_exists("elt_class", $context)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["elt_class"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 38
        yield "        ";
        if (array_key_exists("autocomplete", $context)) {
            yield " autocomplete=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["autocomplete"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 39
        yield "        ";
        if (array_key_exists("size", $context)) {
            yield " size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["size"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 40
        yield "        >";
        if ( !(($context["value"] ?? null) === null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        }
        yield "</textarea><br/>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/textarea.html.twig";
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
        return array (  127 => 40,  120 => 39,  113 => 38,  106 => 37,  99 => 36,  92 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  64 => 28,  60 => 27,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/textarea.html.twig", "/var/www/galette/templates/default/components/forms/textarea.html.twig");
    }
}
