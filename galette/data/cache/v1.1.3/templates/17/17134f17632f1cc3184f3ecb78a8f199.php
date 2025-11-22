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

/* elements/js/choose_adh.js.twig */
class __TwigTemplate_bdac263e88f8f1c3eadd918133ea376e extends Template
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
        if ( !array_key_exists("js_chosen_id", $context)) {
            // line 22
            yield "    ";
            $context["js_chosen_id"] = "#id_adh";
        }
        // line 24
        yield "    var _current_page = 1;

    var _chosenPages = function() {
            // Hide or enable pagination buttons.
            ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "filters", [], "any", false, true, false, 28), "pages", [], "any", true, true, false, 28) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "filters", [], "any", false, false, false, 28), "pages", [], "any", false, false, false, 28) > 1))) {
            // line 29
            yield "                \$('.next-results').removeClass('disabled');
                \$('.next-results, .prev-results').removeClass('displaynone');
            ";
        } else {
            // line 32
            yield "                \$('.next-results, .prev-results').addClass('displaynone');
            ";
        }
        // line 34
        yield "
            // Next results
            \$('";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield " .next-results').off().on('click', function() {
                var _data = {
                    page: _current_page + 1,
                };
                var _selected_value = \$('";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('get value');
                var _selected_text = \$('";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('get text');
                ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "filters", [], "any", false, true, false, 42), "pages", [], "any", true, true, false, 42)) {
            // line 43
            yield "                    var _pages = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "filters", [], "any", false, false, false, 43), "pages", [], "any", false, false, false, 43), "html", null, true);
            yield ";
                ";
        }
        // line 45
        yield "
                \$.ajax({
                    url: '";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributionMembers"), "html", null, true);
        yield "',
                    method: 'post',
                    data: _data,
                    ";
        // line 50
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "elements/js/choose_adh.js.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "loader_text" => "", "selector" => ".menu.visible", "extra_beforesend" => "\$('.next-results').addClass('disabled');", "extra_complete" => "if (_pages > _current_page) {\$('.next-results').removeClass('disabled');}"]));
        // line 56
        yield ",
                    success: function(res) {
                        // Reload dropdown's items with new results.
                        var _values = Object.values(res)[0];
                        \$('";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('change values', _values);

                        // Restore selected item.
                        if (_selected_value != '') {
                            \$('";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('set value', _selected_value);
                            \$('";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('set text', _selected_text);
                        }

                        // New current page number.
                        _current_page += 1;

                        // Disable/Enable required pagination buttons.
                        if (_pages == _current_page) {
                            \$('.next-results').addClass('disabled');
                        }
                        if (_current_page > 1) {
                            \$('.prev-results').removeClass('disabled');
                        }
                    },
                    error: function() {
                        ";
        // line 80
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/choose_adh.js.twig", 80)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred retrieving members :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 88
        yield "                    }
                });
            });

            // Previous results
            \$('";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield " .prev-results').off().on('click', function() {
                var _data = {
                    page: _current_page - 1,
                };
                var _selected_value = \$('";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('get value');
                var _selected_text = \$('";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('get text');
                ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "filters", [], "any", false, true, false, 99), "pages", [], "any", true, true, false, 99)) {
            // line 100
            yield "                    var _pages = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "filters", [], "any", false, false, false, 100), "pages", [], "any", false, false, false, 100), "html", null, true);
            yield ";
                ";
        }
        // line 102
        yield "
                \$.ajax({
                    url: '";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributionMembers"), "html", null, true);
        yield "',
                    method: 'post',
                    data: _data,
                    ";
        // line 107
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "elements/js/choose_adh.js.twig", 107)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "loader_text" => "", "selector" => ".menu.visible", "extra_beforesend" => "\$('.prev-results').addClass('disabled');", "extra_complete" => "if (_current_page > 1) {\$('.prev-results').removeClass('disabled');}"]));
        // line 113
        yield ",
                    success: function(res) {
                        // Reload dropdown's items with new results.
                        var _values = Object.values(res)[0];
                        \$('";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('change values', _values);

                        // Restore selected item.
                        if (_selected_value != '') {
                            \$('";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('set value', _selected_value);
                            \$('";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown('set text', _selected_text);
                        }

                        // New current page number.
                        _current_page -= 1;

                        // Disable/Enable required pagination buttons.
                        if (_pages > _current_page) {
                            \$('.next-results').removeClass('disabled');
                        }
                        if (_current_page == 1) {
                            \$('.prev-results').addClass('disabled');
                        }
                    },
                    error: function() {
                        ";
        // line 137
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/choose_adh.js.twig", 137)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred retrieving members :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 145
        yield "                    }
                });
            });
    }

    var _adhselect = function() {
        \$('";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "').dropdown({
            match: 'text',
            apiSettings: {
                ";
        // line 154
        if ((array_key_exists("js_chosen_cache", $context) && (($context["js_chosen_cache"] ?? null) == false))) {
            yield "cache: false,";
        }
        // line 155
        yield "                url: '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributionMembers", ["page" => 1, "search" => "{query}"]), "html", null, true);
        yield "',
                method: 'post',
                beforeSend: function (settings) {
                    if (settings.urlData.query == '') {
                        settings.url = settings.url.replace(/\\/{query}/, '');
                    }
                    return settings;
                },
                onFailure: function(response, element, xhr) {
                    console.log(response);
                },
                onError: function(errorMessage, element, xhr) {
                    ";
        // line 167
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/choose_adh.js.twig", 167)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_content" => "errorMessage", "modal_class" => "tiny", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 176
        yield "                }
            },
            onShow: function() {
                _chosenPages();
            },
            onChange: function(text, value) {
                _chosenPages();
                ";
        // line 183
        if (array_key_exists("new_contrib_onchange", $context)) {
            // line 184
            yield "                    var _member = \$('#id_adh_input').val();
                    var _fee    = \$('#id_type_cotis_input').val();
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url : '";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributionDates"), "html", null, true);
            yield "',
                        data: {
                            member_id: _member,
                            fee_id: _fee
                        },
                        ";
            // line 194
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "elements/js/choose_adh.js.twig", 194)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#contribdetails"]));
            // line 196
            yield ",
                        success: function(res){
                            \$('#date_debut_cotis').val(res.date_debut_cotis);
                            \$('#date_fin_cotis').val(res.date_fin_cotis);
                        },
                        error: function() {
                            ";
            // line 202
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "elements/js/choose_adh.js.twig", 202)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred retrieving dates :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 210
            yield "                        }
                    });
                ";
        }
        // line 213
        yield "            },
            onHide: function() {
                // Reset to defaults.
                _current_page = 1;
                \$('.next-results, .prev-results').addClass('disabled');
            },
        });

        var _chosen_id_input = \$('";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_chosen_id"] ?? null), "html", null, true);
        yield "_input');
        if ( typeof(_chosen_id_input) != 'undefined' && _chosen_id_input != null ) {
            _chosen_id_input.prop('type', 'hidden');
        }
    }

    \$(function() {
        _adhselect();
    });
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/choose_adh.js.twig";
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
        return array (  305 => 221,  295 => 213,  290 => 210,  288 => 202,  280 => 196,  278 => 194,  270 => 189,  263 => 184,  261 => 183,  252 => 176,  250 => 167,  234 => 155,  230 => 154,  224 => 151,  216 => 145,  214 => 137,  196 => 122,  192 => 121,  185 => 117,  179 => 113,  177 => 107,  171 => 104,  167 => 102,  161 => 100,  159 => 99,  155 => 98,  151 => 97,  144 => 93,  137 => 88,  135 => 80,  117 => 65,  113 => 64,  106 => 60,  100 => 56,  98 => 50,  92 => 47,  88 => 45,  82 => 43,  80 => 42,  76 => 41,  72 => 40,  65 => 36,  61 => 34,  57 => 32,  52 => 29,  50 => 28,  44 => 24,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/choose_adh.js.twig", "/var/www/galette/templates/default/elements/js/choose_adh.js.twig");
    }
}
