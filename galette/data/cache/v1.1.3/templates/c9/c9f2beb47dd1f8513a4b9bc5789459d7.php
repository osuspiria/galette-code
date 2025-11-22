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

/* elements/ajax_members.html.twig */
class __TwigTemplate_4759b64129dcae70ab426a5f17a0154c extends Template
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
        yield "<div class=\"ui stackable grid align-items-center\">
    <div class=\"eleven wide column\">
        <table id=\"listing\" class=\"listing select_members";
        // line 23
        if ( !($context["multiple"] ?? null)) {
            yield " single";
        }
        yield " ui celled table\">
            <thead>
                <tr>
                    <th class=\"listing id_row\">#</th>
                    <th class=\"listing left\">
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
        yield "
                    </th>
                    <th class=\"listing left\">
                        ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Zip - Town"), "html", null, true);
        yield "
                    </th>
                </tr>
            </thead>
            <tbody>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["members_list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 37
            yield "    ";
            if (( !array_key_exists("excluded", $context) || (($context["excluded"] ?? null) != CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 37)))) {
                // line 38
                yield "                <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "getRowClass", [], "method", false, false, false, 38), "html", null, true);
                yield "\">
                    <td class=\"right\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                    <td class=\"username_row\">
                    ";
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "isCompany", [], "method", false, false, false, 41)) {
                    // line 42
                    yield "                        <span>
                            <i class=\"ui building outline icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Company"), "html", null, true);
                    yield "</span>
                        </span>
                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["member"], "isMan", [], "method", false, false, false, 46)) {
                    // line 47
                    yield "                        <span>
                            <i class=\"ui male icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Man"), "html", null, true);
                    yield "</span>
                        </span>
                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 51
$context["member"], "isWoman", [], "method", false, false, false, 51)) {
                    // line 52
                    yield "                        <span>
                            <i class=\"ui female icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Woman"), "html", null, true);
                    yield "</span>
                        </span>
                    ";
                } else {
                    // line 57
                    yield "                        <span>
                            <i class=\"ui icon\" aria-hidden=\"true\"></i>
                        </span>
                    ";
                }
                // line 61
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "isAdmin", [], "method", false, false, false, 61)) {
                    // line 62
                    yield "                        <span>
                            <i class=\"ui user shield red icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Administrator"), "html", null, true);
                    yield "</span>
                        </span>
                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 66
$context["member"], "isStaff", [], "method", false, false, false, 66)) {
                    // line 67
                    yield "                        <span>
                            <i class=\"ui user tie orange icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Staff member"), "html", null, true);
                    yield "</span>
                        </span>
                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 71
$context["member"], "getManagedGroups", [], "method", false, false, false, 71)) {
                    // line 72
                    yield "                        <span>
                            <i class=\"ui users cog orange icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group manager"), "html", null, true);
                    yield "</span>
                        </span>
                    ";
                } else {
                    // line 77
                    yield "                        <i class=\"ui icon\" aria-hidden=\"true\"></i>
                    ";
                }
                // line 79
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                yield "\" class=\"choice\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sfullname", [], "any", false, false, false, 79), "html", null, true);
                yield "</a>
                    </td>
                    <td>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "zipcode", [], "any", false, false, false, 81), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "town", [], "any", false, false, false, 81), "html", null, true);
                yield "</td>
                </tr>
    ";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            yield "                <tr><td colspan=\"3\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("no member"), "html", null, true);
            yield "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "            </tbody>
";
        // line 88
        if (($context["is_paginated"] ?? null)) {
            // line 89
            yield "            <tfoot>
            ";
            // line 91
            yield "                <tr>
                    <td colspan=\"3\" class=\"center\">
                        <div class=\"ui basic left aligned fitted segment\">
                            <div class=\"ui inverted pagination stackable menu\">
                                <div class=\"header item\">
                                    ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Pages:"), "html", null, true);
            yield "
                                </div>
                                ";
            // line 98
            yield ($context["pagination"] ?? null);
            yield "
                            </div>
                        </div>
                    </td>
                </tr>
            </tfoot>
";
        }
        // line 105
        yield "        </table>
    </div>
";
        // line 107
        if (($context["multiple"] ?? null)) {
            // line 108
            yield "    <div class=\"five wide column\">
        <section id=\"selected_members\" class=\"ui basic fitted segment\">
            <div class=\"ui top attached accordion-styled header\">
                ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Selected members"), "html", null, true);
            yield "
            </div>
            <div class=\"ui bottom attached accordion-styled segment\">
    ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["selected_members"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 115
                yield "    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 116
                yield "                <p id=\"none_selected\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No members has been selected yet."), "html", null, true);
                yield "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "                <ul class=\"ui middle aligned relaxed divided selection list\">
    ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["selected_members"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 120
                yield "                    <li id=\"member_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "id", [], "any", false, false, false, 120), "html", null, true);
                yield "\" class=\"item\">
                        <i class=\"ui user minus icon\" aria-hidden=\"true\"></i>
                        <span class=\"ui content\">";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "sfullname", [], "any", false, false, false, 122), "html", null, true);
                yield "</span>
                    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "    ";
            if ((array_key_exists("unreachables_members", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["unreachables_members"] ?? null)) > 0))) {
                // line 126
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["unreachables_members"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                    // line 127
                    yield "                    <li id=\"member_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "id", [], "any", false, false, false, 127), "html", null, true);
                    yield "\" class=\"item\">
                        <i class=\"icons\">
                            <i class=\"dont disabled icon\" aria-hidden=\"true\"></i>
                            <i class=\"top right corner minus icon\" aria-hidden=\"true\"></i>
                        </i>
                        <span class=\"ui disabled content\">";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "sfullname", [], "any", false, false, false, 132), "html", null, true);
                    yield "</span>
                    </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                yield "    ";
            }
            // line 136
            yield "                </ul>
            </div>
            <div class=\"ui basic center aligned fitted segment\">
                <button class=\"ui fluid primary button\" id=\"btnvalid\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Validate"), "html", null, true);
            yield "</button>
                ";
            // line 140
            if (array_key_exists("the_id", $context)) {
                // line 141
                yield "                    <input type=\"hidden\" name=\"the_id\" id=\"the_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["the_id"] ?? null), "html", null, true);
                yield "\"/>
                ";
            }
            // line 143
            yield "            </div>
        </section>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/ajax_members.html.twig";
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
        return array (  325 => 143,  319 => 141,  317 => 140,  313 => 139,  308 => 136,  305 => 135,  296 => 132,  287 => 127,  282 => 126,  279 => 125,  270 => 122,  264 => 120,  260 => 119,  257 => 118,  248 => 116,  243 => 115,  238 => 114,  232 => 111,  227 => 108,  225 => 107,  221 => 105,  211 => 98,  206 => 96,  199 => 91,  196 => 89,  194 => 88,  191 => 87,  182 => 85,  171 => 81,  163 => 79,  159 => 77,  153 => 74,  149 => 72,  147 => 71,  142 => 69,  138 => 67,  136 => 66,  131 => 64,  127 => 62,  124 => 61,  118 => 57,  112 => 54,  108 => 52,  106 => 51,  101 => 49,  97 => 47,  95 => 46,  90 => 44,  86 => 42,  84 => 41,  79 => 39,  74 => 38,  71 => 37,  66 => 36,  58 => 31,  52 => 28,  42 => 23,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/ajax_members.html.twig", "/var/www/galette/templates/default/elements/ajax_members.html.twig");
    }
}
