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

/* components/forms/payment_types.html.twig */
class __TwigTemplate_d6dcfe11a43f57350c3ddc3be0cbf20c extends Template
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
        yield "<div class=\"";
        if (array_key_exists("show_inline", $context)) {
            yield "inline ";
        }
        yield "field";
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield " required";
        }
        yield "\">
    <label for=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["varname"] ?? null), "html", null, true);
        yield "\">";
        if (array_key_exists("label", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Payment type:"), "html", null, true);
        }
        yield "</label>
    <select
        name=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["varname"] ?? null), "html", null, true);
        yield "\"
        id=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["varname"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 26
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield " required=\"required\"";
        }
        // line 27
        yield "        ";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        // line 28
        yield "        class=\"ui search dropdown\"
    >
";
        // line 30
        if (array_key_exists("empty", $context)) {
            // line 31
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["empty"] ?? null), "value", [], "any", false, false, false, 31), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["empty"] ?? null), "label", [], "any", false, false, false, 31), "html", null, true);
            yield "</option>
";
        }
        // line 33
        if ( !array_key_exists("ptypes", $context)) {
            // line 34
            yield "    ";
            $context["ptypes"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Repository\\PaymentTypes", "getAll");
        }
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["ptypes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ptype"]) {
            // line 37
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\"";
            if ((($context["current"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "id", [], "any", false, false, false, 37))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ptype"], "getName", [], "method", false, false, false, 37), "html", null, true);
            yield "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </select>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/payment_types.html.twig";
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
        return array (  116 => 39,  101 => 37,  97 => 36,  93 => 34,  91 => 33,  83 => 31,  81 => 30,  77 => 28,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  49 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/payment_types.html.twig", "/var/www/galette/templates/default/components/forms/payment_types.html.twig");
    }
}
