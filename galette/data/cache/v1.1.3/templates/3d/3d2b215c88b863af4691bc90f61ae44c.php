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

/* elements/logged_user.html.twig */
class __TwigTemplate_0596525392496a2819b48448ee8c3bbb extends Template
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
        if (array_key_exists("ui", $context)) {
            // line 22
            yield "    ";
            if ((($context["ui"] ?? null) == "item")) {
                // line 23
                yield "       ";
                $context["component_classes"] = "item";
                // line 24
                yield "    ";
            } elseif ((($context["ui"] ?? null) == "menu")) {
                // line 25
                yield "       ";
                $context["component_classes"] = "ui text compact small fluid menu";
                // line 26
                yield "    ";
            }
        }
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isLogged", [], "method", false, false, false, 28)) {
            // line 29
            yield "    ";
            if ((($context["ui"] ?? null) == "item")) {
                // line 30
                yield "        <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["component_classes"] ?? null), "html", null, true);
                yield "\">
            <div class=\"ui basic center aligned fitted segment\">
                <span class=\"ui tiny header\">";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [], "method", false, false, false, 32);
                yield "</span>
            </div>
            <a
                href=\"#\"
                class=\"ui fluid darkmode";
                // line 36
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 36)) {
                    yield " black";
                }
                yield " basic button\"
            >
                <i class=\"icon adjust\" aria-hidden=\"true\"></i>
                ";
                // line 39
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 39)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
                }
                // line 40
                yield "            </a>
            <a
                class=\"ui fluid ";
                // line 42
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 42)) {
                    yield "purple";
                } else {
                    yield "red";
                }
                yield " basic button\"
                href=\"";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 43)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("unimpersonate"), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logout"), "html", null, true);
                }
                yield "\"
            >
                <i class=\"icon ";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 45)) {
                    yield "user secret";
                } else {
                    yield "sign out alt";
                }
                yield "\" aria-hidden=\"true\"></i>
                ";
                // line 46
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 46)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unimpersonate"), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Log off"), "html", null, true);
                }
                // line 47
                yield "            </a>
        </div>
    ";
            } else {
                // line 50
                yield "        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "getCompactMenu", [], "method", false, false, false, 50)) {
                    // line 51
                    yield "            <nav class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["component_classes"] ?? null), "html", null, true);
                    yield "\" aria-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("User menu"), "html", null, true);
                    yield "\">
                <div class=\"ui item\">
                    <i class=\"user circle big icon\" aria-hidden=\"true\"></i>
                    ";
                    // line 54
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [], "method", false, false, false, 54);
                    yield "
                </div>
                <div class=\"right menu\">
                    <div class=\"item\">
                        <div class=\"ui icon buttons\">
                            <a
                                href=\"#\"
                                class=\"ui darkmode";
                    // line 61
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 61)) {
                        yield " black";
                    }
                    yield " icon button\"
                                title=\"";
                    // line 62
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 62)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
                    }
                    yield "\"
                            >
                                <i class=\"icon adjust\" aria-hidden=\"true\"></i>
                                <span class=\"visually-hidden\">";
                    // line 65
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 65)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
                    }
                    yield "</span>
                            </a>
                            <a
                                class=\"ui ";
                    // line 68
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 68)) {
                        yield "purple";
                    } else {
                        yield "red";
                    }
                    yield " icon button\"
                                href=\"";
                    // line 69
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 69)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("unimpersonate"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logout"), "html", null, true);
                    }
                    yield "\"
                                title=\"";
                    // line 70
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 70)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unimpersonate"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Log off"), "html", null, true);
                    }
                    yield "\"
                                data-position=\"bottom right\"
                            >
                                <i class=\"icon ";
                    // line 73
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 73)) {
                        yield "user secret";
                    } else {
                        yield "sign out alt";
                    }
                    yield "\" aria-hidden=\"true\"></i>
                                <span class=\"visually-hidden\">";
                    // line 74
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 74)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unimpersonate"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Log off"), "html", null, true);
                    }
                    yield "</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class=\"ui basic compact fitted segment\">
                ";
                    // line 81
                    yield from                     $this->loadTemplate("elements/modes.html.twig", "elements/logged_user.html.twig", 81)->unwrap()->yield($context);
                    // line 82
                    yield "            </div>
        ";
                } else {
                    // line 84
                    yield "            ";
                    $context["component_classes"] = "ui vertical centered tiny icon fluid menu";
                    // line 85
                    yield "            <nav id=\"logoutmenu\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["component_classes"] ?? null), "html", null, true);
                    yield "\" aria-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("User menu"), "html", null, true);
                    yield "\">
                <div class=\"ui dropdown navigation item tooltip\" data-html=\"";
                    // line 86
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [], "method", false, false, false, 86);
                    yield "\" data-position=\"right center\">
                    <i class=\"user circle icon\" aria-hidden=\"true\"></i>
                    <span class=\"visually-hidden\">";
                    // line 88
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [], "method", false, false, false, 88);
                    yield "</span>
                    <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
                    <div class=\"menu\">
                        <div class=\"item\">
                            <div class=\"ui basic center aligned fitted segment\">
            ";
                    // line 93
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 93))) {
                        // line 94
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 94), "html", null, true);
                        yield "\" target=\"_blank\">
                                    <img src=\"";
                        // line 95
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
                        yield "\" width=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 95), "html", null, true);
                        yield "\" height=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 95), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 95), "html", null, true);
                        yield "\" class=\"icon\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Open '%s' in a new window"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_website", [], "any", false, false, false, 95)]), "html", null, true);
                        yield "\"/>
                                </a>
            ";
                    } else {
                        // line 98
                        yield "                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logo"), "html", null, true);
                        yield "\" width=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalWidth", [], "method", false, false, false, 98), "html", null, true);
                        yield "\" height=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "getOptimalHeight", [], "method", false, false, false, 98), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 98), "html", null, true);
                        yield "\" class=\"icon\"/>
            ";
                    }
                    // line 100
                    yield "                                <div class=\"ui block huge brand header\">
                                    ";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_nom", [], "any", false, false, false, 101), "html", null, true);
                    yield "
                                    ";
                    // line 102
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 102)) {
                        yield "<div class=\"sub tiny header\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_slogan", [], "any", false, false, false, 102)), "html", null, true);
                        yield "</div>";
                    }
                    // line 103
                    yield "                                </div>
                            </div>
                            ";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [], "method", false, false, false, 105);
                    yield "
                            <div class=\"ui basic fitted segment\">
                                ";
                    // line 107
                    yield from                     $this->loadTemplate("elements/modes.html.twig", "elements/logged_user.html.twig", 107)->unwrap()->yield($context);
                    // line 108
                    yield "                            </div>
                        </div>
                    </div>
                </div>
                <a
                    href=\"#\"
                    class=\"item darkmode";
                    // line 114
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 114)) {
                        yield " black";
                    }
                    yield "\"
                    title=\"";
                    // line 115
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 115)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
                    }
                    yield "\"
                    data-position=\"right center\"
                >
                    <i class=\"icon adjust\" aria-hidden=\"true\"></i>
                    <span class=\"visually-hidden\">";
                    // line 119
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isDarkModeEnabled", [], "method", false, false, false, 119)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Disable dark mode"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enable dark mode"), "html", null, true);
                    }
                    yield "</span>
                </a>
                <a
                    class=\"item";
                    // line 122
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 122)) {
                        yield " purple";
                    } else {
                        yield " red";
                    }
                    yield "\"
                    href=\"";
                    // line 123
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 123)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("unimpersonate"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logout"), "html", null, true);
                    }
                    yield "\"
                    title=\"";
                    // line 124
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 124)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unimpersonate"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Log off"), "html", null, true);
                    }
                    yield "\"
                    data-position=\"right center\"
                >
                    <i class=\"icon ";
                    // line 127
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 127)) {
                        yield "user secret";
                    } else {
                        yield "sign out alt";
                    }
                    yield "\" aria-hidden=\"true\"></i>
                    <span class=\"visually-hidden\">";
                    // line 128
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isImpersonated", [], "method", false, false, false, 128)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unimpersonate"), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Log off"), "html", null, true);
                    }
                    yield "</span>
                </a>
            </nav>
        ";
                }
                // line 132
                yield "    ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/logged_user.html.twig";
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
        return array (  390 => 132,  379 => 128,  371 => 127,  361 => 124,  353 => 123,  345 => 122,  335 => 119,  324 => 115,  318 => 114,  310 => 108,  308 => 107,  303 => 105,  299 => 103,  293 => 102,  289 => 101,  286 => 100,  274 => 98,  260 => 95,  255 => 94,  253 => 93,  245 => 88,  240 => 86,  233 => 85,  230 => 84,  226 => 82,  224 => 81,  210 => 74,  202 => 73,  192 => 70,  184 => 69,  176 => 68,  166 => 65,  156 => 62,  150 => 61,  140 => 54,  131 => 51,  128 => 50,  123 => 47,  117 => 46,  109 => 45,  100 => 43,  92 => 42,  88 => 40,  82 => 39,  74 => 36,  67 => 32,  61 => 30,  58 => 29,  56 => 28,  52 => 26,  49 => 25,  46 => 24,  43 => 23,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/logged_user.html.twig", "/var/www/galette/templates/default/elements/logged_user.html.twig");
    }
}
