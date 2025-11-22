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

/* elements/navigation/navigation_topbar.html.twig */
class __TwigTemplate_7d85ca53e531c158d608453740c40262 extends Template
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
        yield "<header id=\"top-navbar\" class=\"ui top fixed menu\">
    <a class=\"toc item\" tabindex=\"0\">
        <i class=\"sidebar icon\" aria-hidden=\"true\"></i>
        <span class=\"visually-hidden\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Menu"), "html", null, true);
        yield "</span>
    </a>
    <div class=\"header item\">
        <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
        yield "\" width=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 27), "html", null, true);
        yield "\" height=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 27), "html", null, true);
        yield "\" alt=\"[ Galette ]\" class=\"logo\" />
        <span>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
    </div>
    <nav class=\"ui fluid container\">
        ";
        // line 31
        yield from         $this->loadTemplate("elements/navigation/public_pages.html.twig", "elements/navigation/navigation_topbar.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["tips_position" => "bottom center", "sign_in" => true, "sign_in_side" => "right", "mode" => "default"]));
        // line 37
        yield "
        ";
        // line 38
        yield from         $this->loadTemplate("elements/language.html.twig", "elements/navigation/navigation_topbar.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["ui" => "dropdown"]));
        // line 41
        yield "
        ";
        // line 42
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            // line 43
            yield "            <div class=\"item\">
                ";
            // line 44
            yield from             $this->loadTemplate("elements/modes.html.twig", "elements/navigation/navigation_topbar.html.twig", 44)->unwrap()->yield($context);
            // line 45
            yield "            </div>
        ";
        }
        // line 47
        yield "    </nav>
</header>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigation/navigation_topbar.html.twig";
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
        return array (  84 => 47,  80 => 45,  78 => 44,  75 => 43,  73 => 42,  70 => 41,  68 => 38,  65 => 37,  63 => 31,  57 => 28,  49 => 27,  43 => 24,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/navigation/navigation_topbar.html.twig", "/var/www/galette/templates/default/elements/navigation/navigation_topbar.html.twig");
    }
}
