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

/* page.html.twig */
class __TwigTemplate_3f153f1dd0f7e68fac1d5d309aa7a1b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "<!DOCTYPE html>

<html lang=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["galette_lang"] ?? null), "html", null, true);
        yield "\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "isRtl", [], "method", false, false, false, 23)) {
            yield " dir=\"rtl\"";
        }
        yield ">
    <head>
        ";
        // line 25
        yield from         $this->loadTemplate("elements/header.html.twig", "page.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["galette_lang" =>         // line 26
($context["galette_lang"] ?? null)]));
        // line 28
        yield "    </head>
    <body id=\"galette_body\" class=\"pushable dimmable";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 29)) {
            yield " loggedin";
        }
        yield " nojs\">
        <a href=\"#main-content\" class=\"skiptocontent visually-hidden focusable\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Skip to content"), "html", null, true);
        yield "</a>
        ";
        // line 31
        yield from         $this->loadTemplate("elements/navigation/navigation_sidebar.html.twig", "page.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "        ";
        yield from         $this->loadTemplate("elements/navigation/navigation_topbar.html.twig", "page.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "        <main class=\"pusher\">
            <div id=\"main\" class=\"";
        // line 34
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 34)) {
            yield "container";
        } else {
            yield " full height";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "isRtl", [], "method", false, false, false, 34)) {
                yield " rtl";
            }
        }
        yield "\">
";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 35)) {
            // line 36
            yield "    ";
            yield from             $this->loadTemplate("elements/navigation/navigation_aside.html.twig", "page.html.twig", 36)->unwrap()->yield($context);
        }
        // line 38
        yield "                <section class=\"content";
        if (array_key_exists("contentcls", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contentcls"] ?? null), "html", null, true);
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 38)) {
            yield " extended";
        }
        yield "\">
";
        // line 39
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 39)) {
            // line 40
            yield "                    <div class=\"ui basic center aligned fitted segment\">
    ";
            // line 41
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 41))) {
                // line 42
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 42), "html", null, true);
                yield "\" target=\"_blank\">
                            <img src=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 43), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 43), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 43), "html", null, true);
                yield "\" class=\"icon\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Open '%s' in a new window"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\"/>
                        </a>
    ";
            } else {
                // line 46
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
                yield "\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 46), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 46), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 46), "html", null, true);
                yield "\" class=\"icon\"/>
    ";
            }
            // line 48
            yield "                        <div class=\"ui large header\">
                            ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 49), "html", null, true);
            yield "
                            <div class=\"sub header\">";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 50)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 50)), "html", null, true);
            }
            yield "</div>
                        </div>
                    </div>
                    <a id=\"main-content\" tabindex=\"-1\"></a>
                    <h1 class=\"ui block center aligned header\" style=\"position: relative\">
";
        } else {
            // line 56
            yield "                    <div class=\"ui horizontal basic segments header\">
                        <div class=\"ui right aligned compact segment\">
                            <nav class=\"ui compact tiny menu\" aria-label=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Language menu"), "html", null, true);
            yield "\">
                                ";
            // line 59
            yield from             $this->loadTemplate("elements/language.html.twig", "page.html.twig", 59)->unwrap()->yield(CoreExtension::merge($context, ["ui" => "dropdown"]));
            // line 62
            yield "                            </nav>
                        </div>
                        <a id=\"main-content\" tabindex=\"-1\"></a>
                        <div class=\"ui center aligned segment\">
                            <h1>
";
        }
        // line 68
        yield "                                ";
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        // line 69
        yield "                            </h1>
";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 70)) {
            // line 71
            yield "                        </div>
                    </div>
";
        }
        // line 74
        yield "                    <div class=\"main-content\">
                        ";
        // line 75
        yield from         $this->loadTemplate("elements/messages_inline.html.twig", "page.html.twig", 75)->unwrap()->yield($context);
        // line 76
        yield "                        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 77
        yield "                    </div>
                </section>
            </div>
        </main>
        ";
        // line 81
        yield from         $this->loadTemplate("elements/footer.html.twig", "page.html.twig", 81)->unwrap()->yield($context);
        // line 82
        yield "        <a href=\"#\" id=\"back2top\" class=\"circular big ui icon button\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Back to top"), "html", null, true);
        yield "\">
            <i class=\"arrow up icon\" aria-hidden=\"true\"></i>
        </a>
        ";
        // line 85
        yield from         $this->loadTemplate("elements/scripts.html.twig", "page.html.twig", 85)->unwrap()->yield($context);
        // line 86
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 87
        yield "    </body>
</html>
";
        return; yield '';
    }

    // line 68
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Page content"), "html", null, true);
        return; yield '';
    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "page.html.twig";
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
        return array (  244 => 86,  236 => 76,  228 => 68,  221 => 87,  218 => 86,  216 => 85,  209 => 82,  207 => 81,  201 => 77,  198 => 76,  196 => 75,  193 => 74,  188 => 71,  186 => 70,  183 => 69,  180 => 68,  172 => 62,  170 => 59,  166 => 58,  162 => 56,  151 => 50,  147 => 49,  144 => 48,  132 => 46,  118 => 43,  113 => 42,  111 => 41,  108 => 40,  106 => 39,  95 => 38,  91 => 36,  89 => 35,  78 => 34,  75 => 33,  72 => 32,  70 => 31,  66 => 30,  60 => 29,  57 => 28,  55 => 26,  54 => 25,  45 => 23,  41 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "/var/www/galette/templates/default/page.html.twig");
    }
}
