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

/* components/forms/select.html.twig */
class __TwigTemplate_0ebf87ae11b8353dfd0233bbb35f166a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        // line 23
        $context["raw_labels"] = (($context["raw_labels"]) ?? (false));
        // line 21
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/select.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    <select
        name=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["name"]) ?? (($context["id"] ?? null))), "html", null, true);
        yield "\"
        id=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 29
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield " required=\"required\"";
        }
        // line 30
        yield "        ";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        // line 31
        yield "        class=\"ui search dropdown\"
    >
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["option_value"] => $context["option_label"]) {
            // line 34
            yield "        <option
            value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option_value"], "html", null, true);
            yield "\"
            ";
            // line 36
            if (($context["option_value"] == ($context["value"] ?? null))) {
                yield " selected=\"selected\"";
            }
            // line 37
            yield "        >
            ";
            // line 38
            if ((($context["raw_labels"] ?? null) == true)) {
                // line 39
                yield "                ";
                yield $context["option_label"];
                yield "
            ";
            } else {
                // line 41
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option_label"], "html", null, true);
                yield "
            ";
            }
            // line 43
            yield "        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option_value'], $context['option_label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/select.html.twig";
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
        return array (  117 => 45,  110 => 43,  104 => 41,  98 => 39,  96 => 38,  93 => 37,  89 => 36,  85 => 35,  82 => 34,  78 => 33,  74 => 31,  69 => 30,  65 => 29,  61 => 28,  57 => 27,  54 => 26,  50 => 25,  45 => 21,  43 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/select.html.twig", "/var/www/galette/templates/default/components/forms/select.html.twig");
    }
}
