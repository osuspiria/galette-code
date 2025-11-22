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

/* elements/modes.html.twig */
class __TwigTemplate_b7a9ac6e84d1e5c504ca4bd77e9a41fe extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 21)) {
            // line 22
            yield "    <span class=\"tooltip ui red icon circular label\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("You are actually logged-in as superadmin. Some functionnalities may not be available since this is *not* a regular member."), "html", null, true);
            yield "\">
        <i class=\"shield icon\" aria-hidden=\"true\"></i>
        ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Superadmin"), "html", null, true);
            yield "
    </span>
";
        }
        // line 27
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            // line 28
            yield "    <span class=\"tooltip ui orange icon circular label\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("This application runs under DEMO mode, all features may not be available."), "html", null, true);
            yield "\">
        <i class=\"gamepad icon\" aria-hidden=\"true\"></i>
        ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Demonstration"), "html", null, true);
            yield "
    </span>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/modes.html.twig";
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
        return array (  60 => 30,  54 => 28,  52 => 27,  46 => 24,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/modes.html.twig", "/var/www/galette/templates/default/elements/modes.html.twig");
    }
}
