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

/* components/forms/status.html.twig */
class __TwigTemplate_7cee0287bd20de23263db9a7a9a4f7cf extends Template
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
        return "components/forms/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("components/forms/select.html.twig", "components/forms/status.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <select name=\"id_statut\" id=\"id_statut\" class=\"ui dropdown\"";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_statut", [], "any", true, true, false, 24) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_statut", [], "any", false, false, false, 24) == 1))) {
            yield " required=\"required\"";
        }
        yield ">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 26
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "status", [], "any", false, false, false, 26))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    </select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/status.html.twig";
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
        return array (  80 => 28,  65 => 26,  61 => 25,  51 => 24,  47 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/status.html.twig", "/var/www/galette/templates/default/components/forms/status.html.twig");
    }
}
