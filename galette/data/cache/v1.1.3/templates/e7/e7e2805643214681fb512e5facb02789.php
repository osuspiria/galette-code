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

/* elements/js/loader.js.twig */
class __TwigTemplate_274751ff4b8d17e668cd50c558675eeb extends Template
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
        // line 35
        yield "
";
        // line 36
        if ( !array_key_exists("loader", $context)) {
            // line 37
            yield "    ";
            $context["loader"] = (( !array_key_exists("selector", $context)) ? ("dimmer") : ("inverted dimmer"));
            // line 38
            yield "    ";
            $context["loader_parent"] = (( !array_key_exists("selector", $context)) ? ("body") : (($context["selector"] ?? null)));
            // line 39
            yield "    ";
            $context["loader_text"] = ((array_key_exists("loader_text", $context)) ? (($context["loader_text"] ?? null)) : ($this->env->getFunction('_T')->getCallable()("Loading...")));
        } elseif ((        // line 40
($context["loader"] ?? null) == "button")) {
            // line 41
            yield "    ";
            $context["loader"] = ($context["loader"] ?? null);
            // line 42
            yield "    ";
            $context["loader_parent"] = ((array_key_exists("selector", $context)) ? (($context["selector"] ?? null)) : (""));
        } elseif ((        // line 43
($context["loader"] ?? null) == "action")) {
            // line 44
            yield "    ";
            $context["loader"] = "inverted dimmer";
            // line 45
            yield "    ";
            $context["loader_parent"] = ((array_key_exists("selector", $context)) ? (($context["selector"] ?? null)) : (""));
            // line 46
            yield "    ";
            $context["loader_text"] = ((array_key_exists("loader_text", $context)) ? (($context["loader_text"] ?? null)) : ($this->env->getFunction('_T')->getCallable()("Loading...")));
        } else {
            // line 48
            yield "    ";
            $context["loader"] = (($context["loader"] ?? null) . " loader");
            // line 49
            yield "    ";
            $context["loader_parent"] = ((array_key_exists("selector", $context)) ? (($context["selector"] ?? null)) : (""));
        }
        // line 51
        yield "
    beforeSend: function() {
        var _loader = \$('<div class=\"ui active ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader"] ?? null), "html", null, true);
        yield "\"><div class=\"ui";
        if (array_key_exists("loader_text", $context)) {
            yield " text";
        }
        yield " loader\">";
        if (array_key_exists("loader_text", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_text"] ?? null), "js"), "html", null, true);
        }
        yield "</div></div>');

";
        // line 55
        if ((($context["loader"] ?? null) == "button")) {
            // line 56
            yield "        \$('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
            yield "').addClass('loading');
";
        } else {
            // line 58
            yield "    ";
            if (((($context["loader"] ?? null) == "action") || (is_string($__internal_compile_0 = ($context["loader"] ?? null)) && is_string($__internal_compile_1 = "dimmer") && str_ends_with($__internal_compile_0, $__internal_compile_1)))) {
                // line 59
                yield "        \$('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
                yield " .dimmer:not(.modals)').remove();
    ";
            } elseif ((is_string($__internal_compile_2 =             // line 60
($context["loader"] ?? null)) && is_string($__internal_compile_3 = "loader") && str_ends_with($__internal_compile_2, $__internal_compile_3))) {
                // line 61
                yield "        \$('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
                yield " .loader').remove();
    ";
            }
            // line 63
            yield "    \$('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
            yield "').append(_loader);
";
        }
        // line 65
        yield "
";
        // line 66
        if (array_key_exists("extra_beforesend", $context)) {
            // line 67
            yield "        ";
            yield ($context["extra_beforesend"] ?? null);
            yield "
";
        }
        // line 69
        yield "
    },
    complete: function() {

";
        // line 73
        if ((($context["loader"] ?? null) == "button")) {
            // line 74
            yield "        \$('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
            yield "').removeClass('loading');
";
        } else {
            // line 76
            yield "    ";
            if ((is_string($__internal_compile_4 = ($context["loader"] ?? null)) && is_string($__internal_compile_5 = "dimmer") && str_ends_with($__internal_compile_4, $__internal_compile_5))) {
                // line 77
                yield "        \$('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
                yield " .dimmer:not(.modals)').remove();
    ";
            } elseif ((is_string($__internal_compile_6 =             // line 78
($context["loader"] ?? null)) && is_string($__internal_compile_7 = "loader") && str_ends_with($__internal_compile_6, $__internal_compile_7))) {
                // line 79
                yield "        \$('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["loader_parent"] ?? null), "html", null, true);
                yield " .loader').remove();
    ";
            }
        }
        // line 82
        yield "
";
        // line 83
        if (array_key_exists("extra_complete", $context)) {
            // line 84
            yield "        ";
            yield ($context["extra_complete"] ?? null);
            yield "
";
        }
        // line 86
        yield "
    }
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/loader.js.twig";
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
        return array (  179 => 86,  173 => 84,  171 => 83,  168 => 82,  161 => 79,  159 => 78,  154 => 77,  151 => 76,  145 => 74,  143 => 73,  137 => 69,  131 => 67,  129 => 66,  126 => 65,  120 => 63,  114 => 61,  112 => 60,  107 => 59,  104 => 58,  98 => 56,  96 => 55,  83 => 53,  79 => 51,  75 => 49,  72 => 48,  68 => 46,  65 => 45,  62 => 44,  60 => 43,  57 => 42,  54 => 41,  52 => 40,  49 => 39,  46 => 38,  43 => 37,  41 => 36,  38 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/loader.js.twig", "/var/www/galette/templates/default/elements/js/loader.js.twig");
    }
}
