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

/* components/forms/date.html.twig */
class __TwigTemplate_8abcf30768c77327bac993fd9375a560 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
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
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/date.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        $context["type"] = "text";
        // line 25
        yield "    ";
        $context["placeholder"] = $this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format");
        // line 26
        yield "    ";
        if ((((($context["id"] ?? null) == "ddn_adh") && (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 26) != "")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "birthdate", [], "any", false, false, false, 26) != ""))) {
            // line 27
            yield "        ";
            $context["example"] = (("<span id=\"member_age\">" . CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getAge", [], "method", false, false, false, 27)) . "</span>");
            // line 28
            yield "    ";
        }
        // line 29
        yield "    ";
        yield from $this->yieldParentBlock("component", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 32
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    <div class=\"ui calendar\" id=\"birth-rangestart\">
        <div class=\"ui input left icon\">
            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
            ";
        // line 36
        yield from $this->yieldParentBlock("element", $context, $blocks);
        yield "
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/date.html.twig";
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
        return array (  84 => 36,  79 => 33,  75 => 32,  67 => 29,  64 => 28,  61 => 27,  58 => 26,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/date.html.twig", "/var/www/galette/templates/default/components/forms/date.html.twig");
    }
}
