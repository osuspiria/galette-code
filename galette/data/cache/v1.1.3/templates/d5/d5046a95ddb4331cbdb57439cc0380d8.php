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

/* elements/js/removal.js.twig */
class __TwigTemplate_76a9b7a5c17344e54f3a5c1c9fc4f3a3 extends Template
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
        if ( !array_key_exists("selector", $context)) {
            // line 22
            yield "    ";
            $context["selector"] = ".delete";
        }
        // line 24
        if ( !array_key_exists("loader", $context)) {
            // line 25
            yield "    ";
            $context["loader"] = "action";
        }
        // line 27
        if ( !array_key_exists("loader_selector", $context)) {
            // line 28
            yield "    ";
            $context["loader_selector"] = ".loader_selector";
        }
        // line 30
        yield "
    //handle removals
";
        // line 32
        if (array_key_exists("single_action", $context)) {
            // line 33
            yield "    var _removeItems = function() {
        \$('";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selector"] ?? null), "html", null, true);
            yield "').off('click').on('click', function(event) {
            event.preventDefault();
            var _this = \$(this);
";
        }
        // line 38
        if (array_key_exists("extra_check", $context)) {
            // line 39
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extra_check"] ?? null), "html", null, true);
            yield "
";
        }
        // line 41
        if ( !array_key_exists("method", $context)) {
            // line 42
            yield "    ";
            $context["method"] = "GET";
        }
        // line 44
        yield "            \$.ajax({
                url: ";
        // line 45
        if ( !array_key_exists("deleteurl", $context)) {
            yield "_this.attr('href')";
        } else {
            yield "'";
            yield ($context["deleteurl"] ?? null);
            yield "'";
        }
        yield ",
                type: \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
        yield "\",
                data: {
                    ajax: true,
";
        // line 49
        if (array_key_exists("extra_data", $context)) {
            // line 50
            yield "                    ";
            yield ($context["extra_data"] ?? null);
            yield "
";
        }
        // line 52
        yield "                },
                datatype: 'json',
                ";
        // line 54
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "elements/js/removal.js.twig", 54)->unwrap()->yield(CoreExtension::merge($context, ["loader" =>         // line 55
($context["loader"] ?? null), "selector" =>         // line 56
($context["loader_selector"] ?? null)]));
        // line 57
        yield ",
                success: function(res){
                    var _res = \$(res);
                    _res.find('form').on('submit', function(e) {
                        e.preventDefault();
                        var _form = \$(this);
                        var _data = _form.serialize();
                        \$.ajax({
                            url: _form.attr('action'),
                            type: \"POST\",
                            data: _data,
                            datatype: 'json',
                            ";
        // line 69
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "elements/js/removal.js.twig", 69)->unwrap()->yield(CoreExtension::merge($context, ["loader" =>         // line 70
($context["loader"] ?? null), "selector" =>         // line 71
($context["loader_selector"] ?? null)]));
        // line 72
        yield ",
                            success: function(res){
                                if (res.success) {
                                    window.location.href = _form.find('input[name=redirect_uri]').val();
                                } else {
                                    \$.ajax({
                                        url: '";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ajaxMessages"), "html", null, true);
        yield "',
                                        method: \"GET\",
                                        success: function (values) {
                                            for (var type in values) {
                                                var dtime = 0;
                                                if (type == 'success') {
                                                    dtime = 'auto';
                                                }
                                                \$('body')
                                                    .toast({
                                                        displayTime: dtime,
                                                        minDisplayTime: 5000,
                                                        wordsPerMinute: 80,
                                                        showProgress: 'bottom',
                                                        closeIcon: true,
                                                        position: 'top attached',
                                                        title: values[type]['title'],
                                                        message: values[type]['messages'].join('<br/>'),
                                                        showIcon: values[type]['icon'],
                                                        class: type
                                                    })
                                                ;
                                            }
                                        }
                                    });
                                }
                            },
                            error: function() {
                                ";
        // line 106
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/removal.js.twig", 106)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 114
        yield "                            }
                        });
                    });

                    var _title = _res.find('.header');

                    ";
        // line 120
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/removal.js.twig", 120)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" => "_title", "modal_class" => "tiny", "modal_content" => "_res", "modal_onapprove" => "\$('#confirm_removal form').submit();", "modal_approve_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Remove"), "js"), "modal_approve_icon" => "trash", "modal_approve_color" => "red", "modal_classname" => "redalert"]));
        // line 130
        yield "                },
                error: function() {
                    ";
        // line 132
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/removal.js.twig", 132)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 140
        yield "                }
            });
";
        // line 142
        if (array_key_exists("single_action", $context)) {
            // line 143
            yield "        });
    }
    _removeItems();
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/removal.js.twig";
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
        return array (  202 => 143,  200 => 142,  196 => 140,  194 => 132,  190 => 130,  188 => 120,  180 => 114,  178 => 106,  147 => 78,  139 => 72,  137 => 71,  136 => 70,  135 => 69,  121 => 57,  119 => 56,  118 => 55,  117 => 54,  113 => 52,  107 => 50,  105 => 49,  99 => 46,  89 => 45,  86 => 44,  82 => 42,  80 => 41,  74 => 39,  72 => 38,  65 => 34,  62 => 33,  60 => 32,  56 => 30,  52 => 28,  50 => 27,  46 => 25,  44 => 24,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/removal.js.twig", "/var/www/galette/templates/default/elements/js/removal.js.twig");
    }
}
