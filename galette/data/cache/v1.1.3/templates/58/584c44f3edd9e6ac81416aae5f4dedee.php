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

/* elements/messages_inline.html.twig */
class __TwigTemplate_11c73a8a79f5a4c3e8c6d93e30aa4ab3 extends Template
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
        // line 22
        $context["loginfaults"] = CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["loginfault"], "method", false, false, false, 22);
        // line 23
        if ((array_key_exists("loginfault_detected", $context) && is_iterable(($context["loginfault_detected"] ?? null)))) {
            // line 24
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["loginfault_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 25
                yield "        ";
                $context["loginfaults"] = Twig\Extension\CoreExtension::merge(($context["loginfaults"] ?? null), [$context["l"]]);
                // line 26
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        yield "
";
        // line 30
        $context["errors"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error_detected"], "method", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error_detected"], "method", false, false, false, 30)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error_detected"], "method", false, false, false, 30)) : ([]));
        // line 31
        $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error"], "method", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error"], "method", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["error"], "method", false, false, false, 31)) : ([])));
        // line 32
        $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), (($context["loginfaults"]) ?? ([])));
        // line 33
        if ((array_key_exists("error_detected", $context) && is_iterable(($context["error_detected"] ?? null)))) {
            // line 34
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["error_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 35
                yield "        ";
                $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), [$context["e"]]);
                // line 36
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 38
        if ((is_iterable(($context["errors"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0))) {
            // line 39
            yield "    <noscript>
        <div class=\"ui error icon message\">
            <i class=\"exclamation circle icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                <div class=\"header\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("- ERROR -"), "html", null, true);
            yield "</div>
                ";
            // line 44
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                // line 45
                yield "                    <ul class=\"list\">
                    ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 47
                    yield "                        <li>";
                    yield $context["error"];
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                yield "                    </ul>
                ";
            } else {
                // line 51
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 52
                    yield "                        <p>";
                    yield $context["error"];
                    yield "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "                ";
            }
            // line 55
            yield "            </div>
        </div>
    </noscript>
";
        }
        // line 59
        yield "
";
        // line 61
        $context["warnings"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning_detected"], "method", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning_detected"], "method", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning_detected"], "method", false, false, false, 61)) : ([]));
        // line 62
        $context["warnings"] = Twig\Extension\CoreExtension::merge(($context["warnings"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning"], "method", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning"], "method", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["warning"], "method", false, false, false, 62)) : ([])));
        // line 63
        if ((array_key_exists("warning_detected", $context) && is_iterable(($context["warning_detected"] ?? null)))) {
            // line 64
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["warning_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 65
                yield "        ";
                $context["warnings"] = Twig\Extension\CoreExtension::merge(($context["warnings"] ?? null), [$context["w"]]);
                // line 66
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 68
        if ((is_iterable(($context["warnings"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["warnings"] ?? null)) > 0))) {
            // line 69
            yield "    <noscript>
        <div class=\"ui warning icon message\">
            <i class=\"exclamation triangle icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                <div class=\"header\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("- WARNING -"), "html", null, true);
            yield "</div>
                ";
            // line 74
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["warnings"] ?? null)) > 1)) {
                // line 75
                yield "                    <ul class=\"list\">
                    ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["warnings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                    // line 77
                    yield "                        <li>";
                    yield $context["warning"];
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "                    </ul>
                ";
            } else {
                // line 81
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["warnings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                    // line 82
                    yield "                        <p>";
                    yield $context["warning"];
                    yield "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                yield "                ";
            }
            // line 85
            yield "            </div>
        </div>
    </noscript>
";
        }
        // line 89
        yield "
";
        // line 91
        $context["success"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success_detected"], "method", true, true, false, 91) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success_detected"], "method", false, false, false, 91)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success_detected"], "method", false, false, false, 91)) : ([]));
        // line 92
        $context["success"] = Twig\Extension\CoreExtension::merge(($context["success"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success"], "method", true, true, false, 92) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success"], "method", false, false, false, 92)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["success"], "method", false, false, false, 92)) : ([])));
        // line 93
        if ((array_key_exists("success_detected", $context) && is_iterable(($context["success_detected"] ?? null)))) {
            // line 94
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["success_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 95
                yield "        ";
                $context["success"] = Twig\Extension\CoreExtension::merge(($context["success"] ?? null), [$context["entry"]]);
                // line 96
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 98
        if ((is_iterable(($context["success"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["success"] ?? null)) > 0))) {
            // line 99
            yield "    <noscript>
        <div class=\"ui success icon message\">
            <i class=\"check circle outline icon\" aria-hidden=\"true\"></i>
            <i class=\"window close outline icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
            ";
            // line 104
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["success"] ?? null)) > 1)) {
                // line 105
                yield "                <ul class=\"list\">
                ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["success"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 107
                    yield "                    <li>";
                    yield $context["entry"];
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "                </ul>
            ";
            } else {
                // line 111
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["success"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 112
                    yield "                    <p>";
                    yield $context["entry"];
                    yield "</p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                yield "            ";
            }
            // line 115
            yield "            </div>
        </div>
    </noscript>
";
        }
        // line 119
        yield "
";
        // line 121
        $context["info"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info_detected"], "method", true, true, false, 121) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info_detected"], "method", false, false, false, 121)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info_detected"], "method", false, false, false, 121)) : ([]));
        // line 122
        $context["info"] = Twig\Extension\CoreExtension::merge(($context["info"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info"], "method", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info"], "method", false, false, false, 122)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "getMessage", ["info"], "method", false, false, false, 122)) : ([])));
        // line 123
        if ((array_key_exists("info_detected", $context) && is_iterable(($context["info_detected"] ?? null)))) {
            // line 124
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["info_detected"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 125
                yield "        ";
                $context["info"] = Twig\Extension\CoreExtension::merge(($context["info"] ?? null), [$context["i"]]);
                // line 126
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 128
        if ((is_iterable(($context["info"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["info"] ?? null)) > 0))) {
            // line 129
            yield "    <noscript>
        <div class=\"ui info icon message\">
            <i class=\"info icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                ";
            // line 133
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["info"] ?? null)) > 1)) {
                // line 134
                yield "                    <ul class=\"list\">
                        ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["info"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 136
                    yield "                            <li>";
                    yield $context["i"];
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                yield "                    </ul>
                ";
            } else {
                // line 140
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["info"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 141
                    yield "                        ";
                    $context["info_title"] = "";
                    // line 142
                    yield "                        ";
                    $context["info_message"] = $context["entry"];
                    // line 143
                    yield "                        ";
                    if (is_iterable($context["entry"])) {
                        // line 144
                        yield "                            ";
                        $context["info_title"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 144);
                        // line 145
                        yield "                            <p class=\"header\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["info_title"] ?? null), "html", null, true);
                        yield "</p>
                            ";
                        // line 146
                        $context["info_message"] = CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "message", [], "any", false, false, false, 146);
                        // line 147
                        yield "                        ";
                    }
                    // line 148
                    yield "                        <p>";
                    yield ($context["info_message"] ?? null);
                    yield "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                ";
            }
            // line 151
            yield "            </div>
        </div>
    </noscript>
";
        }
        // line 155
        yield "
";
        // line 157
        if ((array_key_exists("renew_telemetry", $context) && ($context["renew_telemetry"] ?? null))) {
            // line 158
            yield "    ";
            yield from             $this->loadTemplate("modals/telemetry.html.twig", "elements/messages_inline.html.twig", 158)->unwrap()->yield(CoreExtension::merge($context, ["part" => "dialog"]));
            // line 159
            yield "    <noscript>
        <div class=\"ui info icon message\" id=\"renewbox\">
            <i class=\"info icon\" aria-hidden=\"true\"></i>
            <div class=\"content\">
                <div class=\"header\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Your telemetry data are more than one year old."), "html", null, true);
            yield "</div>
                <p>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Do you want to send it again?"), "html", null, true);
            yield "</p>
                <a href=\"#\" id=\"telemetry\" class=\"ui large green button\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
            yield "</a>
                <a href=\"#\" id=\"norenew\" class=\"ui large red button\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
            yield "</a>
                <a href=\"#\" id=\"renewlater\" class=\"ui large blue button\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Later"), "html", null, true);
            yield "</a>
            </div>
        </div>
    </noscript>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/messages_inline.html.twig";
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
        return array (  428 => 167,  424 => 166,  420 => 165,  416 => 164,  412 => 163,  406 => 159,  403 => 158,  401 => 157,  398 => 155,  392 => 151,  389 => 150,  380 => 148,  377 => 147,  375 => 146,  370 => 145,  367 => 144,  364 => 143,  361 => 142,  358 => 141,  353 => 140,  349 => 138,  340 => 136,  336 => 135,  333 => 134,  331 => 133,  325 => 129,  323 => 128,  316 => 126,  313 => 125,  308 => 124,  306 => 123,  304 => 122,  302 => 121,  299 => 119,  293 => 115,  290 => 114,  281 => 112,  276 => 111,  272 => 109,  263 => 107,  259 => 106,  256 => 105,  254 => 104,  247 => 99,  245 => 98,  238 => 96,  235 => 95,  230 => 94,  228 => 93,  226 => 92,  224 => 91,  221 => 89,  215 => 85,  212 => 84,  203 => 82,  198 => 81,  194 => 79,  185 => 77,  181 => 76,  178 => 75,  176 => 74,  172 => 73,  166 => 69,  164 => 68,  157 => 66,  154 => 65,  149 => 64,  147 => 63,  145 => 62,  143 => 61,  140 => 59,  134 => 55,  131 => 54,  122 => 52,  117 => 51,  113 => 49,  104 => 47,  100 => 46,  97 => 45,  95 => 44,  91 => 43,  85 => 39,  83 => 38,  76 => 36,  73 => 35,  68 => 34,  66 => 33,  64 => 32,  62 => 31,  60 => 30,  57 => 28,  50 => 26,  47 => 25,  42 => 24,  40 => 23,  38 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/messages_inline.html.twig", "/var/www/galette/templates/default/elements/messages_inline.html.twig");
    }
}
