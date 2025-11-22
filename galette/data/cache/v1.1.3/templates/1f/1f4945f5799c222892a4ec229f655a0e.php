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

/* pages/desktop.html.twig */
class __TwigTemplate_f458805a38349e455ebe79a26350e3ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "pages/desktop.html.twig", 23)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("page.html.twig", "pages/desktop.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "    <div class=\"ui grid\">
";
        // line 27
        if (( !($context["hide_telemetry"] ?? null) &&  !$this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo"))) {
            // line 28
            yield "        <div class=\"sixteen wide column\">
            <div class=\"ui yellow message\">
                <div class=\"header\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Help us know about you!"), "html", null, true);
            yield "</div>
                <div class=\"ui stackable grid\">
                    <div class=\"sixteen wide column\">
                        <p>
                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Take a moment to share some information with us so we can know better Galette's uses."), "html", null, true);
            yield "
                        </p>
                    </div>
                    <div class=\"sixteen wide column\">
                        <div class=\"ui wrapping spaced buttons\">
            ";
            // line 39
            if ( !($context["telemetry_sent"] ?? null)) {
                // line 40
                yield "                            <a id=\"telemetry\" class=\"large ui blue button\" href=\"#\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send anonymous and imprecise data about your Galette instance"), "html", null, true);
                yield "\">
                                <i class=\"chart bar icon\" aria-hidden=\"true\"></i>
                                ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Telemetry"), "html", null, true);
                yield "
                            </a>
            ";
            }
            // line 45
            yield "            ";
            if ( !($context["registered"] ?? null)) {
                // line 46
                yield "                            <a class=\"large ui blue button\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GALETTE_TELEMETRY_URI"), "html", null, true);
                yield "reference?showmodal&uuid=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reguuid"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Register your organization as a Galette user"), "html", null, true);
                yield "\" target=\"_blank\">
                                <i class=\"id card icon\" aria-hidden=\"true\"></i>
                                ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Register"), "html", null, true);
                yield "
                            </a>
            ";
            }
            // line 51
            yield "                        </div>
                        <div class=\"tooltip jsonly displaynone ui toggle checkbox\" title=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("The panel will be automatically hidden once you have registered and send telemetry data. Check the box if you want to hide it anyways."), "html", null, true);
            yield "\">
                            <input type=\"checkbox\" name=\"hide_telemetry\" id=\"hide_telemetry\" value=\"1\" ";
            // line 53
            if (($context["hide_telemetry"] ?? null)) {
                yield " checked=\"checked\"";
            }
            yield " />
                            <label for=\"hide_telemetry\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Hide this panel"), "html", null, true);
            yield "</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        }
        // line 61
        yield "        <div class=\"sixteen wide";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["news"] ?? null)) > 0)) {
            yield " tablet ten wide computer";
        }
        yield " column\">
            <div class=\"ui attached yellow segment\">
                <div class=\"ui medium header\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Activities"), "html", null, true);
        yield "</div>
            </div>
            <div id=\"main-activities\" class=\"ui bottom attached segment\">
                <div class=\"ui three stackable cards\">
                    ";
        // line 67
        $context["dashboard_entries"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getDashboards");
        // line 68
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dashboard_entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dashboard_entry"]) {
            // line 69
            yield "                        ";
            yield CoreExtension::callMacro($macros["macros"], "macro_dashboardCard", [CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["dashboard_entry"], "label", [], "any", false, false, false, 70), (((CoreExtension::getAttribute($this->env, $this->source,             // line 71
$context["dashboard_entry"], "title", [], "any", true, true, false, 71) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_entry"], "title", [], "any", false, false, false, 71)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_entry"], "title", [], "any", false, false, false, 71)) : (null)), CoreExtension::getAttribute($this->env, $this->source,             // line 72
$context["dashboard_entry"], "route", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source,             // line 73
$context["dashboard_entry"], "icon", [], "any", false, false, false, 73)], 69, $context, $this->getSourceContext());
            // line 74
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                 </div>
             </div>
        </div>
";
        // line 79
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["news"] ?? null)) > 0)) {
            // line 80
            yield "        <div class=\"sixteen wide tablet six wide computer column\">
            <div class=\"ui attached yellow segment\">
                <div class=\"ui medium header\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("News"), "html", null, true);
            yield "</div>
            </div>
            <div class=\"ui bottom attached segment\">
                <div class=\"ui bulleted list\">
    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["news"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 87
                yield "                    <div class=\"item\">
                        <a href=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 88), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 88), "html", null, true);
                yield "</a>
                    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "                </div>
            </div>
        </div>
";
        }
        // line 95
        yield "        <div class=\"jsonly displaynone sixteen wide column\">
            <div class=\"ui basic vertically fitted segment\">
                <div class=\"ui toggle checkbox\">
                    <input type=\"checkbox\" name=\"show_dashboard\" id=\"show_dashboard\" value=\"1\"";
        // line 98
        if (($context["show_dashboard"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield "/>
                    <label for=\"show_dashboard\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show dashboard on login"), "html", null, true);
        yield "</label>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 105
        if (( !($context["hide_telemetry"] ?? null) &&  !($context["telemetry_sent"] ?? null))) {
            // line 106
            yield "        ";
            yield from             $this->loadTemplate("modals/telemetry.html.twig", "pages/desktop.html.twig", 106)->unwrap()->yield(CoreExtension::merge($context, ["part" => "dialog"]));
            // line 107
            yield "    ";
        }
        return; yield '';
    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        yield "    <script>
        \$(function() {
            \$('#show_dashboard').change(function(){
                var _checked = \$(this).is(':checked');
                Cookies.set(
                    'show_galette_dashboard',
                    (_checked ? 1 : 0),
                        {
                            expires: 365,
                            path: '/'
                        }
                );
                if ( !_checked ) {
                    var _url = '";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("members"), "html", null, true);
        yield "';
                    window.location.replace(_url);
                }
            });

";
        // line 129
        if ( !($context["hide_telemetry"] ?? null)) {
            // line 130
            yield "            \$('#hide_telemetry').change(function(){
                var _checked = \$(this).is(':checked');
                Cookies.set(
                    'hide_galette_telemetry',
                    (_checked ? 1 : 0),
                        {
                            expires: 365,
                            path: '/'
                        }
                );
                var _url = '";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dashboard"), "html", null, true);
            yield "';
                window.location.replace(_url);
            });

    ";
            // line 144
            if ( !($context["telemetry_sent"] ?? null)) {
                // line 145
                yield "        ";
                yield from                 $this->loadTemplate("modals/telemetry.html.twig", "pages/desktop.html.twig", 145)->unwrap()->yield(CoreExtension::merge($context, ["part" => "jsdialog", "orig" => "desktop"]));
                // line 146
                yield "    ";
            }
            // line 147
            yield "    ";
            if ( !($context["registered"] ?? null)) {
                // line 148
                yield "        ";
                yield from                 $this->loadTemplate("modals/telemetry.html.twig", "pages/desktop.html.twig", 148)->unwrap()->yield(CoreExtension::merge($context, ["part" => "jsregister", "orig" => "desktop"]));
                // line 149
                yield "    ";
            }
        }
        // line 151
        yield "        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/desktop.html.twig";
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
        return array (  310 => 151,  306 => 149,  303 => 148,  300 => 147,  297 => 146,  294 => 145,  292 => 144,  285 => 140,  273 => 130,  271 => 129,  263 => 124,  248 => 111,  244 => 110,  238 => 107,  235 => 106,  233 => 105,  224 => 99,  218 => 98,  213 => 95,  207 => 91,  196 => 88,  193 => 87,  189 => 86,  182 => 82,  178 => 80,  176 => 79,  171 => 76,  164 => 74,  162 => 73,  161 => 72,  160 => 71,  159 => 70,  157 => 69,  152 => 68,  150 => 67,  143 => 63,  135 => 61,  125 => 54,  119 => 53,  115 => 52,  112 => 51,  106 => 48,  96 => 46,  93 => 45,  87 => 42,  81 => 40,  79 => 39,  71 => 34,  64 => 30,  60 => 28,  58 => 27,  55 => 26,  51 => 25,  46 => 21,  44 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/desktop.html.twig", "/var/www/galette/templates/default/pages/desktop.html.twig");
    }
}
