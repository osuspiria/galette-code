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

/* components/forms/titles.html.twig */
class __TwigTemplate_d642641e7ab83e8e0e53db7dfc815f54 extends Template
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
        $this->parent = $this->loadTemplate("components/forms/select.html.twig", "components/forms/titles.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        $context["values"] = "";
        // line 25
        yield "    <select name=\"titre_adh\" id=\"titre_adh\" class=\"ui dropdown\"";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield " required=\"required\"";
        }
        yield ">
        <option value=\"";
        // line 26
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == true))) {
            yield "-1";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not supplied"), "html", null, true);
        yield "</option>
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["titles_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 28
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\"";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "title", [], "any", false, false, false, 28) != null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "title", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) == CoreExtension::getAttribute($this->env, $this->source, $context["title"], "id", [], "any", false, false, false, 28)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["title"], "long", [], "any", false, false, false, 28), "html", null, true);
            yield "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/titles.html.twig";
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
        return array (  91 => 30,  76 => 28,  72 => 27,  64 => 26,  54 => 25,  51 => 24,  47 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/titles.html.twig", "/var/www/galette/templates/default/components/forms/titles.html.twig");
    }
}
