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

/* elements/js/modal_action.js.twig */
class __TwigTemplate_737d16af81da9571c7b3327066e7d8d3 extends Template
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
        // line 57
        yield "
";
        // line 58
        $context["selector"] = ((array_key_exists("selector", $context)) ? (($context["selector"] ?? null)) : (".single-custom-action"));
        // line 59
        $context["method"] = ((array_key_exists("method", $context)) ? (($context["method"] ?? null)) : ("GET"));
        // line 60
        $context["datatype"] = ((array_key_exists("datatype", $context)) ? (($context["datatype"] ?? null)) : ("html"));
        // line 61
        if ( !array_key_exists("loader", $context)) {
            // line 62
            yield "    ";
            $context["loader"] = "action";
            // line 63
            yield "    ";
            $context["loader_text"] = ((array_key_exists("loader_text", $context)) ? (($context["loader_text"] ?? null)) : ($this->env->getFunction('_T')->getCallable()("Loading...")));
        }
        // line 65
        $context["loader_selector"] = ((array_key_exists("loader_selector", $context)) ? (($context["loader_selector"] ?? null)) : (".loader_selector"));
        // line 66
        yield "
";
        // line 67
        $context["modal_title"] = ((array_key_exists("modal_title_twig", $context)) ? (($context["modal_title_twig"] ?? null)) : (($context["modal_title"] ?? null)));
        // line 68
        $context["modal_content"] = ((array_key_exists("modal_content_twig", $context)) ? (($context["modal_content_twig"] ?? null)) : ("res"));
        // line 69
        $context["modal_class"] = ((array_key_exists("modal_class", $context)) ? (($context["modal_class"] ?? null)) : (null));
        // line 70
        $context["modal_content_class"] = ((array_key_exists("modal_content_class", $context)) ? (($context["modal_content_class"] ?? null)) : (null));
        // line 71
        $context["modal_onapprove"] = ((array_key_exists("modal_onapprove", $context)) ? (($context["modal_onapprove"] ?? null)) : (null));
        // line 72
        $context["modal_approve_text"] = ((array_key_exists("modal_approve_text", $context)) ? (($context["modal_approve_text"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "js")));
        // line 73
        $context["modal_approve_icon"] = ((array_key_exists("modal_approve_icon", $context)) ? (($context["modal_approve_icon"] ?? null)) : ("save"));
        // line 74
        $context["modal_cancel_text"] = ((array_key_exists("modal_cancel_text", $context)) ? (($context["modal_cancel_text"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")));
        // line 75
        yield "
    \$('";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selector"] ?? null), "html", null, true);
        yield "').click(function(event) {
        event.preventDefault();
        var _this = \$(this);
        var _url = _this.attr('href');
        \$.ajax({
            url: ";
        // line 81
        if ( !array_key_exists("actionurl", $context)) {
            yield "_url";
        } else {
            yield "'";
            yield ($context["actionurl"] ?? null);
            yield "'";
        }
        yield ",
            method: \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
        yield "\",
            datatype: \"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["datatype"] ?? null), "html", null, true);
        yield "\",
            ";
        // line 84
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "elements/js/modal_action.js.twig", 84)->unwrap()->yield(CoreExtension::merge($context, ["loader" =>         // line 85
($context["loader"] ?? null), "selector" =>         // line 86
($context["loader_selector"] ?? null), "loader_text" =>         // line 87
($context["loader_text"] ?? null)]));
        // line 88
        yield ",
            success: function(res) {
";
        // line 90
        if (array_key_exists("extra_success", $context)) {
            // line 91
            yield "                ";
            yield ($context["extra_success"] ?? null);
            yield "
";
        }
        // line 93
        yield "                ";
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/modal_action.js.twig", 93)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" =>         // line 94
($context["modal_title"] ?? null), "modal_content" =>         // line 95
($context["modal_content"] ?? null), "modal_class" =>         // line 96
($context["modal_class"] ?? null), "modal_content_class" =>         // line 97
($context["modal_content_class"] ?? null), "modal_onshow" => "_actionAjaxMapper();", "modal_onapprove" =>         // line 99
($context["modal_onapprove"] ?? null), "modal_approve_text" =>         // line 100
($context["modal_approve_text"] ?? null), "modal_approve_icon" =>         // line 101
($context["modal_approve_icon"] ?? null), "modal_cancel_text" =>         // line 102
($context["modal_cancel_text"] ?? null)]));
        // line 104
        yield "            },
            error: function() {
                ";
        // line 107
        yield "                ";
        yield from         $this->loadTemplate("elements/js/modal.js.twig", "elements/js/modal_action.js.twig", 107)->unwrap()->yield(CoreExtension::toArray(["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
        // line 115
        yield "            }
        });
    });

    var _actionAjaxMapper = function(){
        \$('.modal-form .ui.dropdown, .modal-form select:not(.nochosen)').dropdown();
        \$('.modal-form .ui.checkbox, .modal-form .ui.radio.checkbox').checkbox();
        \$('.modal-form a[title], .modal-form .tooltip').popup({
            variation: 'inverted',
            inline: false,
            addTouchEvents: false,
        });
";
        // line 127
        if (array_key_exists("modal_action_onshow", $context)) {
            // line 128
            yield "        ";
            yield ($context["modal_action_onshow"] ?? null);
            yield "
";
        }
        // line 130
        yield "    }
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/modal_action.js.twig";
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
        return array (  163 => 130,  157 => 128,  155 => 127,  141 => 115,  138 => 107,  134 => 104,  132 => 102,  131 => 101,  130 => 100,  129 => 99,  128 => 97,  127 => 96,  126 => 95,  125 => 94,  123 => 93,  117 => 91,  115 => 90,  111 => 88,  109 => 87,  108 => 86,  107 => 85,  106 => 84,  102 => 83,  98 => 82,  88 => 81,  80 => 76,  77 => 75,  75 => 74,  73 => 73,  71 => 72,  69 => 71,  67 => 70,  65 => 69,  63 => 68,  61 => 67,  58 => 66,  56 => 65,  52 => 63,  49 => 62,  47 => 61,  45 => 60,  43 => 59,  41 => 58,  38 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/modal_action.js.twig", "/var/www/galette/templates/default/elements/js/modal_action.js.twig");
    }
}
