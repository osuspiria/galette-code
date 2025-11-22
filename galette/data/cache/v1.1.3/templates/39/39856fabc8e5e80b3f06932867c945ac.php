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

/* elements/list.html.twig */
class __TwigTemplate_c2f17ef3cb930974c3e50170e83e7170 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'search' => [$this, 'block_search'],
            'infoline' => [$this, 'block_infoline'],
            'infoline_actions' => [$this, 'block_infoline_actions'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'extra_form' => [$this, 'block_extra_form'],
            'legend' => [$this, 'block_legend'],
            'javascripts' => [$this, 'block_javascripts'],
            'batch_selection' => [$this, 'block_batch_selection'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : (((($context["is_public"] ?? null)) ? ("public_page.html.twig") : ("page.html.twig")))), "elements/list.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["mode"] = ((array_key_exists("mode", $context)) ? (Twig\Extension\CoreExtension::default(($context["mode"] ?? null), "")) : (""));
        // line 22
        $context["is_paginated"] = (($context["is_paginated"]) ?? ((($context["nb"] ?? null) > 0)));
        // line 23
        $context["is_public"] = (($context["is_public"]) ?? (false));
        // line 26
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "elements/list.html.twig", 26)->unwrap();
        // line 145
        $context["_legend_block"] =         $this->unwrap()->renderBlock("legend", $context, $blocks);
        // line 25
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 30
            yield "        <div id=\"main-container\">
    ";
        }
        // line 32
        yield "    ";
        yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
        // line 33
        yield "    ";
        yield from $this->unwrap()->yieldBlock('infoline', $context, $blocks);
        // line 65
        yield "    ";
        if (array_key_exists("form", $context)) {
            // line 66
            yield "        <form action=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "route", [], "any", true, true, false, 66)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "route", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "route", [], "any", false, true, false, 66), "args", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "route", [], "any", false, true, false, 66), "args", [], "any", false, false, false, 66), [])) : ([]))), "html", null, true);
            }
            yield "\" method=\"post\" id=\"listform\" class=\"ui form\">
            <div class=\"ui basic fitted segment\">

            ";
            // line 69
            if ((((($context["mode"] ?? null) != "ajax") && array_key_exists("batch_actions", $context)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0))) {
                // line 70
                yield "                ";
                yield CoreExtension::callMacro($macros["macros"], "macro_drawBatchActionsList", [($context["batch_actions"] ?? null)], 70, $context, $this->getSourceContext());
                yield "
            ";
            }
            // line 72
            yield "    ";
        }
        // line 73
        yield "
    ";
        // line 74
        if ((array_key_exists("list_type", $context) && (($context["list_type"] ?? null) == "cards"))) {
            // line 75
            yield "                <div class=\"";
            if (($context["nb"] ?? null)) {
                yield "ui doubling ";
                if (array_key_exists("cards_columns", $context)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cards_columns"] ?? null), "html", null, true);
                } else {
                    yield "six";
                }
                yield " column cards loader_selector";
            }
            yield "\">
    ";
        } elseif ( !        // line 76
array_key_exists("list_type", $context)) {
            // line 77
            yield "                <div class=\"ui basic fitted segment loader_selector large-table-wrapper\">
                    <table class=\"listing ui celled";
            // line 78
            if ( !array_key_exists("basic_table", $context)) {
                yield " striped";
            }
            yield " table\">
                        <thead>
                            <tr>
                        ";
            // line 81
            yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
            // line 104
            yield "                            </tr>
                        </thead>
                        <tbody>
    ";
        }
        // line 108
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 109
        yield "    ";
        if ( !array_key_exists("list_type", $context)) {
            // line 110
            yield "                        </tbody>
                        <tfoot>
                            ";
            // line 112
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            // line 113
            yield "                        </tfoot>
                    </table>
    ";
        }
        // line 116
        yield "
            </div>

            ";
        // line 119
        if ((((array_key_exists("form", $context) && (($context["mode"] ?? null) != "ajax")) && array_key_exists("batch_actions", $context)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0))) {
            // line 120
            yield "                ";
            yield CoreExtension::callMacro($macros["macros"], "macro_drawBatchActionsList", [($context["batch_actions"] ?? null)], 120, $context, $this->getSourceContext());
            yield "
            ";
        }
        // line 122
        yield "
            ";
        // line 123
        if (($context["is_paginated"] ?? null)) {
            // line 124
            yield "            <div class=\"ui basic center aligned fitted segment\">
                <div class=\"ui inverted pagination stackable menu\">
                    <div class=\"header item\">
                        ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Pages:"), "html", null, true);
            yield "
                    </div>
                    ";
            // line 129
            yield ($context["pagination"] ?? null);
            yield "
                </div>
            </div>
            ";
        }
        // line 133
        yield "
    ";
        // line 134
        if (array_key_exists("form", $context)) {
            // line 135
            yield "            ";
            yield from $this->unwrap()->yieldBlock('extra_form', $context, $blocks);
            // line 136
            yield "            ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "elements/list.html.twig", 136)->unwrap()->yield($context);
            // line 137
            yield "        </form>
    ";
        }
        // line 139
        yield "        ";
        yield from $this->unwrap()->yieldBlock('legend', $context, $blocks);
        // line 140
        yield "    ";
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 141
            yield "    </div>
    ";
        }
        return; yield '';
    }

    // line 32
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 33
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "        <form action=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["infoline"] ?? null), "route", [], "any", true, true, false, 34)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["infoline"] ?? null), "route", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["infoline"] ?? null), "route", [], "any", false, true, false, 34), "args", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["infoline"] ?? null), "route", [], "any", false, true, false, 34), "args", [], "any", false, false, false, 34), [])) : ([]))), "html", null, true);
        }
        yield "\" method=\"post\" class=\"ui form\">
            <div class=\"infoline\">
                <div class=\"ui basic horizontal segments\">
                    <div class=\"ui basic fitted segment\">
                        <div class=\"ui label\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["infoline"] ?? null), "label", [], "any", false, false, false, 38), "html", null, true);
        yield "</div>
                        ";
        // line 39
        yield from $this->unwrap()->yieldBlock('infoline_actions', $context, $blocks);
        // line 40
        yield "                    </div>
        ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["infoline"] ?? null), "route", [], "any", true, true, false, 41)) {
            // line 42
            yield "                    <div class=\"ui basic right aligned fitted segment\">
                        <div class=\"inline field\">
                            <label for=\"nbshow\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Records per page:"), "html", null, true);
            yield "</label>
                            <div class=\"ui dropdown selection autosubmit\">
                                <input type=\"hidden\" name=\"nbshow\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numrows"] ?? null), "html", null, true);
            yield "\">
                                <i class=\"dropdown icon\"></i>
                                <div class=\"text\">";
            // line 48
            if ((($context["numrows"] ?? null) == 0)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("All"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numrows"] ?? null), "html", null, true);
            }
            yield "</div>
                                <div class=\"menu\">
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["nbshow_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 51
                yield "                                    <div class=\"item";
                if (($context["key"] == ($context["numrows"] ?? null))) {
                    yield " active selected ";
                }
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                                </div>
                            </div>
                        </div>
                    </div>
        ";
        }
        // line 58
        yield "                </div>
            </div>
            ";
        // line 60
        if ((($context["mode"] ?? null) != "ajax")) {
            // line 61
            yield "                ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "elements/list.html.twig", 61)->unwrap()->yield($context);
            // line 62
            yield "            ";
        }
        // line 63
        yield "        </form>
    ";
        return; yield '';
    }

    // line 39
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 81
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 83
            yield "                                <th class=\"left\">
                                    ";
            // line 84
            if ((array_key_exists("form", $context) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "order", [], "any", true, true, false, 84))) {
                // line 85
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "order", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "order", [], "any", false, true, false, 85), "args", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "order", [], "any", false, true, false, 85), "args", [], "any", false, false, false, 85), [])) : ([])), ["option" => "order", "value" => CoreExtension::getAttribute($this->env, $this->source, $context["column"], "order", [], "any", false, false, false, 85)])), "html", null, true);
                yield "\">
                                        ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 86), "html", null, true);
                yield "
                                        ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "orderby", [], "any", false, false, false, 87) == CoreExtension::getAttribute($this->env, $this->source, $context["column"], "order", [], "any", false, false, false, 87))) {
                    // line 88
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "ordered", [], "any", false, false, false, 88) == Twig\Extension\CoreExtension::constant("Galette\\Core\\Pagination::ORDER_ASC"))) {
                        // line 89
                        yield "                                                <i class=\"ui angle down icon tooltip\" aria-hidden=\"true\"></i>
                                            ";
                    } else {
                        // line 91
                        yield "                                                <i class=\"ui angle up icon tooltip\" aria-hidden=\"true\"></i>
                                            ";
                    }
                    // line 93
                    yield "                                        ";
                }
                // line 94
                yield "                                    </a>
                                    ";
            } else {
                // line 96
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 96), "html", null, true);
                yield "
                                    ";
            }
            // line 98
            yield "                                </th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                            ";
        if (((($context["mode"] ?? null) != "ajax") && ( !array_key_exists("no_action", $context) || (($context["no_action"] ?? null) == false)))) {
            // line 101
            yield "                                <th class=\"actions_row\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
            yield "</th>
                            ";
        }
        // line 103
        yield "                        ";
        return; yield '';
    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 135
    public function block_extra_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 139
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        yield "    <script type=\"text/javascript\">
    ";
        // line 149
        if (((array_key_exists("batch", $context) && array_key_exists("batch_actions", $context)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0))) {
            // line 150
            yield "        var _checkselection = function() {
            var _checked = \$('#listform').find('input[type=checkbox]:checked').length;
            if ( _checked == 0 ) {
                ";
            // line 153
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "elements/list.html.twig", 153)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 154
($context["batch"] ?? null), "modal", [], "any", false, false, false, 154), "title", [], "any", false, false, false, 154), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 155
($context["batch"] ?? null), "modal", [], "any", false, false, false, 155), "content", [], "any", false, false, false, 155), "js"), "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 161
            yield "                return false;
            } else {
                return true;
            }
        }
    ";
        }
        // line 167
        yield "        \$(function(){
    ";
        // line 168
        if (((array_key_exists("batch", $context) && array_key_exists("batch_actions", $context)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["batch_actions"] ?? null)) > 0))) {
            // line 169
            yield "            var _init_page = function(res){
        ";
            // line 170
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 170) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 170)) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [], "method", false, false, false, 170))) {
                // line 171
                yield "                ";
                // line 172
                yield "                var _checklinks = '<a href=\"#\" class=\"checkall ui blue tertiary button\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(Un)Check all"), "js"), "html", null, true);
                yield "</a>' +
                    ' | <a href=\"#\" class=\"checkinvert ui blue tertiary button\">";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Invert selection"), "js"), "html", null, true);
                yield "</a> | ';
            ";
                // line 174
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["_legend_block"] ?? null))) {
                    // line 175
                    yield "                var _legendlink = '<div class=\"ui basic right aligned fitted segment\"><a href=\"#\" class=\"show_legend ui blue tertiary button\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show legend"), "js"), "html", null, true);
                    yield "</a></div></div>';
            ";
                }
                // line 177
                yield "                \$('.batch-select-action').before(_checklinks);
                \$('.batch-select-action').dropdown({
                    action: function(text, value, element) {
                        if (!_checkselection()) {
                            return false;
                        }
                        // Hide dropdown
                        var element = element.parentElement !== undefined ? element : element[0];
                        var dropdown = element.parentElement.parentElement;
                        \$(dropdown).dropdown('hide');
                        // Handle direct download actions.
                        if (value.endsWith('__directdownload')) {
                            const _value = value.split('__');
                            var value = _value[0];
                            var _form = \$('#listform');
                                _form.append(\$('<input id=\"directdownload\" type=\"hidden\" name=\"' + value + '\" value=\"true\"/>'));
                            _form.submit();
                            \$('#directdownload').remove();
            ";
                // line 195
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 195) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 195))) {
                    // line 196
                    yield "                        // Handle delete.
                        } else if (value == 'delete') {
                            ";
                    // line 198
                    $context["removal_extra_data"] = ((array_key_exists("removal_extra_data", $context)) ? (($context["removal_extra_data"] ?? null)) : (""));
                    // line 199
                    yield "                            ";
                    $context["extra_data"] = ("delete: true, entries_sel: \$('#listform input[type=\"checkbox\"]:checked').map(function(){ return \$(this).val(); }).get()" . ($context["removal_extra_data"] ?? null));
                    // line 200
                    yield "                            ";
                    yield from                     $this->loadTemplate("elements/js/removal.js.twig", "elements/list.html.twig", 200)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".batch-delete", "deleteurl" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 202
($context["batch"] ?? null), "route", [], "any", false, false, false, 202), "name", [], "any", false, false, false, 202), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "route", [], "any", false, true, false, 202), "args", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "route", [], "any", false, true, false, 202), "args", [], "any", false, false, false, 202), [])) : ([]))), "extra_data" =>                     // line 203
($context["extra_data"] ?? null), "method" => "POST", "loader" => "button", "loader_parent" => ".batch-select-action"]));
                    // line 208
                    yield "            ";
                }
                // line 209
                yield "                        }
                        // Handle other custom list actions.
            ";
                // line 211
                if (array_key_exists("batch_selection", $context)) {
                    // line 212
                    yield "                        ";
                    yield from $this->unwrap()->yieldBlock('batch_selection', $context, $blocks);
                    // line 213
                    yield "            ";
                }
                // line 214
                yield "                    }
                });
            ";
                // line 216
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["_legend_block"] ?? null))) {
                    // line 217
                    yield "                \$('.batch-selection').after(_legendlink);
            ";
                }
                // line 219
                yield "                _bind_check('entries_sel');
        ";
            }
            // line 221
            yield "            }
            _init_page();
    ";
        }
        // line 224
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["_legend_block"] ?? null))) {
            // line 225
            yield "            _bind_legend();
    ";
        }
        // line 227
        yield "            ";
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "elements/list.html.twig", 227)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 230
        yield "        });
    </script>
";
        return; yield '';
    }

    // line 212
    public function block_batch_selection($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/list.html.twig";
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
        return array (  572 => 212,  565 => 230,  562 => 227,  558 => 225,  555 => 224,  550 => 221,  546 => 219,  542 => 217,  540 => 216,  536 => 214,  533 => 213,  530 => 212,  528 => 211,  524 => 209,  521 => 208,  519 => 203,  518 => 202,  516 => 200,  513 => 199,  511 => 198,  507 => 196,  505 => 195,  485 => 177,  479 => 175,  477 => 174,  473 => 173,  468 => 172,  466 => 171,  464 => 170,  461 => 169,  459 => 168,  456 => 167,  448 => 161,  446 => 155,  445 => 154,  444 => 153,  439 => 150,  437 => 149,  434 => 148,  430 => 147,  423 => 139,  416 => 135,  409 => 112,  402 => 108,  397 => 103,  391 => 101,  388 => 100,  381 => 98,  375 => 96,  371 => 94,  368 => 93,  364 => 91,  360 => 89,  357 => 88,  355 => 87,  351 => 86,  346 => 85,  344 => 84,  341 => 83,  336 => 82,  332 => 81,  325 => 39,  319 => 63,  316 => 62,  313 => 61,  311 => 60,  307 => 58,  300 => 53,  285 => 51,  281 => 50,  272 => 48,  267 => 46,  262 => 44,  258 => 42,  256 => 41,  253 => 40,  251 => 39,  247 => 38,  237 => 34,  233 => 33,  226 => 32,  219 => 141,  216 => 140,  213 => 139,  209 => 137,  206 => 136,  203 => 135,  201 => 134,  198 => 133,  191 => 129,  186 => 127,  181 => 124,  179 => 123,  176 => 122,  170 => 120,  168 => 119,  163 => 116,  158 => 113,  156 => 112,  152 => 110,  149 => 109,  146 => 108,  140 => 104,  138 => 81,  130 => 78,  127 => 77,  125 => 76,  112 => 75,  110 => 74,  107 => 73,  104 => 72,  98 => 70,  96 => 69,  87 => 66,  84 => 65,  81 => 33,  78 => 32,  74 => 30,  71 => 29,  67 => 28,  63 => 25,  61 => 145,  59 => 26,  57 => 23,  55 => 22,  53 => 21,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/list.html.twig", "/var/www/galette/templates/default/elements/list.html.twig");
    }
}
