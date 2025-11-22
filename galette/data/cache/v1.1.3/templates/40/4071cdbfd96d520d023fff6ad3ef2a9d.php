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

/* pages/configuration_dynamic_fields.html.twig */
class __TwigTemplate_2075d86f10b8253472c87205e7086dac extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "pages/configuration_dynamic_fields.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <div class=\"ui stackable pointing inverted menu\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_forms"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["form"]) {
            // line 26
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("configureDynamicFields", ["form_name" => $context["key"]]), "html", null, true);
            yield "\" class=\"item";
            if ((($context["form_name"] ?? null) == $context["key"])) {
                yield " active";
            }
            yield "\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["form"], "html", null, true);
            yield "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    </div>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_forms"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["form"]) {
            // line 30
            yield "    <div class=\"ui";
            if ((($context["form_name"] ?? null) == $context["key"])) {
                yield " active";
            }
            yield " tab segment\" data-tab=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
    ";
            // line 31
            if ((($context["form_name"] ?? null) == $context["key"])) {
                // line 32
                yield "        ";
                yield from                 $this->loadTemplate("elements/edit_dynamic_fields.html.twig", "pages/configuration_dynamic_fields.html.twig", 32)->unwrap()->yield($context);
                // line 33
                yield "    ";
            }
            // line 34
            yield "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "        <script type=\"text/javascript\">
            \$(function() {
                \$('.pointing.menu .item').tab({
                    auto: true,
                    path: '";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("configureDynamicFields", ["form_name" => ""]), "html", null, true);
        yield "',
                    onLoad: function(tabPath, parameterArray, historyEvent) {
                        _addDynField();
                        _editDynField();
                        _transDynField();
                        _removeItems();
                        _bindFomanticComponents();
                    }
                });
            });

            var _addDynField = function() {
                var _form_name;
                \$('.addfield').click(function(e){
                    e.preventDefault();
                    var _this = \$(this);
                    var _href = _this.attr('href');

                    \$.ajax({
                        url: _href,
                        type: \"GET\",
                        datatype: 'json',
                        ";
        // line 65
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/configuration_dynamic_fields.html.twig", 65)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".addfield", "loader" => "button"]));
        // line 68
        yield ",
                        success: function(res){
                            var _res = \$(res);

                            ";
        // line 72
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/configuration_dynamic_fields.html.twig", 72)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New dynamic field"), "js"), "modal_content" => "_res", "modal_class" => "tiny", "modal_onshow" => "_addDynFieldAjaxMapper();", "modal_approve_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add"), "js"), "modal_approve_icon" => "plus", "modal_approve_color" => "green", "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
        // line 82
        yield "                        },
                        error: function() {
                            ";
        // line 84
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "pages/configuration_dynamic_fields.html.twig", 84)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 92
        yield "                        }
                    });
                });
            }
            _addDynField();

            var _addDynFieldAjaxMapper = function(){
                \$('.modal-form .ui.dropdown, .modal-form select:not(.nochosen)').dropdown();
                \$('.modal-form .ui.checkbox, .modal-form .ui.radio.checkbox').checkbox();
                \$('.modal-form a[title], .modal-form .tooltip').popup({
                    variation: 'inverted',
                    inline: false,
                    addTouchEvents: false,
                });
            }

            ";
        // line 108
        $context["modal_onapprove"] = "
                \$('.modal-form form #redirect_uri').val(window.location.href);
                \$('.modal-form form').submit();
            ";
        // line 112
        yield "
            var _editDynField = function() {
                ";
        // line 114
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/configuration_dynamic_fields.html.twig", 114)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-edit", "modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit field"), "js"), "modal_class" => "tiny", "modal_content_class" => "scrolling", "modal_onapprove" =>         // line 119
($context["modal_onapprove"] ?? null), "modal_action_onshow" => "activateHtmlEditor(\$('#field_information'), true);"]));
        // line 122
        yield "            }
            _editDynField();

            ";
        // line 125
        $context["extra_success"] = "
                \$('.modal-form form').on('submit', function(event) {
                    event.preventDefault();
                    var _form = \$(this);
                    var _data = _form.serialize();
                    \$.ajax({
                        url: _form.attr('action'),
                        type: 'POST',
                        datatype: 'json',
                        data: _data,
                        error: function() {
                            \$.modal({
                                title: '%error%',
                                class: 'mini',
                                actions: [{
                                    text: '%close%',
                                    icon: 'times',
                                    class: 'icon labeled cancel'
                                }],
                                className: {
                                    modal: 'ui redalert modal',
                                    title: 'center aligned header',
                                    content: 'center aligned content',
                                    actions: 'center aligned actions'
                                }
                            }).modal('show');
                        }
                    });
                });
            ";
        // line 155
        yield "            var _transDynField = function() {
                ";
        // line 156
        yield from         $this->loadTemplate("elements/js/modal_action.js.twig", "pages/configuration_dynamic_fields.html.twig", 156)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".single-translate", "extra_success" => Twig\Extension\CoreExtension::replace(        // line 158
($context["extra_success"] ?? null), ["%error%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "%close%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]), "modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Translate labels"), "js"), "modal_content_class" => "scrolling", "modal_onapprove" =>         // line 161
($context["modal_onapprove"] ?? null)]));
        // line 163
        yield "            }
            _transDynField();
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/configuration_dynamic_fields.html.twig";
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
        return array (  255 => 163,  253 => 161,  252 => 158,  251 => 156,  248 => 155,  217 => 125,  212 => 122,  210 => 119,  209 => 114,  205 => 112,  200 => 108,  182 => 92,  180 => 84,  176 => 82,  174 => 72,  168 => 68,  166 => 65,  141 => 43,  135 => 39,  131 => 38,  113 => 34,  110 => 33,  107 => 32,  105 => 31,  96 => 30,  79 => 29,  76 => 28,  59 => 26,  55 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/configuration_dynamic_fields.html.twig", "/var/www/galette/templates/default/pages/configuration_dynamic_fields.html.twig");
    }
}
