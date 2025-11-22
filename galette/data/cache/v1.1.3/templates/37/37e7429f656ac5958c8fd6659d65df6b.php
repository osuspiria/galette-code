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

/* pages/history.html.twig */
class __TwigTemplate_e622715a24d589e322764199d2bc19a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'infoline' => [$this, 'block_infoline'],
            'infoline_actions' => [$this, 'block_infoline_actions'],
            'header' => [$this, 'block_header'],
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "elements/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["nb"] = CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "getCount", [], "method", false, false, false, 23);
        // line 24
        $context["filters"] = CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 24);
        // line 25
        $context["no_action"] = true;
        // line 27
        $context["form"] = ["order" => ["name" => "history"]];
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/history.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count entry", "%count entries", CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["history"] ?? null), "getCount", [], "method", false, false, false, 35)), ["%count" => CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "getCount", [], "method", false, false, false, 35)]), "route" => ["name" => "history_filter"]];
        // line 40
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 43
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "    <a
        id=\"delete\"
        class=\"ui tiny labeled icon button\"
        href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("flushHistory"), "html", null, true);
        yield "\"
    >
        <i class=\"trash red icon\" aria-hidden=\"true\"></i>
        ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Flush the logs"), "html", null, true);
        yield "
    </a>
";
        return; yield '';
    }

    // line 54
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        yield "    ";
        $context["columns"] = [["label" => "#"], ["label" => $this->env->getFunction('_T')->getCallable()("Date"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\HistoryList::ORDERBY_DATE")], ["label" => $this->env->getFunction('_T')->getCallable()("IP"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\HistoryList::ORDERBY_IP")], ["label" => $this->env->getFunction('_T')->getCallable()("User"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\HistoryList::ORDERBY_USER")], ["label" => $this->env->getFunction('_T')->getCallable()("Action"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\HistoryList::ORDERBY_ACTION")], ["label" => $this->env->getFunction('_T')->getCallable()("Description")]];
        // line 63
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 66
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        yield "<form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("history_filter"), "html", null, true);
        yield "\" method=\"post\" class=\"ui form filters\">
    <div class=\"ui secondary yellow segment\">
        <div class=\"four fields\">
            <div class=\"two fields\">
                <div class=\"field\">
                    <label for=\"start_date_filter\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("since"), "html", null, true);
        yield "</label>
                    <div class=\"ui calendar\" id=\"contrib-rangestart\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input placeholder=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"start_date_filter\" id=\"start_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 76), "start_date_filter", [], "any", false, false, false, 76), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                </div>
                <div class=\"field\">
                    <label for=\"end_date_filter\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("until"), "html", null, true);
        yield "</label>
                    <div class=\"ui calendar\" id=\"contrib-rangeend\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input placeholder=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"end_date_filter\" id=\"end_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 85), "end_date_filter", [], "any", false, false, false, 85), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"field\">
                ";
        // line 91
        $context["users"] = CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "getUsersList", [], "method", false, false, false, 91);
        // line 92
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["users"] ?? null)) > 0)) {
            // line 93
            yield "                    <label for=\"user_filter\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member"), "html", null, true);
            yield "</label>
                    <select name=\"user_filter\" id=\"user_filter\" class=\"ui search dropdown\">
                        <option value=\"0\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select an user"), "html", null, true);
            yield "</option>
                        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 97
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["user"], "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 97), "user_filter", [], "any", false, false, false, 97) == $context["user"])) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["user"], "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                    </select>
                ";
        }
        // line 101
        yield "            </div>
            <div class=\"field\">
                ";
        // line 103
        $context["actions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "getActionsList", [], "method", false, false, false, 103);
        // line 104
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null)) > 0)) {
            // line 105
            yield "                    <label for=\"action_filter\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Action"), "html", null, true);
            yield "</label>
                    <select name=\"action_filter\" id=\"action_filter\" class=\"ui search dropdown\">
                        <option value=\"0\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select an action"), "html", null, true);
            yield "</option>
                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 109
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"]);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["history"] ?? null), "filters", [], "any", false, false, false, 109), "action_filter", [], "any", false, false, false, 109) == $context["action"])) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"]);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                    </select>
                ";
        }
        // line 113
        yield "            </div>
            <div class=\"ui right aligned basic fitted segment field flexend\">
                <button type=\"submit\" class=\"tooltip action ui labeled icon primary button\" title=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                    <i class=\"search icon\" aria-hidden=\"true\"></i>
                    ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                </button>
                <button type=\"submit\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                    <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                    ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>
    ";
        // line 126
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/history.html.twig", 126)->unwrap()->yield($context);
        // line 127
        yield "</form>
";
        return; yield '';
    }

    // line 130
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 132
            yield "        <tr class=\"";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132) % 2) == 0)) {
                yield "even";
            } else {
                yield "odd";
            }
            yield "\">
            <td data-scope=\"row\">
                ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134), "html", null, true);
            yield "
                <span class=\"visually-hidden\">
                        ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("History entry %id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 136)]), "html", null, true);
            yield "
                    </span>
            </td>
            <td data-col-label=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "date_log", [], "any", false, false, false, 139), $this->env->getFunction('_T')->getCallable()("Y-m-d H:i:s")), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("IP"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "ip_log", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("User"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "adh_log", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Action"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action_log", [], "any", false, false, false, 142));
            yield "</td>
            <td data-col-label=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Description"), "html", null, true);
            yield "\">
                ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "text_log", [], "any", false, false, false, 144));
            yield "
            ";
            // line 145
            if (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "sql_log", [], "any", false, false, false, 145)) {
                // line 146
                yield "                    <div class=\"tooltip title\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show associated query"), "html", null, true);
                yield "\">
                        <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
                        ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show associated query"), "html", null, true);
                yield "
                    </div>
                    <div class=\"content\">
                        <div class=\"ui grey inverted segment\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "sql_log", [], "any", false, false, false, 151));
                yield "</div>
                    </div>
                </div>
            ";
            }
            // line 155
            yield "            </td>
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
            // line 158
            yield "        <tr><td colspan=\"6\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("logs are empty"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 162
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        yield "        <script type=\"text/javascript\">
            \$(function() {
                ";
        // line 165
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/history.html.twig", 165)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#delete", "loader" => "button", "single_action" => "true"]));
        // line 170
        yield "            });
        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/history.html.twig";
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
        return array (  412 => 170,  410 => 165,  406 => 163,  402 => 162,  390 => 158,  375 => 155,  368 => 151,  362 => 148,  356 => 146,  354 => 145,  350 => 144,  346 => 143,  340 => 142,  334 => 141,  328 => 140,  322 => 139,  316 => 136,  311 => 134,  301 => 132,  282 => 131,  278 => 130,  272 => 127,  270 => 126,  262 => 121,  257 => 119,  252 => 117,  247 => 115,  243 => 113,  239 => 111,  224 => 109,  220 => 108,  216 => 107,  210 => 105,  207 => 104,  205 => 103,  201 => 101,  197 => 99,  182 => 97,  178 => 96,  174 => 95,  168 => 93,  165 => 92,  163 => 91,  152 => 85,  145 => 81,  135 => 76,  128 => 72,  119 => 67,  115 => 66,  107 => 63,  104 => 55,  100 => 54,  92 => 50,  86 => 47,  81 => 44,  77 => 43,  69 => 40,  67 => 35,  65 => 34,  61 => 33,  56 => 21,  54 => 27,  52 => 25,  50 => 24,  48 => 23,  41 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/history.html.twig", "/var/www/galette/templates/default/pages/history.html.twig");
    }
}
