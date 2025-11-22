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

/* public_page.html.twig */
class __TwigTemplate_f2a55351d5395f172c328379e743d9a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
        yield " class=\"public_page";
        if (array_key_exists("additionnal_html_class", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["additionnal_html_class"] ?? null), "html", null, true);
        }
        yield "\">
    <head>
        ";
        // line 25
        yield from         $this->loadTemplate("elements/header.html.twig", "public_page.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["galette_lang" =>         // line 26
($context["galette_lang"] ?? null)]));
        // line 28
        yield "    </head>
    <body class=\"";
        // line 29
        if ((array_key_exists("body_class", $context) && (($context["body_class"] ?? null) == "front_page"))) {
            yield "front-page ";
        }
        yield "pushable";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 29) &&  !array_key_exists("ext_auth", $context))) {
            yield " loggedin";
        }
        yield " nojs\">
        <a href=\"#main-content\" class=\"skiptocontent visually-hidden focusable\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Skip to content"), "html", null, true);
        yield "</a>
        ";
        // line 31
        yield from         $this->loadTemplate("elements/navigation/navigation_sidebar.html.twig", "public_page.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "        ";
        yield from         $this->loadTemplate("elements/navigation/navigation_topbar.html.twig", "public_page.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "        <main class=\"pusher\">
            <div id=\"main\" class=\"";
        // line 34
        if (((((($context["cur_route"] ?? null) == "login") || (($context["cur_route"] ?? null) == "password-lost")) || (($context["cur_route"] ?? null) == "password-recovery")) || (($context["cur_route"] ?? null) == "directlink"))) {
            yield "text ";
        }
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 34) || array_key_exists("ext_auth", $context))) {
            yield "ui container";
        } else {
            yield "full height";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "isRtl", [], "method", false, false, false, 34)) {
                yield " rtl";
            }
        }
        yield "\">
";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 35) &&  !array_key_exists("ext_auth", $context))) {
            // line 36
            yield "                ";
            yield from             $this->loadTemplate("elements/navigation/navigation_aside.html.twig", "public_page.html.twig", 36)->unwrap()->yield($context);
        }
        // line 38
        yield "                <section class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 38) &&  !array_key_exists("ext_auth", $context))) {
            yield "content";
        } else {
            yield "vertically centered";
        }
        yield "\">
";
        // line 39
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 39) || array_key_exists("ext_auth", $context))) {
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
                yield "\" class=\"logo\" title=\"";
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
                yield "\" class=\"logo\"/>
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
                        <a id=\"main-content\" tabindex=\"-1\"></a>
                        <div class=\"ui center aligned segment\">
                            <h1>
";
        }
        // line 61
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
        yield "
                            </h1>
";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 63) &&  !array_key_exists("ext_auth", $context))) {
            // line 64
            yield "                        </div>
                    </div>
";
        }
        // line 67
        yield "                    <div class=\"main-content\">
                        ";
        // line 68
        yield from         $this->loadTemplate("elements/messages_inline.html.twig", "public_page.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "                        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 70
        yield "                    </div>
                </section>
            </div>
        </main>
        ";
        // line 74
        yield from         $this->loadTemplate("elements/footer.html.twig", "public_page.html.twig", 74)->unwrap()->yield($context);
        // line 75
        yield "        <a href=\"#\" id=\"back2top\" class=\"circular big ui icon button\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Back to top"), "html", null, true);
        yield "\">
            <i class=\"arrow up icon\" aria-hidden=\"true\"></i>
        </a>
        ";
        // line 78
        yield from         $this->loadTemplate("elements/scripts.html.twig", "public_page.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 80
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Public page content"), "html", null, true);
        return; yield '';
    }

    // line 79
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
        return "public_page.html.twig";
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
        return array (  234 => 79,  226 => 69,  219 => 80,  216 => 79,  214 => 78,  207 => 75,  205 => 74,  199 => 70,  196 => 69,  194 => 68,  191 => 67,  186 => 64,  184 => 63,  178 => 61,  171 => 56,  160 => 50,  156 => 49,  153 => 48,  141 => 46,  127 => 43,  122 => 42,  120 => 41,  117 => 40,  115 => 39,  106 => 38,  102 => 36,  100 => 35,  86 => 34,  83 => 33,  80 => 32,  78 => 31,  74 => 30,  64 => 29,  61 => 28,  59 => 26,  58 => 25,  44 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "public_page.html.twig", "/var/www/galette/templates/default/public_page.html.twig");
    }
}
