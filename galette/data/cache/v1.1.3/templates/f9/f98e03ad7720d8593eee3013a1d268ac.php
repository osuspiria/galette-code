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

/* modals/plugin_initdb.html.twig */
class __TwigTemplate_58f5076b718488354d8610b30b5d8524 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : ("page.html.twig")), "modals/plugin_initdb.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <div id=\"plugins_initdb_ajax\">
        <form action=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pluginInitDb", ["id" => ($context["plugid"] ?? null)]), "html", null, true);
        yield "\" id=\"plugins_initdb_form\" method=\"post\" class=\"ui form\">
            ";
        // line 26
        if ((($context["mode"] ?? null) != "ajax")) {
            yield "<h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_title"] ?? null), "html", null, true);
            yield "</h2>";
        }
        // line 27
        yield "            ";
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 28
            yield "                ";
            yield from             $this->loadTemplate("elements/messages_inline.html.twig", "modals/plugin_initdb.html.twig", 28)->unwrap()->yield($context);
            // line 29
            yield "            ";
        }
        // line 30
        yield "    ";
        if ((($context["step"] ?? null) == 1)) {
            // line 31
            yield "            ";
            if ((array_key_exists("update_scripts", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["update_scripts"] ?? null)) > 0))) {
                yield "<div class=\"ui two stackable cards\">";
            }
            // line 32
            yield "                <div id=\"mode_new\" class=\"ui fluid card\">
                    <div class=\"content\">
                        <h3>
                            <input type=\"radio\" name=\"install_type\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\PluginInstall::INSTALL"), "html", null, true);
            yield "\" checked=\"checked\" id=\"install\"/>
                            <label for=\"install\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New installation"), "html", null, true);
            yield "</label>
                        </h3>
                        <ul>
                            <li>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("you're installing %name for the first time"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 39)]), "html", null, true);
            yield ",</li>
                            <li>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("you wish to erase an older version of of %name without keeping your data"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 40)]), "html", null, true);
            yield ".</li>
                        </ul>
                    </div>
                </div>
        ";
            // line 44
            if ((array_key_exists("update_scripts", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["update_scripts"] ?? null)) > 0))) {
                // line 45
                yield "                <div id=\"mode_update\" class=\"ui fluid card\">
                    <div class=\"content\">
                        <h3>
                            <input type=\"radio\" name=\"install_type\" value=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Core\\PluginInstall::UPDATE"), "html", null, true);
                yield "\" id=\"update\"/>
                            <label for=\"update\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Update"), "html", null, true);
                yield "</label>
                        </h3>
                        <ul>
                            <li>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("you already have installed %name, and you want to upgrade to the latest version"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 52)]), "html", null, true);
                yield ".</li>
                        </ul>
                        <div class=\"ui icon yellow icon message\">
                            <i class=\"exclamation triangle icon\" aria-hidden=\"true\"></i>
                            <div class=\"content\">
                                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Warning: Don't forget to backup your current database."), "html", null, true);
                yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 64
            yield "    ";
        }
        // line 65
        yield "

    ";
        // line 67
        if (((($context["step"] ?? null) == "i2") || (($context["step"] ?? null) == "u2"))) {
            // line 68
            yield "        ";
            yield ($context["results"] ?? null);
            yield "
    ";
        }
        // line 70
        yield "    ";
        if ((($context["step"] ?? null) == "u3")) {
            // line 71
            yield "            <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("You current %name version is..."), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 71)]), "html", null, true);
            yield "</h3>
            <ul class=\"leaders\">
        ";
            // line 73
            $context["last"] = 0.0;
            // line 74
            yield "        ";
            $context["previous"] = null;
            // line 75
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["update_scripts"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["val"]) {
                // line 76
                yield "                <li>
                    <span>
                        <label for=\"upgrade-";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\">
            ";
                // line 79
                if ((($context["last"] ?? null) == 0.0)) {
                    // line 80
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("older than %version"), ["%version" => $context["val"]]), "html", null, true);
                    yield "
            ";
                } elseif ((                // line 81
($context["last"] ?? null) != $context["val"])) {
                    // line 82
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("comprised between"), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("and"), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "
            ";
                } else {
                    // line 84
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield "
            ";
                }
                // line 86
                yield "            ";
                $context["last"] = $context["val"];
                // line 87
                yield "                        </label>
                    </span>
                    <span>
                        <input type=\"radio\" name=\"previous_version\" value=\"";
                // line 90
                (((array_key_exists("previous", $context) &&  !(null === ($context["previous"] ?? null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["previous"] ?? null), "html", null, true)) : (yield 0));
                yield "\" id=\"upgrade-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" required/>
                    </span>
                </li>
            ";
                // line 93
                $context["previous"] = $context["val"];
                // line 94
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "            </ul>
    ";
        }
        // line 97
        yield "    ";
        if (((($context["step"] ?? null) == "i4") || (($context["step"] ?? null) == "u4"))) {
            // line 98
            yield "            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(Errors on DROP and RENAME operations can be ignored)"), "html", null, true);
            yield "</p>
        ";
            // line 99
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["error_detected"] ?? null)) > 0)) {
                // line 100
                yield "            <p id=\"errorbox\">
            ";
                // line 101
                if ((($context["step"] ?? null) == "i3")) {
                    // line 102
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("The tables are not totally created, it may be a permission problem."), "html", null, true);
                    yield "
            ";
                } else {
                    // line 104
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("The tables have not been totally created, it may be a permission problem."), "html", null, true);
                    yield "
                <br/>
                ";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Your database is maybe not usable, try to restore the older version."), "html", null, true);
                    yield "
            ";
                }
                // line 108
                yield "            </p>
        ";
            }
            // line 110
            yield "    ";
        }
        // line 111
        yield "    ";
        if (((($context["step"] ?? null) == "i5") || (($context["step"] ?? null) == "u5"))) {
            // line 112
            yield "            <p>
                ";
            // line 113
            if ((($context["step"] ?? null) == "i5")) {
                // line 114
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Plugin '%name' has been successfully installed!"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 114)]), "html", null, true);
                yield "
                ";
            } else {
                // line 116
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Plugin '%name' has been successfully updated!"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "name", [], "any", false, false, false, 116)]), "html", null, true);
                yield "
                ";
            }
            // line 118
            yield "            </p>
    ";
        }
        // line 120
        yield "            <div class=\"ui basic fitted right aligned segment form-actions\">
    ";
        // line 121
        if ((($context["istep"] ?? null) < 5)) {
            // line 122
            yield "                <input type=\"hidden\" name=\"plugid\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["plugid"] ?? null), "html", null, true);
            yield "\"/>
        ";
            // line 123
            if (((($context["istep"] ?? null) > 1) && array_key_exists("install_type", $context))) {
                // line 124
                yield "                <input type=\"hidden\" name=\"install_type\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["install_type"] ?? null), "html", null, true);
                yield "\"/>
        ";
            }
            // line 126
            yield "        ";
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["error_detected"] ?? null)) == 0) && (($context["istep"] ?? null) >= 2)) || (($context["istep"] ?? null) > 2))) {
                // line 127
                yield "                <input type=\"hidden\" name=\"install_dbperms_ok\" value=\"1\"/>
        ";
            }
            // line 129
            yield "        ";
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["error_detected"] ?? null)) == 0) && (($context["istep"] ?? null) >= 4)) || (($context["istep"] ?? null) > 4))) {
                // line 130
                yield "                <input type=\"hidden\" name=\"install_dbwrite_ok\" value=\"1\"/>
        ";
            }
            // line 132
            yield "        ";
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 133
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["error_detected"] ?? null)) > 0)) {
                    // line 134
                    yield "                <input type=\"submit\" class=\"ui button\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Retry"), "html", null, true);
                    yield "\"/>
            ";
                } else {
                    // line 136
                    yield "                <button id=\"next\" class=\"ui labeled icon button\" type=\"submit\"><i class=\"forward icon\" aria-hidden=\"true\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Next step"), "html", null, true);
                    yield "</button>
            ";
                }
                // line 138
                yield "        ";
            }
            // line 139
            yield "    ";
        } else {
            // line 140
            yield "        ";
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 141
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("plugins"), "html", null, true);
                yield "\" class=\"ui labeled icon button\" id=\"btnback\"><i class=\"backward icon\" aria-hidden=\"true\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Back to plugins managment page"), "html", null, true);
                yield "</a>
        ";
            }
            // line 143
            yield "    ";
        }
        // line 144
        yield "        ";
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 145
            yield "                ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "modals/plugin_initdb.html.twig", 145)->unwrap()->yield($context);
            // line 146
            yield "        ";
        }
        // line 147
        yield "            </div>
        ";
        // line 149
        yield "            <div class=\"ui mini mobile stackable fluid steps\">
                <div class=\"step";
        // line 150
        if ((($context["step"] ?? null) == 1)) {
            yield " active";
        }
        yield "\">
                    <i class=\"question icon\" aria-hidden=\"true\"></i>
                    <div class=\"content\">
                        <div class=\"title\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Installation mode"), "html", null, true);
        yield "</div>
                    </div>
                </div>
                <div class=\"step";
        // line 156
        if (((($context["step"] ?? null) == "i2") || (($context["step"] ?? null) == "u2"))) {
            yield " active";
        }
        yield "\">
                    <i class=\"key icon\" aria-hidden=\"true\"></i>
                    <div class=\"content\">
                        <div class=\"title\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Access permissions to database"), "html", null, true);
        yield "</div>
                    </div>
                </div>
    ";
        // line 162
        if ((array_key_exists("install_type", $context) && (($context["install_type"] ?? null) == "upgrade"))) {
            // line 163
            yield "                <div class=\"step";
            if ((($context["step"] ?? null) == "u3")) {
                yield " active";
            }
            yield "\">
                    <i class=\"code branch icon\" aria-hidden=\"true\"></i>
                    <div class=\"content\">
                        <div class=\"title\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Version selection"), "html", null, true);
            yield "</div>
                    </div>
                </div>
    ";
        }
        // line 170
        yield "                <div class=\"step";
        if (((($context["step"] ?? null) == "i4") || (($context["step"] ?? null) == "u4"))) {
            yield " active";
        }
        yield "\">
                    <i class=\"database icon\" aria-hidden=\"true\"></i>
                    <div class=\"content\">
                        <div class=\"title\">";
        // line 173
        if (( !array_key_exists("install_type", $context) || (($context["install_type"] ?? null) == "install"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Database installation"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Database upgrade"), "html", null, true);
        }
        yield "</div>
                    </div>
                </div>
                <div class=\"step";
        // line 176
        if (((($context["step"] ?? null) == "i5") || (($context["step"] ?? null) == "u5"))) {
            yield " active";
        }
        yield "\">
                    <i class=\"flag checkered icon\" aria-hidden=\"true\"></i>
                    <div class=\"content\">
                        <div class=\"title\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("End!"), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modals/plugin_initdb.html.twig";
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
        return array (  459 => 179,  451 => 176,  441 => 173,  432 => 170,  425 => 166,  416 => 163,  414 => 162,  408 => 159,  400 => 156,  394 => 153,  386 => 150,  383 => 149,  380 => 147,  377 => 146,  374 => 145,  371 => 144,  368 => 143,  360 => 141,  357 => 140,  354 => 139,  351 => 138,  345 => 136,  339 => 134,  336 => 133,  333 => 132,  329 => 130,  326 => 129,  322 => 127,  319 => 126,  313 => 124,  311 => 123,  306 => 122,  304 => 121,  301 => 120,  297 => 118,  291 => 116,  285 => 114,  283 => 113,  280 => 112,  277 => 111,  274 => 110,  270 => 108,  265 => 106,  259 => 104,  253 => 102,  251 => 101,  248 => 100,  246 => 99,  241 => 98,  238 => 97,  234 => 95,  228 => 94,  226 => 93,  218 => 90,  213 => 87,  210 => 86,  204 => 84,  192 => 82,  190 => 81,  185 => 80,  183 => 79,  179 => 78,  175 => 76,  170 => 75,  167 => 74,  165 => 73,  159 => 71,  156 => 70,  150 => 68,  148 => 67,  144 => 65,  141 => 64,  131 => 57,  123 => 52,  117 => 49,  113 => 48,  108 => 45,  106 => 44,  99 => 40,  95 => 39,  89 => 36,  85 => 35,  80 => 32,  75 => 31,  72 => 30,  69 => 29,  66 => 28,  63 => 27,  57 => 26,  53 => 25,  50 => 24,  46 => 23,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/plugin_initdb.html.twig", "/var/www/galette/templates/default/modals/plugin_initdb.html.twig");
    }
}
