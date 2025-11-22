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

/* elements/navigate.html.twig */
class __TwigTemplate_fe8f0a813e9099da7a29321b3978df16 extends Template
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
        if ((array_key_exists("navigate", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["navigate"] ?? null)) != 0))) {
            // line 22
            yield "    <nav class=\"ui mini inverted pagination menu\">
        <a
            ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "prev", [], "any", true, true, false, 24)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(($context["mpath"] ?? null), ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "prev", [], "any", false, false, false, 24)]), "html", null, true);
                yield "\"";
            }
            // line 25
            yield "            class=\"item";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "prev", [], "any", true, true, false, 25)) {
                yield " disabled";
            }
            yield "\"
            title=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Previous"));
            yield "\"
        >
            <i class=\"step backward icon\" aria-hidden=\"true\"></i>
            <span class=\"visually-hidden\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Previous"), "html", null, true);
            yield "</span>
        </a>
        <div class=\"item\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "pos", [], "any", false, false, false, 31), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "count", [], "any", false, false, false, 31), "html", null, true);
            yield "</div>
        <a
            ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "next", [], "any", true, true, false, 33)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(($context["mpath"] ?? null), ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "next", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\"";
            }
            // line 34
            yield "            class=\"item";
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["navigate"] ?? null), "next", [], "any", true, true, false, 34)) {
                yield " disabled";
            }
            yield "\"
            title=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Next"));
            yield "\"
        >
            <span class=\"visually-hidden\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Next"), "html", null, true);
            yield "</span>
            <i class=\"step forward icon\" aria-hidden=\"true\"></i>
        </a>
    </nav>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigate.html.twig";
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
        return array (  93 => 37,  88 => 35,  81 => 34,  75 => 33,  68 => 31,  63 => 29,  57 => 26,  50 => 25,  44 => 24,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/navigate.html.twig", "/var/www/galette/templates/default/elements/navigate.html.twig");
    }
}
