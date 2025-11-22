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

/* components/forms/captcha.html.twig */
class __TwigTemplate_afe6cab1a573d6ad09971846930655e2 extends Template
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
        $this->parent = $this->loadTemplate("components/forms/input.html.twig", "components/forms/captcha.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        $context["required"] = true;
        // line 25
        yield "    ";
        $context["type"] = "gaptcha";
        // line 26
        yield "    ";
        $context["name"] = "gaptcha";
        // line 27
        yield "    ";
        $context["id"] = "gaptcha";
        // line 28
        yield "    ";
        $context["value"] = null;
        // line 29
        yield "    ";
        $context["example"] = $this->env->getFunction('_T')->getCallable()("(numbers only)");
        // line 30
        yield "    ";
        $context["tip"] = $this->env->getFunction('_T')->getCallable()("This field is required trying to avoid registration spam. We are sorry for the inconvennience.");
        // line 31
        yield "    ";
        $context["component_class"] = "field";
        // line 32
        yield "    ";
        $context["elt_class"] = "required";
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("component", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 36
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        $context["label"] = $this->env->getFunction('_T')->getCallable()("Captcha");
        // line 38
        yield "    ";
        yield from $this->yieldParentBlock("label", $context, $blocks);
        yield "
    <p><span class=\"ui medium red text\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["gaptcha"] ?? null), "generateQuestion", [], "method", false, false, false, 39), "html", null, true);
        yield "</span></p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/forms/captcha.html.twig";
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
        return array (  99 => 39,  94 => 38,  91 => 37,  87 => 36,  79 => 33,  76 => 32,  73 => 31,  70 => 30,  67 => 29,  64 => 28,  61 => 27,  58 => 26,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/forms/captcha.html.twig", "/var/www/galette/templates/default/components/forms/captcha.html.twig");
    }
}
