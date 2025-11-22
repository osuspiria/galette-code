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

/* elements/js/calendar.js.twig */
class __TwigTemplate_071746c44120c371710820d86dacf68b extends Template
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
            $context["selector"] = "[id\$='rangestart'], [id\$='rangeend']";
        }
        // line 24
        yield "
    var _calendarDays = '";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("S,M,T,W,T,F,S"), "html", null, true);
        yield "';
    var _calendarMonths = [
        '";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("January"), "html", null, true);
        yield "',
        '";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("February"), "html", null, true);
        yield "',
        '";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("March"), "html", null, true);
        yield "',
        '";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("April"), "html", null, true);
        yield "',
        '";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("May"), "html", null, true);
        yield "',
        '";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("June"), "html", null, true);
        yield "',
        '";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("July"), "html", null, true);
        yield "',
        '";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("August"), "html", null, true);
        yield "',
        '";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("September"), "html", null, true);
        yield "',
        '";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("October"), "html", null, true);
        yield "',
        '";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("November"), "html", null, true);
        yield "',
        '";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("December"), "html", null, true);
        yield "'
    ];
    var _calendarMonthsShort = [
        '";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Jan"), "html", null, true);
        yield "',
        '";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Feb"), "html", null, true);
        yield "',
        '";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Mar"), "html", null, true);
        yield "',
        '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Apr"), "html", null, true);
        yield "',
        '";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("May"), "html", null, true);
        yield "',
        '";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Jun"), "html", null, true);
        yield "',
        '";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Jul"), "html", null, true);
        yield "',
        '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Aug"), "html", null, true);
        yield "',
        '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Sep"), "html", null, true);
        yield "',
        '";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Oct"), "html", null, true);
        yield "',
        '";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Nov"), "html", null, true);
        yield "',
        '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Dec"), "html", null, true);
        yield "'
    ];
    var _calendarToday = '";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Today"), "html", null, true);
        yield "';
    var _calendarNow = '";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Now"), "html", null, true);
        yield "';
    var _dateFormatter = '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fui_dateformatter"] ?? null), "html", null, true);
        yield "';
    function _calendarWidget(selector) {
        \$(selector).calendar({
            type: 'date',
            firstDayOfWeek: 1,
            monthFirst: false,
            text: {
                days: _calendarDays.split(','),
                months: _calendarMonths,
                monthsShort: _calendarMonthsShort,
                today: _calendarToday,
                now: _calendarNow,
            },
            formatter: {
                date: _dateFormatter,
            }
        });
    };
    _calendarWidget(\"";
        // line 74
        yield ($context["selector"] ?? null);
        yield "\");
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/js/calendar.js.twig";
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
        return array (  180 => 74,  159 => 56,  155 => 55,  151 => 54,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  47 => 25,  44 => 24,  40 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/js/calendar.js.twig", "/var/www/galette/templates/default/elements/js/calendar.js.twig");
    }
}
