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

/* elements/js/modal.js.twig */
class __TwigTemplate_bba6323f8dc8b3c86e6a47f833e623fc extends Template
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
        // line 58
        yield "
";
        // line 59
        if ( !array_key_exists("modal_selector", $context)) {
            // line 60
            yield "    \$.modal({
    ";
            // line 61
            if ( !array_key_exists("modal_without_title", $context)) {
                // line 62
                yield "        title: ";
                if (array_key_exists("modal_title_twig", $context)) {
                    yield "'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_title_twig"] ?? null), "html", null, true);
                    yield "'";
                } elseif (array_key_exists("modal_title", $context)) {
                    yield ($context["modal_title"] ?? null);
                }
                yield ",
    ";
            }
            // line 64
            yield "    ";
            if ( !array_key_exists("modal_without_content", $context)) {
                // line 65
                yield "        content: ";
                if (array_key_exists("modal_content_twig", $context)) {
                    yield "'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_content_twig"] ?? null), "html", null, true);
                    yield "'";
                } elseif (array_key_exists("modal_content", $context)) {
                    yield ($context["modal_content"] ?? null);
                }
                yield ",
    ";
            }
        } else {
            // line 68
            yield "    \$('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_selector"] ?? null), "html", null, true);
            yield "').modal({
";
        }
        // line 70
        yield "        class: 'modal-form";
        if (array_key_exists("modal_class", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_class"] ?? null), "html", null, true);
        }
        yield "',
        classContent: '";
        // line 71
        if (array_key_exists("modal_content_class", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_content_class"] ?? null), "html", null, true);
        }
        yield "',
";
        // line 72
        if ((array_key_exists("modal_other_options", $context) && is_iterable(($context["modal_other_options"] ?? null)))) {
            // line 73
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modal_other_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 74
                yield "        ";
                if ((($context["key"] == "observeChanges") && ($context["value"] == "1"))) {
                    // line 75
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield ": true,
        ";
                } else {
                    // line 77
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield ": \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\",
        ";
                }
                // line 79
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 81
        yield "        onShow: function() {
";
        // line 82
        if (array_key_exists("modal_onshow", $context)) {
            // line 83
            yield "            ";
            yield ($context["modal_onshow"] ?? null);
            yield "
";
        } else {
            // line 85
            yield "            return true;
";
        }
        // line 87
        yield "        },
        onHidden: function() {
";
        // line 89
        if (array_key_exists("modal_onhidden", $context)) {
            // line 90
            yield "            ";
            yield ($context["modal_onhidden"] ?? null);
            yield "
";
        } else {
            // line 92
            yield "            \$(this).modal('hide dimmer').remove();
";
        }
        // line 94
        yield "        },
        onApprove: function() {
";
        // line 96
        if (array_key_exists("modal_onapprove", $context)) {
            // line 97
            yield "            ";
            yield ($context["modal_onapprove"] ?? null);
            yield "
";
        } elseif ( !        // line 98
array_key_exists("modal_deny_only", $context)) {
            // line 99
            yield "            \$('.modal-form form').submit();
";
        }
        // line 101
        yield "        },
        onDeny: function() {
";
        // line 103
        if (array_key_exists("modal_ondeny", $context)) {
            // line 104
            yield "            ";
            yield ($context["modal_ondeny"] ?? null);
            yield "
";
        } else {
            // line 106
            yield "            return true;
";
        }
        // line 108
        yield "        },
        actions: [
";
        // line 110
        if ((array_key_exists("modal_additional_button", $context) && is_iterable(($context["modal_additional_button"] ?? null)))) {
            // line 111
            yield "            {
    ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modal_additional_button"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 113
                yield "        ";
                if (($context["key"] == "click")) {
                    // line 114
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield ": ";
                    yield $context["value"];
                    yield ",
        ";
                } else {
                    // line 116
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield ": \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\",
        ";
                }
                // line 118
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "            },
";
        }
        // line 121
        if ( !array_key_exists("modal_deny_only", $context)) {
            // line 122
            yield "            {
                text: '";
            // line 123
            if ( !array_key_exists("modal_approve_text", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Continue"), "js"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_approve_text"] ?? null), "html", null, true);
            }
            yield "',
                icon: '";
            // line 124
            if ( !array_key_exists("modal_approve_icon", $context)) {
                yield "arrow right";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_approve_icon"] ?? null), "html", null, true);
            }
            yield "',
                class: '";
            // line 125
            if ( !array_key_exists("modal_approve_color", $context)) {
                yield "primary";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_approve_color"] ?? null), "html", null, true);
            }
            yield " icon labeled approve',
                click: {
";
            // line 127
            if (array_key_exists("modal_approve_click", $context)) {
                // line 128
                yield "                    ";
                yield ($context["modal_approve_click"] ?? null);
                yield "
";
            }
            // line 130
            yield "                }
            },
";
        }
        // line 133
        yield "            {
                text: '";
        // line 134
        if ( !array_key_exists("modal_cancel_text", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "js"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_cancel_text"] ?? null), "html", null, true);
        }
        yield "',
                icon: '";
        // line 135
        if ( !array_key_exists("modal_cancel_icon", $context)) {
            yield "times";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_cancel_icon"] ?? null), "html", null, true);
        }
        yield "',
                class: '";
        // line 136
        if (array_key_exists("modal_cancel_color", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_cancel_color"] ?? null), "html", null, true);
            yield " ";
        }
        yield "icon labeled cancel',
                click: {
";
        // line 138
        if (array_key_exists("modal_cancel_click", $context)) {
            // line 139
            yield "                    ";
            yield ($context["modal_cancel_click"] ?? null);
            yield "
";
        }
        // line 141
        yield "                }
            }
        ],
";
        // line 144
        if (array_key_exists("modal_classname", $context)) {
            // line 145
            yield "    ";
            if ((($context["modal_classname"] ?? null) == "redalert")) {
                // line 146
                yield "        className: {
            modal: 'ui redalert modal',
            title: 'center aligned header',
            content: 'center aligned content',
            actions: 'center aligned actions'
        }
    ";
            } else {
                // line 153
                yield "        className: {
            ";
                // line 154
                yield ($context["modal_classname"] ?? null);
                yield "
        }
    ";
            }
        }
        // line 158
        yield "    }).modal('show');
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/modal.js.twig";
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
        return array (  340 => 158,  333 => 154,  330 => 153,  321 => 146,  318 => 145,  316 => 144,  311 => 141,  305 => 139,  303 => 138,  295 => 136,  287 => 135,  279 => 134,  276 => 133,  271 => 130,  265 => 128,  263 => 127,  254 => 125,  246 => 124,  238 => 123,  235 => 122,  233 => 121,  229 => 119,  223 => 118,  215 => 116,  207 => 114,  204 => 113,  200 => 112,  197 => 111,  195 => 110,  191 => 108,  187 => 106,  181 => 104,  179 => 103,  175 => 101,  171 => 99,  169 => 98,  164 => 97,  162 => 96,  158 => 94,  154 => 92,  148 => 90,  146 => 89,  142 => 87,  138 => 85,  132 => 83,  130 => 82,  127 => 81,  120 => 79,  112 => 77,  106 => 75,  103 => 74,  98 => 73,  96 => 72,  90 => 71,  82 => 70,  76 => 68,  63 => 65,  60 => 64,  48 => 62,  46 => 61,  43 => 60,  41 => 59,  38 => 58,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/modal.js.twig", "/var/www/galette/templates/default/elements/js/modal.js.twig");
    }
}
