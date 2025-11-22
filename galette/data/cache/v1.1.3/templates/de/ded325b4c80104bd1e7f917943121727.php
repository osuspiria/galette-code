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

/* pages/404.html.twig */
class __TwigTemplate_a54f87ba8b7bf0448a5d5bf5b90c47e3 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["galette_lang"] ?? null), "html", null, true);
        yield "\" class=\"public_page\">
    <head>
        ";
        // line 24
        yield from         $this->loadTemplate("elements/header.html.twig", "pages/404.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "    </head>
    <body>
        <div class=\"ui container\">
            <header class=\"ui basic center aligned segment\">
                <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
        yield "\" width=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 29), "html", null, true);
        yield "\" height=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 29), "html", null, true);
        yield "\" alt=\"[ Galette ]\" />
            </header>
            <div class=\"ui red message\">
                <h2 class=\"ui center aligned header\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Page not found"), "html", null, true);
        yield "</h2>
            </div>
            <div class=\"ui basic fitted center aligned segment\">
                <p class=\"ui large text\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Sorry, the page you are looking for could not be found."), "html", null, true);
        yield "</p>
            </div>
            <nav class=\"ui basic center aligned segment\">
                <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("slash"), "html", null, true);
        yield "\" class=\"ui labeled icon primary button\">
                    <i class=\"home icon\" aria-hidden=\"true\"></i>
                    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Home"), "html", null, true);
        yield "
                </a>
            </nav>
        </div>

        ";
        // line 45
        yield from         $this->loadTemplate("elements/footer.html.twig", "pages/404.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "    </body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/404.html.twig";
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
        return array (  91 => 46,  89 => 45,  81 => 40,  76 => 38,  70 => 35,  64 => 32,  54 => 29,  48 => 25,  46 => 24,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/404.html.twig", "/var/www/galette/templates/default/pages/404.html.twig");
    }
}
