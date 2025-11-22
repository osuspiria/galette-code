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

/* components/forms/gender.html.twig */
class __TwigTemplate_076ca851d5dc4969e583c45d38d3403f extends Template
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
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/gender.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <div class=\"grouped fields\">
        ";
        // line 25
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 35
        yield "
        ";
        // line 36
        yield from $this->unwrap()->yieldBlock('element', $context, $blocks);
        // line 50
        yield "    </div>
";
        return; yield '';
    }

    // line 25
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "            <label>
            ";
        // line 27
        if (($context["masschange"] ?? null)) {
            // line 28
            yield "                ";
            // line 29
            yield "                ";
            // line 30
            yield "                <input type=\"checkbox\" name=\"mass_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entry"] ?? null), "field_id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" class=\"mass_checkbox\"/>
            ";
        }
        // line 32
        yield "                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "
            </label>
        ";
        return; yield '';
    }

    // line 36
    public function block_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "        <div class=\"field inline\">
            <input type=\"radio\" name=\"sexe_adh\" id=\"gender_nc\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::NC"), "html", null, true);
        yield "\"";
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isMan", [], "method", false, false, false, 38) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isWoman", [], "method", false, false, false, 38))) {
            yield " checked=\"checked\"";
        }
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        yield "/>
            <label for=\"gender_nc\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unspecified"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"field inline\">
            <input type=\"radio\" name=\"sexe_adh\" id=\"gender_man\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::MAN"), "html", null, true);
        yield "\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isMan", [], "method", false, false, false, 42)) {
            yield " checked=\"checked\"";
        }
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        yield "/>
            <label for=\"gender_man\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Man"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"field inline\">
            <input type=\"radio\" name=\"sexe_adh\" id=\"gender_woman\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Adherent::WOMAN"), "html", null, true);
        yield "\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isWoman", [], "method", false, false, false, 46)) {
            yield " checked=\"checked\"";
        }
        if ((array_key_exists("disabled", $context) && (($context["disabled"] ?? null) == true))) {
            yield " disabled=\"disabled\"";
        }
        yield "/>
            <label for=\"gender_woman\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Woman"), "html", null, true);
        yield "</label>
        </div>
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/gender.html.twig";
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
        return array (  149 => 47,  138 => 46,  132 => 43,  121 => 42,  115 => 39,  104 => 38,  101 => 37,  97 => 36,  88 => 32,  82 => 30,  80 => 29,  78 => 28,  76 => 27,  73 => 26,  69 => 25,  63 => 50,  61 => 36,  58 => 35,  56 => 25,  53 => 24,  49 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/gender.html.twig", "/var/www/galette/templates/default/components/forms/gender.html.twig");
    }
}
