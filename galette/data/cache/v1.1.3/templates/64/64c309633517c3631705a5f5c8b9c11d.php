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

/* pages/transactions_list.html.twig */
class __TwigTemplate_35f7ddd449a55ddde5c5e52f3f7c3714 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'search' => [$this, 'block_search'],
            'infoline' => [$this, 'block_infoline'],
            'infoline_actions' => [$this, 'block_infoline_actions'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'legend' => [$this, 'block_legend'],
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
        $context["basic_table"] = true;
        // line 25
        $context["form"] = ["route" => ["name" => "payments_filter", "args" => ["type" => "transactions"]], "order" => ["name" => "contributions", "args" => ["type" => "transactions"]]];
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/transactions_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("payments_filter", ["type" => "transactions"]), "html", null, true);
        yield "\" method=\"post\" class=\"ui form filters\">
        <div class=\"ui secondary yellow segment\">
            <div class=\"two fields\">
                <div class=\"two fields\">
                    <div class=\"field\">
                        <label for=\"start_date_filter\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show transactions since"), "html", null, true);
        yield "</label>
                        <div class=\"ui calendar\" id=\"contrib-rangestart\">
                            <div class=\"ui input left icon\">
                                <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                <input placeholder=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"start_date_filter\" id=\"start_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "start_date_filter", [], "any", false, false, false, 48), "html", null, true);
        yield "\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"field\">
                        <label for=\"end_date_filter\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("until"), "html", null, true);
        yield "</label>
                        <div class=\"ui calendar\" id=\"contrib-rangeend\">
                            <div class=\"ui input left icon\">
                                <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                <input placeholder=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"end_date_filter\" id=\"end_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "end_date_filter", [], "any", false, false, false, 57), "html", null, true);
        yield "\"/>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui right aligned basic fitted segment field flexend\">
                    <button type=\"submit\"  class=\"tooltip action ui labeled icon primary button\" title=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                        <i class=\"search icon\" aria-hidden=\"true\"></i>
                        ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                    </button>
                    <button type=\"submit\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                        <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                        ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
        ";
        // line 75
        if (array_key_exists("member", $context)) {
            // line 76
            yield "            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 76) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 76)) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "canShow", [($context["login"] ?? null)], "method", false, false, false, 76))) {
                // line 77
                yield "                <div class=\"ui compact vertically fitted segment\">
                <div class=\"ui horizontal list\">
                <span class=\"ui primary ribbon label\">
                ";
                // line 80
                $context["member_logged_in_as"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "name", [], "any", false, false, false, 80) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "surname", [], "any", false, false, false, 80)) . " (") . CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "login", [], "any", false, false, false, 80)) . ")");
                // line 81
                yield "                ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 81) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 81)) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 81)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 81) && (($context["member_logged_in_as"] ?? null) != CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [true], "method", false, false, false, 81))))) {
                    // line 82
                    yield "                    <a
                        href=\"";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributions", ["type" => "transactions", "option" => "member", "value" => "all"]), "html", null, true);
                    yield "\"
                    >
                        <i class=\"icon times tooltip\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">
                        ";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 87) || (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 87) && (($context["member_logged_in_as"] ?? null) != CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "logged_in_as", [true], "method", false, false, false, 87))))) {
                        // line 88
                        yield "                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show all your transactions"), "html", null, true);
                        yield "
                        ";
                    } else {
                        // line 90
                        yield "                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show all members transactions"), "html", null, true);
                        yield "
                        ";
                    }
                    // line 92
                    yield "                        </span>
                    </a>
                ";
                }
                // line 95
                yield "            ";
            }
            // line 96
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sname", [], "any", false, false, false, 96), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 96)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive"), "html", null, true);
                yield ")";
            }
            // line 97
            yield "            </span>
            ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 98) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 98))) {
                // line 99
                yield "                <div class=\"item\">
                    <a href=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 100)]), "html", null, true);
                yield "\" class=\"ui tiny button\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("See member profile"), "html", null, true);
                yield "</a>
                </div>
                <div class=\"item\">
                    <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addTransaction"), "html", null, true);
                yield "?id_adh=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 103), "html", null, true);
                yield "\" class=\"ui tiny button\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a transaction"), "html", null, true);
                yield "</a>
                </div>
            ";
            }
            // line 106
            yield "            </div>
            </div>
        ";
        }
        // line 109
        yield "        ";
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "pages/transactions_list.html.twig", 109)->unwrap()->yield($context);
        // line 110
        yield "    </form>
";
        return; yield '';
    }

    // line 113
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count transaction", "%count transactions",         // line 115
($context["nb"] ?? null)), ["%count" => ($context["nb"] ?? null)]), "route" => ["name" => "payments_filter", "args" => ["type" => "transactions"]]];
        // line 123
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 126
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 127) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 127))) {
            // line 128
            yield "        <a
                class=\"ui tiny labeled icon button\"
                href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addTransaction"), "html", null, true);
            yield "\"
        >
            <i class=\"ui plus circle green icon\" aria-hidden=\"true\"></i>
            ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a transaction"), "html", null, true);
            yield "
        </a>
    ";
        }
        return; yield '';
    }

    // line 138
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        yield "    ";
        $context["columns"] = [["label" => "#", "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\TransactionsList::ORDERBY_ID")], ["label" => $this->env->getFunction('_T')->getCallable()("Date"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\TransactionsList::ORDERBY_DATE")]];
        // line 143
        yield "
    ";
        // line 144
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 144) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 144)) &&  !array_key_exists("member", $context)) || array_key_exists("pmember", $context))) {
            // line 145
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Originator"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\TransactionsList::ORDERBY_MEMBER")]]);
            // line 146
            yield "    ";
        }
        // line 147
        yield "
    ";
        // line 148
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Description")]]);
        // line 151
        yield "
    ";
        // line 152
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Amount"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\TransactionsList::ORDERBY_AMOUNT")]]);
        // line 155
        yield "
    ";
        // line 156
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Payment type"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\TransactionsList::ORDERBY_PAYMENT_TYPE")]]);
        // line 159
        yield "
    ";
        // line 160
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 163
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["ordre"] => $context["transaction"]) {
            // line 165
            yield "        ";
            $context["mid"] = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "member", [], "any", false, false, false, 165);
            // line 166
            yield "        ";
            if (array_key_exists("member", $context)) {
                // line 167
                yield "            ";
                $context["mname"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sname", [], "any", false, false, false, 167);
                // line 168
                yield "        ";
            } else {
                // line 169
                yield "            ";
                $context["mname"] = $this->env->getFunction('memberName')->getCallable()(["id" => ($context["mid"] ?? null)]);
                // line 170
                yield "        ";
            }
            // line 171
            yield "
        <tr class=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "getRowClass", [], "method", false, false, false, 172), "html", null, true);
            yield "\">
            <td data-scope=\"row\">
                ";
            // line 174
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 174)) {
                // line 175
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 175), "html", null, true);
                yield "
                ";
            } else {
                // line 177
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ordre"] + 1) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "current_page", [], "any", false, false, false, 177) - 1) * ($context["numrows"] ?? null))), "html", null, true);
                yield "
                ";
            }
            // line 179
            yield "                <span class=\"displaynone\">
                            <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editTransaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\">
                                ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Transaction %id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 181)]), "html", null, true);
            yield "
                            </a>
                        </span>
            </td>
            <td data-col-label=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
        ";
            // line 186
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 186) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 186)) &&  !array_key_exists("member", $context)) || array_key_exists("pmember", $context))) {
                // line 187
                yield "            <td data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member"), "html", null, true);
                yield "\">
            ";
                // line 188
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filtre_cotis_adh", [], "any", false, false, false, 188) == "") || (CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filtre_cotis_adh", [], "any", false, false, false, 188) == null))) {
                    // line 189
                    yield "                <a
                    href=\"";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributions", ["type" => "transactions", "option" => "member", "value" => ($context["mid"] ?? null)]), "html", null, true);
                    yield "\"
                    title=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Show only '%name' transactions"), ["%name" => ($context["mname"] ?? null)]), "html", null, true);
                    yield "\"
                >
                    <i class=\"filter grey small icon\" aria-hidden=\"true\"></i>
                </a>
            ";
                }
                // line 196
                yield "                <a
                    href=\"";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => ($context["mid"] ?? null)]), "html", null, true);
                yield "\"
                    title=\"";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Show '%name' card"), ["%name" => ($context["mname"] ?? null)]), "html", null, true);
                yield "\"
                >
                    ";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mname"] ?? null), "html", null, true);
                yield "
                </a>
            </td>
        ";
            }
            // line 204
            yield "            <td data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Description"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 204));
            yield "</td>
            <td data-col-label=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 205), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Payment type"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "getPaymentType", [], "method", false, false, false, 206), "html", null, true);
            yield "</td>
            ";
            // line 207
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 207) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 207))) {
                // line 208
                yield "            <td class=\"center actions_row\">
                <a
                    href=\"";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editTransaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 210)]), "html", null, true);
                yield "\"
                    class=\"action\"
                >
                    <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                    <span class=\"ui special popup\">";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit transaction #%id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 214)]), "html", null, true);
                yield "</span>
                </a>
                <a
                    href=\"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeContribution", ["type" => "transactions", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 217)]), "html", null, true);
                yield "\"
                    class=\"delete\"
                >
                    <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                    <span class=\"ui special popup\">";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove transaction #%id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 221)]), "html", null, true);
                yield "</span>
                </a>
            </td>
        ";
            }
            // line 225
            yield "        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 227
            yield "        <tr><td colspan=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 227) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 227))) {
                yield "7";
            } else {
                yield "5";
            }
            yield "\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("no transaction"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 231
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        yield "        <div id=\"legende\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Legend"), "html", null, true);
        yield "\" class=\"ui modal\">
            <div class=\"header\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Legend"), "html", null, true);
        yield "</div>
            <div class=\"content\">
                <table class=\"ui stripped table\">
                    <tr>
                        <th class=\"transaction-normal color-sample\"><i class=\"ui icon\">&nbsp;</i></th>
                        <td class=\"back\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Completely dispatched transaction"), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"transaction-uncomplete color-sample\"><i class=\"ui icon\">&nbsp;</i></th>
                        <td class=\"back\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Uncomplete dispatched transaction"), "html", null, true);
        yield "</td>
                    </tr>
                </table>
            </div>
            <div class=\"actions\"><div class=\"ui labeled icon deny button\"><i class=\"times icon\" aria-hidden=\"true\"></i> ";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "html", null, true);
        yield "</div></div>
        </div>
";
        return; yield '';
    }

    // line 250
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        yield "        <script type=\"text/javascript\">
            \$(function(){
                var _checklinks = '<div class=\"checkboxes ui basic horizontal segments\"><div class=\"ui basic right aligned fitted segment\"><a href=\"#\" class=\"show_legend  ui blue tertiary button\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show legend"), "js"), "html", null, true);
        yield "</a></div></div>';
                \$('.listing').before(_checklinks);
                \$('.listing').after(_checklinks);

                //\$('#table_footer').parent().before('<td class=\"right\" colspan=\"";
        // line 257
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 257) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 257)) &&  !array_key_exists("member", $context))) {
            yield "9";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 257) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 257))) {
            yield "8";
        } else {
            yield "7";
        }
        yield "\"><a href=\"#\" class=\"show_legend\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show legend"), "html", null, true);
        yield "</a></td>');

                _bind_legend();

                ";
        // line 261
        yield from         $this->loadTemplate("elements/js/removal.js.twig", "pages/transactions_list.html.twig", 261)->unwrap()->yield(CoreExtension::merge($context, ["single_action" => "true"]));
        // line 264
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
        return "pages/transactions_list.html.twig";
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
        return array (  570 => 264,  568 => 261,  553 => 257,  546 => 253,  542 => 251,  538 => 250,  530 => 246,  523 => 242,  516 => 238,  508 => 233,  503 => 232,  499 => 231,  481 => 227,  475 => 225,  468 => 221,  461 => 217,  455 => 214,  448 => 210,  444 => 208,  442 => 207,  436 => 206,  430 => 205,  423 => 204,  416 => 200,  411 => 198,  407 => 197,  404 => 196,  396 => 191,  392 => 190,  389 => 189,  387 => 188,  382 => 187,  380 => 186,  374 => 185,  367 => 181,  363 => 180,  360 => 179,  354 => 177,  348 => 175,  346 => 174,  341 => 172,  338 => 171,  335 => 170,  332 => 169,  329 => 168,  326 => 167,  323 => 166,  320 => 165,  314 => 164,  310 => 163,  303 => 160,  300 => 159,  298 => 156,  295 => 155,  293 => 152,  290 => 151,  288 => 148,  285 => 147,  282 => 146,  279 => 145,  277 => 144,  274 => 143,  271 => 139,  267 => 138,  258 => 133,  252 => 130,  248 => 128,  245 => 127,  241 => 126,  233 => 123,  231 => 115,  229 => 114,  225 => 113,  219 => 110,  216 => 109,  211 => 106,  201 => 103,  193 => 100,  190 => 99,  188 => 98,  185 => 97,  177 => 96,  174 => 95,  169 => 92,  163 => 90,  157 => 88,  155 => 87,  148 => 83,  145 => 82,  142 => 81,  140 => 80,  135 => 77,  132 => 76,  130 => 75,  122 => 70,  117 => 68,  112 => 66,  107 => 64,  95 => 57,  88 => 53,  78 => 48,  71 => 44,  62 => 39,  58 => 38,  53 => 21,  51 => 25,  49 => 23,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/transactions_list.html.twig", "/var/www/galette/templates/default/pages/transactions_list.html.twig");
    }
}
