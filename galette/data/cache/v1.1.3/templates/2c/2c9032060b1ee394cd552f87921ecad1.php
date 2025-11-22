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

/* pages/members_list.html.twig */
class __TwigTemplate_212254e13949aa5c7a5d1cc9244d6651 extends Template
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
            'legend' => [$this, 'block_legend'],
            'body' => [$this, 'block_body'],
            'batch_selection' => [$this, 'block_batch_selection'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "pages/members_list.html.twig", 23)->unwrap();
        // line 25
        $context["basic_table"] = true;
        // line 27
        $context["nb"] = ($context["nb_members"] ?? null);
        // line 29
        $context["form"] = ["order" => ["name" => "members"], "route" => ["name" => "batch-memberslist"]];
        // line 453
        if (((($context["nb_members"] ?? null) != 0) && (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [], "method", false, false, false, 453) && (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_groupsmanagers_exports", [], "any", false, false, false, 453) || CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_groupsmanagers_mailings", [], "any", false, false, false, 453))) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 453)) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 453)))) {
            // line 454
            $context["batch"] = ["route" => ["name" => "batch-memberslist"], "modal" => ["title" => $this->env->getFunction('_T')->getCallable()("No member selected"), "content" => $this->env->getFunction('_T')->getCallable()("Please make sure to select at least one member from the list to perform this action.")]];
            // line 463
            $context["batch_actions"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getBatchActions");
        }
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/members_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count member", "%count members",         // line 49
($context["nb_members"] ?? null)), ["%count" => ($context["nb_members"] ?? null)]), "route" => ["name" => "filter-memberslist"]];
        // line 54
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 57
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 58) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 58)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isGroupManager", [], "method", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_groupsmanagers_create_member", [], "any", false, false, false, 58)))) {
            // line 59
            yield "        <a
                class=\"ui tiny labeled icon button\"
                href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addMember"), "html", null, true);
            yield "\"
        >
            <i class=\"plus circle green icon\" aria-hidden=\"true\"></i>
            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a member"), "html", null, true);
            yield "
        </a>
    ";
        }
        return; yield '';
    }

    // line 69
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        yield "    ";
        $context["columns"] = [];
        // line 71
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["galette_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 72
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 72) == "id_adh")) {
                // line 73
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 73)) {
                    // line 74
                    yield "                ";
                    $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Mbr id"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::ORDERBY_ID")]]);
                    // line 80
                    yield "            ";
                } else {
                    // line 81
                    yield "                ";
                    $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => "#"]]);
                    // line 84
                    yield "            ";
                }
                // line 85
                yield "        ";
            } else {
                // line 86
                yield "            ";
                $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => CoreExtension::getAttribute($this->env, $this->source,                 // line 88
$context["column"], "label", [], "any", false, false, false, 88), "order" => CoreExtension::getAttribute($this->env, $this->source,                 // line 89
$context["column"], "field_id", [], "any", false, false, false, 89)]]);
                // line 92
                yield "        ";
            }
            // line 93
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
    ";
        // line 95
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 98
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("filter-memberslist"), "html", null, true);
        yield "\" method=\"post\" id=\"members_list_search_filter\" class=\"ui form filters\">
        <div class=\"ui secondary yellow segment\">
";
        // line 101
        if (( !array_key_exists("adv_filters", $context) ||  !($context["adv_filters"] ?? null))) {
            // line 102
            yield "            <div class=\"five fields\">
                <div class=\"field\">
                    <label for=\"filter_str\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search:"), "html", null, true);
            yield "</label>
                    <input type=\"text\" name=\"filter_str\" id=\"filter_str\" value=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_str", [], "any", false, false, false, 105), "html", null, true);
            yield "\" type=\"search\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a value"), "html", null, true);
            yield "\"/>
                </div>
                <div class=\"field\">
                    <label for=\"field_filter\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("in:"), "html", null, true);
            yield "</label>
                    <select name=\"field_filter\" id=\"field_filter\" class=\"ui search dropdown\">
    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["field_filter_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 111
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "field_filter", [], "any", false, false, false, 111))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "                    </select>
                </div>
                <div class=\"field\">
                    <label for=\"filter_str\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("among:"), "html", null, true);
            yield "</label>
                    <select name=\"membership_filter\" class=\"ui search dropdown\">
                        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["membership_filter_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 119
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "membership_filter", [], "any", false, false, false, 119))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "                    </select>
                </div>
                <div class=\"flexend field\">
                    <label for=\"filter_account\" class=\"visually-hidden\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("among:"), "html", null, true);
            yield "</label>
                    <select name=\"filter_account\" class=\"ui search dropdown\">
                        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_accounts_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 127
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_account", [], "any", false, false, false, 127))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "                    </select>
                </div>
                <div class=\"flexend field\">
                    <label for=\"group_filter\" class=\"visually-hidden\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("among:"), "html", null, true);
            yield "</label>
                    <select name=\"group_filter\" class=\"ui search dropdown\">
                        <option value=\"0\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("All groups"), "html", null, true);
            yield "</option>
    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 136
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getId", [], "method", false, false, false, 136), "html", null, true);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "group_filter", [], "any", false, false, false, 136) == CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getId", [], "method", false, false, false, 136))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "getIndentName", [], "method", false, false, false, 136);
                yield "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            yield "                    </select>
                </div>
            </div>
            <div class=\"two fields\">
                <div class=\"field\">
                    <div class=\"inline fields\">
                        <label for=\"email_filter\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Members that have an email address:"), "html", null, true);
            yield "</label>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"email_filter\" id=\"filter_dc_email\" value=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_EMAIL"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email_filter", [], "any", false, false, false, 147) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_EMAIL"))) {
                yield " checked=\"checked\"";
            }
            yield ">
                                <label for=\"filter_dc_email\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
            yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"email_filter\" id=\"filter_with_email\" value=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_EMAIL"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email_filter", [], "any", false, false, false, 153) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_EMAIL"))) {
                yield " checked=\"checked\"";
            }
            yield ">
                                <label for=\"filter_with_email\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("With"), "html", null, true);
            yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"email_filter\" id=\"filter_without_email\" value=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_EMAIL"), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email_filter", [], "any", false, false, false, 159) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_EMAIL"))) {
                yield " checked=\"checked\"";
            }
            yield ">
                                <label for=\"filter_without_email\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Without"), "html", null, true);
            yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui right aligned basic fitted segment field\">
                    <button type=\"submit\"  class=\"tooltip action ui labeled icon primary button\" title=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
            yield "\" name=\"filter\">
                        <i class=\"search icon\" aria-hidden=\"true\"></i>
                        ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
            yield "
                    </button>
                    <button type=\"submit\"  class=\"tooltip action ui labeled icon button\" title=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save selected criteria"), "html", null, true);
            yield "\" name=\"savesearch\" id=\"savesearch\">
                        <i class=\"save blue icon\" aria-hidden=\"true\"></i>
                        ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
            yield "
                    </button>
                    <button type=\"submit\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
            yield "\">
                        <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                        ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
            yield "
                    </button>
                </div>
            </div>
";
        } else {
            // line 181
            yield "            <div class=\"field\">
                <span class=\"ui primary ribbon label\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Advanced search mode"), "html", null, true);
            yield "</span>
                <button type=\"submit\"  class=\"tooltip action ui labeled icon primary button\" title=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save current advanced search criteria"), "html", null, true);
            yield "\" name=\"savesearch\" id=\"savesearch\">
                    <i class=\"save icon\" aria-hidden=\"true\"></i>
                    ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
            yield "
                </button>
                <button type=\"submit\" class=\"tooltip action ui labeled icon button\" title=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change search criteria"), "html", null, true);
            yield "\" name=\"adv_criteria\">
                    <i class=\"edit blue icon\" aria-hidden=\"true\"></i>
                    ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change criteria"), "html", null, true);
            yield "
                </button>
                <input type=\"hidden\" name=\"advanced_search\" value=\"1\" class=\"ui button\"/>
                <button type=\"submit\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
            yield "\">
                    <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                    ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
            yield "
                </button>
                <div class=\"ui basic fluid accordion\">
                    <div class=\"title\">
                        <i class=\"dropdown icon\" aria-hidden=\"true\"></i>
                        ";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show/hide query"), "html", null, true);
            yield "
                    </div>
                    <div class=\"content\">
                        <div id=\"sql_qry\" class=\"ui grey inverted segment\">";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "query", [], "any", false, false, false, 202), "html", null, true);
            yield "</div>
                    </div>
                </div>
            </div>
";
        }
        // line 207
        yield "            ";
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/members_list.html.twig", 207)->unwrap()->yield($context);
        // line 208
        yield "        </div>
    </form>
";
        return; yield '';
    }

    // line 212
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        yield "    ";
        if ((($context["nb_members"] ?? null) != 0)) {
            // line 214
            yield "        <div id=\"legende\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Legend"), "html", null, true);
            yield "\" class=\"ui modal\">
            <div class=\"header\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Legend"), "html", null, true);
            yield "</div>
            <div class=\"content\">
                <table class=\"ui stripped table\">
                    <thead>
                        <tr>
                            <th class=\"\" colspan=\"4\">";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reading the list"), "html", null, true);
            yield "</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th class=\"back\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "</th>
                            <td class=\"back\">";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active account"), "html", null, true);
            yield "</td>
                            <th class=\"inactive-account back\">";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name"), "html", null, true);
            yield "</th>
                            <td class=\"back\">";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive account"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <th class=\"cotis-ok color-sample\">&nbsp;</th>
                            <td class=\"back\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership in order"), "html", null, true);
            yield "</td>
                            <th class=\"cotis-soon color-sample\">&nbsp;</th>
                            <td class=\"back\">";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership will expire soon (&lt;30d)"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <th class=\"cotis-never color-sample\">&nbsp;</th>
                            <td class=\"back\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Never contributed"), "html", null, true);
            yield "</td>
                            <th class=\"cotis-late color-sample\">&nbsp;</th>
                            <td class=\"back\">";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Lateness in fee"), "html", null, true);
            yield "</td>
                        </tr>
                    </tbody>
                </table>
                <table class=\"ui stripped table\">
                    <thead>
                        <tr>
                            <th class=\"\" colspan=\"4\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
            yield "</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th class=\"action\">
                                <i class=\"ui user edit blue icon\" aria-hidden=\"true\"></i>
                            </th>
                            <td class=\"back\">";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Modification"), "html", null, true);
            yield "</td>
                            <th>
                                <i class=\"ui receipt green icon\" aria-hidden=\"true\"></i>
                            </th>
                            <td class=\"back\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contributions"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <th class=\"delete\">
                                <i class=\"ui user times red icon\" aria-hidden=\"true\"></i>
                            </th>
                            <td class=\"back\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Deletion"), "html", null, true);
            yield "</td>
                        </tr>
                    </tbody>
                </table>
                <table class=\"ui stripped table\">
                    <thead>
                        <tr>
                            <th colspan=\"4\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("User status/interactions"), "html", null, true);
            yield "</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th><i class=\"ui envelope outline teal icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Send an email"), "html", null, true);
            yield "</td>
                            <th><i class=\"ui building icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a company"), "html", null, true);
            yield "</td>
                        </tr>

                        <tr>
                            <th><i class=\"ui male icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a man"), "html", null, true);
            yield "</td>
                            <th><i class=\"ui female icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a woman"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <th><i class=\"ui user shield red icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Admin"), "html", null, true);
            yield "</td>
                            <th><i class=\"ui user tie orange icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Staff member"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <th><i class=\"ui users cog orange icon\" aria-hidden=\"true\"></i></th>
                            <td class=\"back\">";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group manager"), "html", null, true);
            yield "</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"actions\"><div class=\"ui labeled icon deny button\"><i class=\"times icon\" aria-hidden=\"true\"></i> ";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "html", null, true);
            yield "</div></div>
        </div>
    ";
        }
        return; yield '';
    }

    // line 308
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["members"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["ordre"] => $context["member"]) {
            // line 310
            yield "                    <tr class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "getRowClass", [], "method", false, false, false, 310), "html", null, true);
            yield "\">
    ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["galette_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 312
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 312) == "id_adh")) {
                    // line 313
                    yield "                        <td class=\"right\" data-scope=\"id\">
            ";
                    // line 314
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 314)) {
                        // line 315
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 315), "html", null, true);
                        yield "
            ";
                    } else {
                        // line 317
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ordre"] + 1) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "current_page", [], "any", false, false, false, 317) - 1) * ($context["numrows"] ?? null))), "html", null, true);
                        yield "
            ";
                    }
                    // line 319
                    yield "                        </td>
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 320
$context["column"], "field_id", [], "any", false, false, false, 320) == "list_adh_name")) {
                    // line 321
                    yield "                        <td class=\"username_row\" data-scope=\"row\">
                            <input type=\"checkbox\" name=\"entries_sel[]\" value=\"";
                    // line 322
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "__get", ["id"], "method", false, false, false, 322), "html", null, true);
                    yield "\"/>
            ";
                    // line 323
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "isCompany", [], "method", false, false, false, 323)) {
                        // line 324
                        yield "                            <span>
                                <i class=\"ui building outline icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 326
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a company"), "html", null, true);
                        yield "</span>
                            </span>
            ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 328
$context["member"], "isMan", [], "method", false, false, false, 328)) {
                        // line 329
                        yield "                            <span>
                                <i class=\"ui male icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 331
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a man"), "html", null, true);
                        yield "</span>
                            </span>
            ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 333
$context["member"], "isWoman", [], "method", false, false, false, 333)) {
                        // line 334
                        yield "                            <span>
                                <i class=\"ui female icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 336
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Is a woman"), "html", null, true);
                        yield "</span>
                            </span>
            ";
                    } else {
                        // line 339
                        yield "                            <i class=\"ui icon\" aria-hidden=\"true\"></i>
            ";
                    }
                    // line 341
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 341) != "")) {
                        // line 342
                        yield "                            <a href=\"mailto:";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 342), "html", null, true);
                        yield "\">
                                <i class=\"ui envelope outline teal icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 344
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Mail"), "html", null, true);
                        yield "</span>
                            </a>

            ";
                    } else {
                        // line 348
                        yield "                            <i class=\"ui icon\" aria-hidden=\"true\"></i>
            ";
                    }
                    // line 350
                    yield "            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "isAdmin", [], "method", false, false, false, 350)) {
                        // line 351
                        yield "                            <span>
                                <i class=\"ui user shield red icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 353
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Admin"), "html", null, true);
                        yield "</span>
                            </span>
            ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 355
$context["member"], "isStaff", [], "method", false, false, false, 355)) {
                        // line 356
                        yield "                            <span>
                                <i class=\"ui user tie orange icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 358
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Staff member"), "html", null, true);
                        yield "</span>
                            </span>
            ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 360
$context["member"], "getManagedGroups", [], "method", false, false, false, 360)) {
                        // line 361
                        yield "                            <span>
                                <i class=\"ui users cog orange icon tooltip\" aria-hidden=\"true\"></i>
                                <span class=\"ui special popup\">";
                        // line 363
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Group manager"), "html", null, true);
                        yield "</span>
                            </span>
            ";
                    } else {
                        // line 366
                        yield "                            <i class=\"ui icon\" aria-hidden=\"true\"></i>
            ";
                    }
                    // line 368
                    yield "                        ";
                    $context["mid"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 368);
                    // line 369
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 369)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sname", [], "any", false, false, false, 369), "html", null, true);
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "company_name", [], "any", false, false, false, 369)) {
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "company_name", [], "any", false, false, false, 369), "html", null, true);
                        yield ")";
                    }
                    yield "</a>
                        </td>
        ";
                } else {
                    // line 372
                    yield "            ";
                    $context["propname"] = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "propname", [], "any", false, false, false, 372);
                    // line 373
                    yield "            ";
                    $context["value"] = null;
                    // line 374
                    yield "
            ";
                    // line 375
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 375) == "nom_adh")) {
                        // line 376
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sfullname", [], "any", false, false, false, 376);
                        // line 377
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 377) == "pseudo_adh")) {
                        // line 378
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], ($context["propname"] ?? null), [], "any", false, false, false, 378);
                        // line 379
                        yield "            ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 379) == "tel_adh") || (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 379) == "gsm_adh"))) {
                        // line 380
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 380) == "id_statut")) {
                        // line 381
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sstatus", [], "any", false, false, false, 381);
                        // line 382
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 382) == "titre_adh")) {
                        // line 383
                        yield "                ";
                        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["member"], "title", [], "any", false, false, false, 383))) {
                            // line 384
                            yield "                    ";
                            $context["value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "title", [], "any", false, false, false, 384), "long", [], "any", false, false, false, 384);
                            // line 385
                            yield "                ";
                        }
                        // line 386
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 386) == "pref_lang")) {
                        // line 387
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getNameFromId", [CoreExtension::getAttribute($this->env, $this->source, $context["member"], "language", [], "any", false, false, false, 387)], "method", false, false, false, 387);
                        // line 388
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 388) == "adresse_adh")) {
                        // line 389
                        yield "                ";
                        $context["value"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "saddress", [], "any", false, false, false, 389), "html"));
                        // line 390
                        yield "                ";
                        $context["escaped"] = true;
                        // line 391
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 391) == "bool_display_info")) {
                        // line 392
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sappears_in_list", [], "any", false, false, false, 392);
                        // line 393
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 393) == "activite_adh")) {
                        // line 394
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sactive", [], "any", false, false, false, 394);
                        // line 395
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 395) == "id_statut")) {
                        // line 396
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sstatus", [], "any", false, false, false, 396);
                        // line 397
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 397) == "bool_admin_adh")) {
                        // line 398
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sadmin", [], "any", false, false, false, 398);
                        // line 399
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 399) == "bool_exempt_adh")) {
                        // line 400
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sdue_free", [], "any", false, false, false, 400);
                        // line 401
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 401) == "sexe_adh")) {
                        // line 402
                        yield "                ";
                        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "sgender", [], "any", false, false, false, 402);
                        // line 403
                        yield "            ";
                    } elseif ((($context["propname"] ?? null) == "contribstatus")) {
                        // line 404
                        yield "                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["member"], "isSponsor", [], "method", false, false, false, 404)) {
                            // line 405
                            yield "                    ";
                            $context["value"] = (("<i class=\"donate green icon tooltip\" title=\"" . $this->env->getFunction('_T')->getCallable()("Is a sponsor")) . "\"></i>");
                            // line 406
                            yield "                ";
                        } else {
                            // line 407
                            yield "                    ";
                            $context["value"] = "<i class=\"ui icon\" aria-hidden=\"true\"></i>";
                            // line 408
                            yield "                ";
                        }
                        // line 409
                        yield "                ";
                        $context["value"] = (($context["value"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["member"], "contribstatus", [], "any", false, false, false, 409));
                        // line 410
                        yield "                ";
                        $context["escaped"] = true;
                        // line 411
                        yield "            ";
                    }
                    // line 412
                    yield "
            ";
                    // line 414
                    yield "            ";
                    if ( !($context["value"] ?? null)) {
                        // line 415
                        yield "                ";
                        $context["propvalue"] = CoreExtension::getAttribute($this->env, $this->source, $context["member"], ($context["propname"] ?? null), [], "any", false, false, false, 415);
                        // line 416
                        yield "                ";
                        if (($context["propvalue"] ?? null)) {
                            // line 417
                            yield "                    ";
                            $context["value"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["propvalue"] ?? null), "html");
                            // line 418
                            yield "                ";
                        } else {
                            // line 419
                            yield "                    ";
                            $context["value"] = ($context["propvalue"] ?? null);
                            // line 420
                            yield "                ";
                        }
                        // line 421
                        yield "            ";
                    } elseif ( !array_key_exists("escaped", $context)) {
                        // line 422
                        yield "                ";
                        $context["value"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html");
                        // line 423
                        yield "            ";
                    }
                    // line 424
                    yield "
                        <td data-col-label=\"";
                    // line 425
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 425), "html", null, true);
                    yield "\">
            ";
                    // line 430
                    yield "            ";
                    if (($context["value"] ?? null)) {
                        // line 431
                        yield "                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 431) == "email_adh")) {
                            // line 432
                            yield "                                <a href=\"mailto:";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "</a>
                ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 433
$context["column"], "field_id", [], "any", false, false, false, 433) == "tel_adh") || (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field_id", [], "any", false, false, false, 433) == "gsm_adh"))) {
                            // line 434
                            yield "                                <a href=\"tel:";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield "</a>
                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 435
$context["column"], "field_id", [], "any", false, false, false, 435) == "parent_id")) {
                            // line 436
                            yield "                                <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "parent", [], "any", false, false, false, 436)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('memberName')->getCallable()(["id" => CoreExtension::getAttribute($this->env, $this->source, $context["member"], "parent", [], "any", false, false, false, 436)]), "html", null, true);
                            yield "</a>
                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 437
$context["column"], "field_id", [], "any", false, false, false, 437) == "ddn_adh")) {
                            // line 438
                            yield "                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "getAge", [], "method", false, false, false, 438), "html", null, true);
                            yield "
                ";
                        } else {
                            // line 440
                            yield "                                ";
                            yield ($context["value"] ?? null);
                            yield "
                ";
                        }
                        // line 442
                        yield "            ";
                    }
                    // line 443
                    yield "                        </td>
        ";
                }
                // line 445
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_draw_actions", [$context["member"], ($context["login"] ?? null)], 446, $context, $this->getSourceContext());
            yield "
                    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 449
            yield "                    <tr><td colspan=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["galette_list"] ?? null)) + 1), "html", null, true);
            yield "\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member"), "html", null, true);
            yield "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 466
    public function block_batch_selection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 467
        yield "                    else if (value == 'sendmail') {
    ";
        // line 468
        if ((($context["existing_mailing"] ?? null) == true)) {
            // line 469
            yield "                        _sendmail(true);
    ";
        } else {
            // line 471
            yield "                        _sendmail();
    ";
        }
        // line 473
        yield "                    }
                    else if (value == 'attendance_sheet') {
                        _attendance_sheet_details();
                    }

                    else if (value == 'masscontributions') {
                        _masscontributions();
                    }

                    else if (value == 'masschange') {
                        _masschange();
                    }
";
        return; yield '';
    }

    // line 487
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 488
        yield "    ";
        $context["batch_selection"] = ["masschange", "masscontributions", "sendmail", "attendance_sheet_details"];
        // line 489
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"text/javascript\">
        ";
        // line 492
        yield "        \$(function(){
            \$('#savesearch').on('click', function(e) {
                e.preventDefault();

                \$('body').modal({
                    title: '";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search title"), "js"), "html", null, true);
        yield "',
                    class: 'tiny',
                    content: '<div class=\"ui input\"><input type=\"text\" name=\"search_title\" id=\"search_title\"/></div>',
                    onApprove: function() {
                        var _form = \$('#members_list_search_filter');
                        var _data = _form.serialize();
                        _data = _data + \"&search_title=\" + \$('#search_title').val();
                        \$.ajax({
                            url: '";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("saveSearch"), "html", null, true);
        yield "',
                            type: \"POST\",
                            data: _data,
                            datatype: 'json',
                            ";
        // line 509
        yield from         $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 509)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
        // line 512
        yield ",
                            success: function(res) {
                                \$.ajax({
                                    url: '";
        // line 515
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
                        });
                    },
                    actions: [{
                        text    : '";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "js"), "html", null, true);
        yield "',
                        icon    : 'save',
                        class   : 'icon labeled primary approve'
                    }, {
                        text    : '";
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cancel"), "js"), "html", null, true);
        yield "',
                        icon    : 'times',
                        class   : 'icon labeled cancel'
                    }]
                }).modal('show');
            });

        });
";
        // line 556
        if ((($context["nb_members"] ?? null) != 0)) {
            // line 557
            yield "        var _sendmail = function(existing){
            var _form = \$('#listform');
                _form.append(\$('<input type=\"hidden\" name=\"sendmail\" value=\"true\"/>'));
                _form.append(\$('<input type=\"hidden\" name=\"mailing_new\" value=\"true\"/>'));
                _form.append(\$('<input type=\"hidden\" name=\"mailing\" value=\"true\"/>'));
            var _redirect = '";
            // line 562
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("mailing"), "html", null, true);
            yield "';

            if (existing) {
                ";
            // line 565
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 565)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Existing mailing"), "js"), "modal_content_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("A mailing already exists. Do you want to create a new one or resume the existing?"), "js"), "modal_class" => "tiny", "modal_onapprove" => "_form.submit();", "modal_approve_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("New"), "js"), "modal_approve_icon" => "plus", "modal_approve_color" => "green", "modal_additional_button" => ["text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Resume"), "js"), "icon" => "edit", "class" => "blue", "click" => "function() { location.href = _redirect; }"]]));
            // line 580
            yield "            } else {
                _form.submit();
            }
        }
        var _attendance_sheet_details = function(){
            \$.ajax({
                url: '";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("attendance_sheet_details"), "html", null, true);
            yield "',
                type: \"POST\",
                data: {
                    ajax: true,
                    selection: \$('#listform input[type=\\\"checkbox\\\"]:checked').map(function(){
                        return \$(this).val();
                    }).get()
                },
                dataType: 'html',
                ";
            // line 595
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 595)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 598
            yield ",
                success: function(res){
                    var _res = \$(res);

                    \$('body').append(_res);

                    ";
            // line 604
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 604)->unwrap()->yield(CoreExtension::merge($context, ["modal_selector" => "#attendance_sheet_details", "modal_without_title" => true, "modal_class" => "tiny", "modal_onshow" => "_batchAjaxMapper();", "modal_onapprove" => "\$('#attendance_sheet_details form').submit();"]));
            // line 611
            yield "                },
                error: function() {
                    ";
            // line 613
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 613)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying attendance sheet details interface :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 621
            yield "                }
            });
        }
        var _masscontributions = function(){
            \$.ajax({
                url: '";
            // line 626
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("batch-memberslist"), "html", null, true);
            yield "',
                type: \"POST\",
                data: {
                    ajax: true,
                    masscontributions: true,
                    entries_sel: \$('#listform input[type=\\\"checkbox\\\"]:checked').map(function(){
                        return \$(this).val();
                    }).get()
                },
                datatype: 'html',
                ";
            // line 636
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 636)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 639
            yield ",
                success: function(res){
                    var _res = \$(res);

                    \$('body').append(_res);

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
            // line 655
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 655)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 658
            yield ",
                            success: function(data, status, xhr) {
                                var _res = \$(data);

                                \$('#mass_contributions').remove();
                                \$('body').append(_res);

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
            // line 674
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 674)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 677
            yield ",
                                        success: function(res) {
                                            window.location.href = _form.find('input[name=redirect_uri]').val();
                                        },
                                        error: function() {
                                            \$('#mass_contributions').modal('hide dimmer').remove();
                                            ";
            // line 683
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 683)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 691
            yield "                                        }
                                    });
                                });

                                ";
            // line 695
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 695)->unwrap()->yield(CoreExtension::merge($context, ["modal_selector" => "#mass_contributions", "modal_without_title" => true, "modal_content_class" => "scrolling", "modal_onshow" => "_batchAjaxMapper();_formValidationInModal('#mass_contributions');", "modal_onapprove" => "var submitted = _formSubmitInModal('#mass_contributions');if (!submitted){return false;}"]));
            // line 702
            yield "                            },
                            error: function() {
                                ";
            // line 704
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 704)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 712
            yield "                            }
                        });
                    });

                    ";
            // line 716
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 716)->unwrap()->yield(CoreExtension::merge($context, ["modal_selector" => "#mass_contributions", "modal_without_title" => true, "modal_class" => "mini", "modal_onshow" => "_batchAjaxMapper();", "modal_onapprove" => "\$('#mass_contributions form').submit();"]));
            // line 723
            yield "                },
                error: function() {
                    ";
            // line 725
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 725)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 733
            yield "                }
            });
        }
        var _masschange = function(){
            \$.ajax({
                url: '";
            // line 738
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("batch-memberslist"), "html", null, true);
            yield "',
                type: \"POST\",
                data: {
                    ajax: true,
                    masschange: true,
                    entries_sel: \$('#listform input[type=\\\"checkbox\\\"]:checked').map(function(){
                        return \$(this).val();
                    }).get()
                },
                datatype: 'json',
                ";
            // line 748
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 748)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 751
            yield ",
                success: function(res){
                    var _res = \$(res);

                    \$('body').append(_res);

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
            // line 766
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 766)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 769
            yield ",
                            success: function(data, status, xhr) {
                                var _res = \$(data);

                                \$('#mass_change').remove();
                                \$('body').append(_res);

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
            // line 785
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/members_list.html.twig", 785)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action", "selector" => ".loader_selector"]));
            // line 788
            yield ",
                                        success: function(res) {
                                            window.location.href = _form.find('input[name=redirect_uri]').val();
                                        },
                                        error: function() {
                                            ";
            // line 793
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 793)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 801
            yield "                                        }
                                    });
                                });

                                ";
            // line 805
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 805)->unwrap()->yield(CoreExtension::merge($context, ["modal_selector" => "#mass_change", "modal_without_title" => true, "modal_onapprove" => "\$('#mass_change form').submit();"]));
            // line 810
            yield "                            },
                            error: function() {
                                ";
            // line 812
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 812)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 820
            yield "                            }
                        });
                    });

                    ";
            // line 824
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 824)->unwrap()->yield(CoreExtension::merge($context, ["modal_selector" => "#mass_change", "modal_without_title" => true, "modal_content_class" => "scrolling", "modal_onshow" => "_massCheckboxes('#mass_change');_batchAjaxMapper();", "modal_onapprove" => "\$('#mass_change form').submit();"]));
            // line 831
            yield "                },
                error: function() {
                    ";
            // line 833
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/members_list.html.twig", 833)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 841
            yield "                }
            });
        }
        var _batchAjaxMapper = function(){
            \$('.modal-form .ui.dropdown, .modal-form select:not(.nochosen)').dropdown();
            \$('.modal-form .ui.checkbox, .modal-form .ui.radio.checkbox').checkbox();
            \$('.modal-form a[title], .modal-form .tooltip').popup({
                variation: 'inverted',
                inline: false,
                addTouchEvents: false,
            });
            ";
            // line 852
            yield from             $this->loadTemplate("elements/js/calendar.js.twig", "pages/members_list.html.twig", 852)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".modal-form [id\$='rangestart'], .modal-form [id\$='rangeend']"]));
            // line 855
            yield "        }
        var _formValidationInModal = function(modal){
            \$(modal +' form').form({
                inline: true,
                autoCheckRequired: true,
                prompt: {
                    empty: '";
            // line 861
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Required field!"), "js"), "html", null, true);
            yield "'
                }
            })
        }
        var _formSubmitInModal = function(modal){
            var validated = \$(modal +' form').form('is valid');
            if(validated) {
                \$(modal +' form').submit();
                \$(modal).modal('hide dimmer').remove();
            } else {
                \$(modal +' form').form('validate form');
                return false;
            }
        }
";
        }
        // line 876
        yield "    </script>
";
        return; yield '';
    }

    // line 38
    public function macro_draw_actions($__member__ = null, $__login__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "member" => $__member__,
            "login" => $__login__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "                    <td class=\"center actions_row\">
    ";
            // line 40
            $context["actions"] = $this->env->getFunction('callstatic')->getCallable()("\\Galette\\Core\\Galette", "getListActions", ($context["member"] ?? null));
            // line 41
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 42
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_drawListAction", [CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "route", [], "any", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 42), (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 42)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 42)) : (null))], 42, $context, $this->getSourceContext());
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                    </td>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/members_list.html.twig";
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
        return array (  1516 => 44,  1507 => 42,  1502 => 41,  1500 => 40,  1497 => 39,  1484 => 38,  1478 => 876,  1460 => 861,  1452 => 855,  1450 => 852,  1437 => 841,  1435 => 833,  1431 => 831,  1429 => 824,  1423 => 820,  1421 => 812,  1417 => 810,  1415 => 805,  1409 => 801,  1407 => 793,  1400 => 788,  1398 => 785,  1380 => 769,  1378 => 766,  1361 => 751,  1359 => 748,  1346 => 738,  1339 => 733,  1337 => 725,  1333 => 723,  1331 => 716,  1325 => 712,  1323 => 704,  1319 => 702,  1317 => 695,  1311 => 691,  1309 => 683,  1301 => 677,  1299 => 674,  1281 => 658,  1279 => 655,  1261 => 639,  1259 => 636,  1246 => 626,  1239 => 621,  1237 => 613,  1233 => 611,  1231 => 604,  1223 => 598,  1221 => 595,  1209 => 586,  1201 => 580,  1199 => 565,  1193 => 562,  1186 => 557,  1184 => 556,  1173 => 548,  1166 => 544,  1134 => 515,  1129 => 512,  1127 => 509,  1120 => 505,  1109 => 497,  1102 => 492,  1096 => 489,  1093 => 488,  1089 => 487,  1072 => 473,  1068 => 471,  1064 => 469,  1062 => 468,  1059 => 467,  1055 => 466,  1041 => 449,  1032 => 446,  1026 => 445,  1022 => 443,  1019 => 442,  1013 => 440,  1005 => 438,  1003 => 437,  996 => 436,  994 => 435,  987 => 434,  985 => 433,  978 => 432,  975 => 431,  972 => 430,  968 => 425,  965 => 424,  962 => 423,  959 => 422,  956 => 421,  953 => 420,  950 => 419,  947 => 418,  944 => 417,  941 => 416,  938 => 415,  935 => 414,  932 => 412,  929 => 411,  926 => 410,  923 => 409,  920 => 408,  917 => 407,  914 => 406,  911 => 405,  908 => 404,  905 => 403,  902 => 402,  899 => 401,  896 => 400,  893 => 399,  890 => 398,  887 => 397,  884 => 396,  881 => 395,  878 => 394,  875 => 393,  872 => 392,  869 => 391,  866 => 390,  863 => 389,  860 => 388,  857 => 387,  854 => 386,  851 => 385,  848 => 384,  845 => 383,  842 => 382,  839 => 381,  836 => 380,  833 => 379,  830 => 378,  827 => 377,  824 => 376,  822 => 375,  819 => 374,  816 => 373,  813 => 372,  799 => 369,  796 => 368,  792 => 366,  786 => 363,  782 => 361,  780 => 360,  775 => 358,  771 => 356,  769 => 355,  764 => 353,  760 => 351,  757 => 350,  753 => 348,  746 => 344,  740 => 342,  737 => 341,  733 => 339,  727 => 336,  723 => 334,  721 => 333,  716 => 331,  712 => 329,  710 => 328,  705 => 326,  701 => 324,  699 => 323,  695 => 322,  692 => 321,  690 => 320,  687 => 319,  681 => 317,  675 => 315,  673 => 314,  670 => 313,  667 => 312,  663 => 311,  658 => 310,  653 => 309,  649 => 308,  640 => 303,  631 => 297,  624 => 293,  619 => 291,  612 => 287,  607 => 285,  599 => 280,  594 => 278,  585 => 272,  575 => 265,  566 => 259,  559 => 255,  548 => 247,  538 => 240,  533 => 238,  526 => 234,  521 => 232,  514 => 228,  510 => 227,  506 => 226,  502 => 225,  494 => 220,  486 => 215,  481 => 214,  478 => 213,  474 => 212,  467 => 208,  464 => 207,  456 => 202,  450 => 199,  442 => 194,  437 => 192,  431 => 189,  426 => 187,  421 => 185,  416 => 183,  412 => 182,  409 => 181,  401 => 176,  396 => 174,  391 => 172,  386 => 170,  381 => 168,  376 => 166,  367 => 160,  359 => 159,  351 => 154,  343 => 153,  335 => 148,  327 => 147,  321 => 144,  313 => 138,  298 => 136,  294 => 135,  290 => 134,  285 => 132,  280 => 129,  265 => 127,  261 => 126,  256 => 124,  251 => 121,  236 => 119,  232 => 118,  227 => 116,  222 => 113,  207 => 111,  203 => 110,  198 => 108,  190 => 105,  186 => 104,  182 => 102,  180 => 101,  174 => 99,  170 => 98,  163 => 95,  160 => 94,  154 => 93,  151 => 92,  149 => 89,  148 => 88,  146 => 86,  143 => 85,  140 => 84,  137 => 81,  134 => 80,  131 => 74,  128 => 73,  125 => 72,  120 => 71,  117 => 70,  113 => 69,  104 => 64,  98 => 61,  94 => 59,  91 => 58,  87 => 57,  79 => 54,  77 => 49,  75 => 48,  71 => 47,  66 => 21,  63 => 463,  61 => 454,  59 => 453,  57 => 29,  55 => 27,  53 => 25,  51 => 23,  44 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/members_list.html.twig", "/var/www/galette/templates/default/pages/members_list.html.twig");
    }
}
