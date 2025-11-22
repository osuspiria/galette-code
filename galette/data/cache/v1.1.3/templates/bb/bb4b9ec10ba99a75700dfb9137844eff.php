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

/* pages/plugins.html.twig */
class __TwigTemplate_5567c6a3a9a6d3956162f7ba469399c3 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/plugins.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <table class=\"listing ui celled striped table\">
        <!--<caption>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active plugins"), "html", null, true);
        yield "</caption>-->
        <thead>
            <tr>
                <th class=\"listing\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</th>
                <th class=\"listing\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Description"), "html", null, true);
        yield "</th>
                <th class=\"listing\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Author"), "html", null, true);
        yield "</th>
                <th class=\"listing\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Version"), "html", null, true);
        yield "</th>
                <th class=\"listing\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Release date"), "html", null, true);
        yield "</th>
                <th class=\"listing actions_row\"></th>
            </tr>
        </thead>
        <tbody>
            <tr class=\"plugins\">
                <th colspan=\"6\" class=\"center aligned\"><strong>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active plugins"), "html", null, true);
        yield "</strong></th>
            </tr>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plugins_list"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
            // line 41
            yield "            <tr class=\"";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41) % 2) == 0)) {
                yield "even";
            } else {
                yield "odd";
            }
            yield "\">
                <td data-scope=\"row\"><a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "route", [], "any", false, false, false, 42) . "Info"), ["plugin" => $context["name"]]), "html", null, true);
            yield "\" class=\"info-plugin\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 42), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield ")</a></td>
                <td data-col-label=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Description"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "desc", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td data-col-label=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Author"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "author", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td data-col-label=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Version"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td data-col-label=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Release date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "date", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                <td class=\"actions_row\">
                    <a
                        href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pluginsActivation", ["action" => "deactivate", "module_id" => $context["name"]]), "html", null, true);
            yield "\"
                        class=\"toggleActivation use\"
                    >
                        <i class=\"ui toggle on red icon tooltip\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Click here to deactivate plugin '%name'"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 53)]), "html", null, true);
            yield "</span>
                    </a>
    ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["plugins"] ?? null), "needsDatabase", [$context["name"]], "method", false, false, false, 55)) {
                // line 56
                yield "                    <a
                        href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pluginInitDb", ["id" => $context["name"]]), "html", null, true);
                yield "\"
                        id=\"initdb_";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "\"
                        class=\"initdb action\"
                    >
                        <i class=\"ui database blue icon tooltip\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Initialize '%name' database"), ["%name" => CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 62)]), "html", null, true);
                yield "</span>
                    </a>
    ";
            } else {
                // line 65
                yield "                    <i class=\"ui icon\">&nbsp;</i>
    ";
            }
            // line 67
            yield "                </td>
            </tr>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 70
            yield "            <tr>
                <td colspan=\"6\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No active plugin."), "html", null, true);
            yield "</td>
            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "            <tr class=\"inactives plugins\">
                <th colspan=\"6\" class=\"center aligned\"><strong>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive plugins"), "html", null, true);
        yield "</strong></th>
            </tr>
            <thead>
            <tr>
                <th class=\"listing\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "</th>
                <th class=\"listing\" colspan=\"4\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cause"), "html", null, true);
        yield "</th>
                <th class=\"listing actions_row\"></th>
            </tr>
            </thead>
";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plugins_disabled_list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
            // line 85
            yield "            <tr>
                <td data-scope=\"row\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "</td>
                <td data-col-label=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cause"), "html", null, true);
            yield "\" colspan=\"4\">
                    ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "cause", [], "any", false, false, false, 88) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Plugins::DISABLED_MISS"))) {
                // line 89
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("A required file is missing"), "html", null, true);
                yield "
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 90
$context["plugin"], "cause", [], "any", false, false, false, 90) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Plugins::DISABLED_COMPAT"))) {
                // line 91
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Incompatible with current version"), "html", null, true);
                yield "
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 92
$context["plugin"], "cause", [], "any", false, false, false, 92) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Plugins::DISABLED_EXPLICIT"))) {
                // line 93
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Explicitely disabled"), "html", null, true);
                yield "
                    ";
            } else {
                // line 95
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unknown"), "html", null, true);
                yield "
                    ";
            }
            // line 97
            yield "                </td>
                <td class=\"actions_row\">
                    <a
                        href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("pluginsActivation", ["action" => "activate", "module_id" => $context["name"]]), "html", null, true);
            yield "\"
                        class=\"toggleActivation delete\"
                    >
                        <i class=\"ui toggle on grey icon tooltip\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Activate plugin '%name'"), ["%name" => $context["name"]]), "html", null, true);
            yield "</span>
                    </a>
                    <i class=\"ui icon\">&nbsp;</i>
                </td>
            </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            yield "            <tr>
                <td colspan=\"5\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No inactive plugin."), "html", null, true);
            yield "</td>
            </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "        </tbody>
    </table>
";
        return; yield '';
    }

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        yield "    <script type=\"text/javascript\">
        \$(function() {
    ";
        // line 121
        if ($this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "isDemo")) {
            // line 122
            yield "            \$('.initdb, a.toggleActivation').click(function(){
                ";
            // line 123
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/plugins.html.twig", 123)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Application runs under demo mode. This functionnality is not enabled, sorry."), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 131
            yield "                return false;
            });
    ";
        } else {
            // line 134
            yield "            ";
            // line 135
            yield "            var _btnuser_mapping = function(){
                \$('.initdb').click(function(){
                    var _plugin = this.id.substring(7);
                    var _url = \$(this).attr('href');
                    \$.ajax({
                        url: _url,
                        type: \"GET\",
                        ";
            // line 142
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/plugins.html.twig", 142)->unwrap()->yield($context);
            yield ",
                        success: function(res){
                            _initdb_dialog(res, _plugin);
                        },
                        error: function() {
                            ";
            // line 147
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/plugins.html.twig", 147)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying plugin database initialization interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 155
            yield "                        }
                    });
                    return false;
                });
            }
            _btnuser_mapping();

            var _initdb_dialog = function(res, plugin) {
                var _title = '";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Plugin database initialization: %name"), "js"), "html", null, true);
            yield "';
                ";
            // line 164
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/plugins.html.twig", 164)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" => "_title.replace('%name', plugin)", "modal_content" => "res", "modal_class" => "initdb-modal large", "modal_content_class" => "scrolling", "modal_other_options" => ["observeChanges" => true, "closable" => false], "modal_onapprove" => "\$('#plugins_initdb_form').submit();return false;", "modal_approve_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Next step"), "js"), "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 177
            yield "                _initdb_bindings(res, plugin);
            };

            var _initdb_bindings = function(res, plugin){
                //\$('.initdb-modal input:submit, .initdb-modal .button, .initdb-modal input:reset' );
                \$('#plugins_initdb_form').on('submit', function(event) {
                    event.preventDefault();
                    var _form = \$(this);
                    var _data = _form.serialize();
                        _data += '&ajax=true&next=true';
                    \$.ajax({
                        url: _form.attr('action'),
                        type: \"POST\",
                        data: _data,
                        datatype: 'json',
                        ";
            // line 192
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/plugins.html.twig", 192)->unwrap()->yield($context);
            yield ",
                        success: function(res) {
                            \$('#plugins_initdb_form').remove();
                            \$('#plugins_initdb_ajax').append(res);
                            if (!\$.trim(\$('#plugins_initdb_form .form-actions').html())){
                                \$('.initdb-modal .approve').remove();
                            }
                            _initdb_bindings(res);
                        },
                        error: function() {
                            ";
            // line 202
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/plugins.html.twig", 202)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying plugin database initialization interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 210
            yield "                        }
                    });
                });
            };

            \$('.info-plugin').click(function(event){
                event.preventDefault();
                var _this = \$(this);
                var _url = _this.attr('href');
                \$.ajax({
                    url: _url,
                    type: \"GET\",
                    datatype: 'json',
                    ";
            // line 223
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/plugins.html.twig", 223)->unwrap()->yield($context);
            yield ",
                    success: function(res) {
                        var _content = \$(\$.parseHTML(res)).find('div.main-content').children();
                        ";
            // line 226
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/plugins.html.twig", 226)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" => "_this.html()", "modal_content" => "_content", "modal_class" => "large", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 234
            yield "                    },
                    error: function() {
                        ";
            // line 236
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/plugins.html.twig", 236)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 244
            yield "                    }
                });
            });
    ";
        }
        // line 248
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
        return "pages/plugins.html.twig";
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
        return array (  448 => 248,  442 => 244,  440 => 236,  436 => 234,  434 => 226,  428 => 223,  413 => 210,  411 => 202,  398 => 192,  381 => 177,  379 => 164,  375 => 163,  365 => 155,  363 => 147,  355 => 142,  346 => 135,  344 => 134,  339 => 131,  337 => 123,  334 => 122,  332 => 121,  328 => 119,  324 => 118,  317 => 114,  308 => 111,  305 => 110,  294 => 104,  287 => 100,  282 => 97,  276 => 95,  270 => 93,  268 => 92,  263 => 91,  261 => 90,  256 => 89,  254 => 88,  250 => 87,  246 => 86,  243 => 85,  238 => 84,  231 => 80,  227 => 79,  220 => 75,  217 => 74,  208 => 71,  205 => 70,  190 => 67,  186 => 65,  180 => 62,  173 => 58,  169 => 57,  166 => 56,  164 => 55,  159 => 53,  152 => 49,  144 => 46,  138 => 45,  132 => 44,  126 => 43,  118 => 42,  109 => 41,  91 => 40,  86 => 38,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  61 => 28,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/plugins.html.twig", "/var/www/galette/templates/default/pages/plugins.html.twig");
    }
}
