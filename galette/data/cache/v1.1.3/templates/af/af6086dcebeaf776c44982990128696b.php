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

/* components/forms/account.html.twig */
class __TwigTemplate_2791eda9b73b1b8563914f2d1abfebe0 extends Template
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
        $this->parent = $this->loadTemplate("components/forms/select.html.twig", "components/forms/account.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <select name=\"activite_adh\" id=\"activite_adh\" class=\"ui dropdown\"";
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        if ((array_key_exists("required", $context) && (($context["required"] ?? null) == 1))) {
            yield " required=\"required\"";
        }
        yield ">
        <option value=\"1\" ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 25) == 1)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active"), "html", null, true);
        yield "</option>
        <option value=\"0\" ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 26) == 0)) {
            yield "selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive"), "html", null, true);
        yield "</option>
    </select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/account.html.twig";
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
        return array (  69 => 26,  61 => 25,  51 => 24,  47 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/account.html.twig", "/var/www/galette/templates/default/components/forms/account.html.twig");
    }
}
