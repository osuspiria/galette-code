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

/* modals/telemetry.html.twig */
class __TwigTemplate_5ee491eb18fc9647cc99a96c709db058 extends Template
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
        if ((($context["part"] ?? null) == "dialog")) {
            // line 22
            yield "        <div id=\"telemetry_panel\" class=\"texts_legend ui modal\">
            <div class=\"header\"></div>
            <div class=\"scrolling content\">
                <p>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Telemetry data are <strong>anonymous</strong>; nothing about your organization or its members will be sent."), "html", null, true);
            yield "</p>
                <p>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Nothing is automated in the process; it's up to you to send (or resend) data."), "html", null, true);
            yield "<br/>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("You can review below the raw data that would be send if you press the 'Send' button."), "html", null, true);
            yield ".<br/>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Also note that all data are sent over a <strong>HTTPS secured connection</strong>."), "html", null, true);
            yield "</p>
                <div class=\"tdata\">
                </div>
            </div>
        </div>
";
        }
        // line 32
        if ((($context["part"] ?? null) == "jsdialog")) {
            // line 33
            yield "                \$('#telemetry_panel').modal({
                    title: '";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send telemetry information"), "js"), "html", null, true);
            yield "',
                    class: 'large',
                    onApprove: function() {
                            \$.ajax({
                                url:  '";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("telemetrySend"), "html", null, true);
            yield "',
                                method: 'POST',
                                ";
            // line 40
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "modals/telemetry.html.twig", 40)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "button", "selector" => "#telemetry"]));
            // line 43
            yield ",
                                success: function(data) {
                                    if (data.success) {
    ";
            // line 46
            if ((array_key_exists("orig", $context) && (($context["orig"] ?? null) == "desktop"))) {
                // line 47
                yield "                                        \$('#telemetry').remove();
                                        if (\$('#share a').length == 0) {
                                            \$('#share').remove();
                                        }
    ";
            }
            // line 52
            yield "    ";
            if (array_key_exists("renew_telemetry", $context)) {
                // line 53
                yield "                                        \$('#renewbox').remove();
                                        Cookies.set(
                                            'renew_telemetry',
                                            1,
                                            {
                                                expires: 365,
                                                path: '/'
                                            }
                                        );
    ";
            }
            // line 63
            yield "                                    }
                                    ";
            // line 64
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "modals/telemetry.html.twig", 64)->unwrap()->yield(CoreExtension::merge($context, ["modal_without_title" => true, "modal_content" => "data.message", "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 71
            yield "                                },
                                error: function() {
                                    ";
            // line 73
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "modals/telemetry.html.twig", 73)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred sending telemetry information :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 81
            yield "                                }
                            });
                    },
                    onDeny: function() {
                            \$(this).find('.tdata').empty();
                    },
                    onHidden: function() {
                            \$(this).find('.tdata').empty();
                    },
                    actions: [{
                        text    : '";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send"), "js"), "html", null, true);
            yield "',
                        icon    : 'share',
                        class   : 'primary icon labeled approve'
                    }, {
                        text    : '";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "js"), "html", null, true);
            yield "',
                        icon    : 'times',
                        class   : 'icon labeled cancel'
                    }]
                });

                \$('#telemetry').on('click', function(e) {
                    e.preventDefault();

                    \$.ajax({
                        url:  '";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("telemetryInfos"), "html", null, true);
            yield "',
                        success: function(data) {
                            \$('#telemetry_panel .tdata').append(data);
                            \$('#telemetry_panel').modal('show');
                        }

                    });
                });
    ";
            // line 113
            if (array_key_exists("renew_telemetry", $context)) {
                // line 114
                yield "            \$('#norenew').on('click', function() {
                Cookies.set(
                    'renew_telemetry',
                    1,
                    {
                        expires: 365,
                        path: '/'
                    }
                );
                window.location.reload();
            });
            \$('#renewlater').on('click', function() {
                Cookies.set(
                    'renew_telemetry',
                    1,
                    {
                        expires: 182,
                        path: '/'
                    }
                );
                window.location.reload();
            });
    ";
            }
        }
        // line 138
        if ((($context["part"] ?? null) == "jsregister")) {
            // line 139
            yield "            \$('#register').on('click', function(e) {
                \$.ajax({
                    url:  '";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("setRegistered"), "html", null, true);
            yield "',
                    success: function(data) {
    ";
            // line 143
            if ((array_key_exists("orig", $context) && (($context["orig"] ?? null) == "desktop"))) {
                // line 144
                yield "                        \$('#register').remove();
                        if (\$('#share a').length == 0) {
                            \$('#share').remove();
                        }
    ";
            }
            // line 149
            yield "                        ";
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "modals/telemetry.html.twig", 149)->unwrap()->yield(CoreExtension::merge($context, ["modal_without_title" => true, "modal_content" => "data.message", "modal_class" => "tiny", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 156
            yield "                    }
                });
            });
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modals/telemetry.html.twig";
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
        return array (  215 => 156,  212 => 149,  205 => 144,  203 => 143,  198 => 141,  194 => 139,  192 => 138,  166 => 114,  164 => 113,  153 => 105,  140 => 95,  133 => 91,  121 => 81,  119 => 73,  115 => 71,  113 => 64,  110 => 63,  98 => 53,  95 => 52,  88 => 47,  86 => 46,  81 => 43,  79 => 40,  74 => 38,  67 => 34,  64 => 33,  62 => 32,  49 => 26,  45 => 25,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/telemetry.html.twig", "/var/www/galette/templates/default/modals/telemetry.html.twig");
    }
}
