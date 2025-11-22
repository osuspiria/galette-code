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

/* elements/navigation/navigation_aside.html.twig */
class __TwigTemplate_e62273db57871c544aabeabf282981b8 extends Template
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
        yield "<aside id=\"sidemenu\" class=\"ui computer toc";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 21)) {
            yield " compact_menu";
        }
        yield "\">
    ";
        // line 22
        yield from         $this->loadTemplate("elements/logged_user.html.twig", "elements/navigation/navigation_aside.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["ui" => "menu"]));
        // line 25
        yield "
";
        // line 26
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 26)) {
            // line 27
            yield "    <div class=\"ui basic center aligned fitted segment\">
    ";
            // line 28
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 28))) {
                // line 29
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 29), "html", null, true);
                yield "\" target=\"_blank\">
            <img src=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 30), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 30), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 30), "html", null, true);
                yield "\" class=\"icon\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Open '%s' in a new window"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\"/>
        </a>
    ";
            } else {
                // line 33
                yield "        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 33), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 33), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 33), "html", null, true);
                yield "\" class=\"icon\"/>
    ";
            }
            // line 35
            yield "        <div class=\"ui block huge brand header\">
            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 36), "html", null, true);
            yield "
            ";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 37)) {
                yield "<div class=\"sub tiny header\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 37)), "html", null, true);
                yield "</div>";
            }
            // line 38
            yield "        </div>
    </div>
";
        }
        // line 41
        yield "
    <nav class=\"ui vertical";
        // line 42
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 42)) {
            yield " accordion compact";
        } else {
            yield " tiny icon";
        }
        yield " fluid menu\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Main menu"), "html", null, true);
        yield "\">
        ";
        // line 43
        $context["mode"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 43)) ? ("compact") : ("default"));
        // line 44
        yield "        ";
        yield from         $this->loadTemplate("elements/navigation/navigation_items.html.twig", "elements/navigation/navigation_aside.html.twig", 44)->unwrap()->yield(CoreExtension::merge($context, ["mode" =>         // line 45
($context["mode"] ?? null)]));
        // line 47
        yield "    </nav>

    <div class=\"ui basic fitted segment\">
        <div class=\"ui toggle mini checkbox\">
            <input type=\"checkbox\" name=\"compactmenu\" id=\"compactmenu\" class=\"hidden\"";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 51)) {
            yield " checked=\"checked\"";
        }
        yield ">
            <label for=\"compactmenu\"";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 52)) {
            yield " class=\"tooltip\" data-html=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Compact menu"), "html", null, true);
            yield "\"";
        }
        yield ">
                ";
        // line 53
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 53)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Compact menu"), "html", null, true);
        }
        // line 54
        yield "            </label>
        </div>
    </div>
</aside>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigation/navigation_aside.html.twig";
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
        return array (  149 => 54,  145 => 53,  137 => 52,  131 => 51,  125 => 47,  123 => 45,  121 => 44,  119 => 43,  109 => 42,  106 => 41,  101 => 38,  95 => 37,  91 => 36,  88 => 35,  76 => 33,  62 => 30,  57 => 29,  55 => 28,  52 => 27,  50 => 26,  47 => 25,  45 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/navigation/navigation_aside.html.twig", "/var/www/galette/templates/default/elements/navigation/navigation_aside.html.twig");
    }
}
