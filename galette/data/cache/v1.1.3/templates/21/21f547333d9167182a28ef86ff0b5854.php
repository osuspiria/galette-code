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

/* pages/scheduledpayments_list.html.twig */
class __TwigTemplate_2047aab6a325d16fcdf3ea5338e778bd extends Template
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
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'body' => [$this, 'block_body'],
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
        $context["form"] = ["route" => ["name" => "batch-scheduledPaymentslist"], "order" => ["name" => "scheduledPayments"]];
        // line 32
        if ((((($context["nb"] ?? null) != 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 32) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 32))) && (($context["mode"] ?? null) != "ajax"))) {
            // line 33
            $context["batch"] = ["route" => ["name" => "batch-scheduledPaymentslist"], "modal" => ["title" => $this->env->getFunction('_T')->getCallable()("No entry selected"), "content" => $this->env->getFunction('_T')->getCallable()("Please make sure to select at least one entry from the list to perform this action.")]];
            // line 42
            $context["batch_actions"] = [["name" => "delete", "label" => $this->env->getFunction('_T')->getCallable()("Delete"), "icon" => "trash red"], ["name" => "csv__directdownload", "label" => $this->env->getFunction('_T')->getCallable()("Export as CSV"), "icon" => "file csv"]];
        }
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/scheduledpayments_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 56
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("filterScheduledPayments"), "html", null, true);
        yield "\" method=\"post\" class=\"ui form filters\">
    <div class=\"ui secondary yellow segment\">
        <div class=\"four fields\">
            <div class=\"field\">
                <label for=\"date_field\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show payments by"), "html", null, true);
        yield "</label>
                <select name=\"date_field\" id=\"date_field\" class=\"ui search dropdown\">
                    <option value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::DATE_RECORD"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_field", [], "any", false, false, false, 63) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::DATE_RECORD"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
        yield "</option>
                    <option value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::DATE_SCHEDULED"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_field", [], "any", false, false, false, 64) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::DATE_SCHEDULED"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Scheduled date"), "html", null, true);
        yield "</option>
                </select>
            </div>
            <div class=\"two fields\">
                <div class=\"field\">
                    <label for=\"start_date_filter\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("since"), "html", null, true);
        yield "</label>
                    <div class=\"ui calendar\" id=\"contrib-rangestart\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input placeholder=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"start_date_filter\" id=\"start_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "start_date_filter", [], "any", false, false, false, 73), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                </div>
                <div class=\"field\">
                    <label for=\"end_date_filter\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("until"), "html", null, true);
        yield "</label>
                    <div class=\"ui calendar\" id=\"contrib-rangeend\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input placeholder=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"end_date_filter\" id=\"end_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "end_date_filter", [], "any", false, false, false, 82), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"field\">
                ";
        // line 88
        yield from         $this->loadTemplate("components/forms/payment_types.html.twig", "pages/scheduledpayments_list.html.twig", 88)->unwrap()->yield(CoreExtension::merge($context, ["current" => CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["filters"] ?? null), "payment_type_filter", [], "any", false, false, false, 89), "varname" => "payment_type_filter", "classname" => "", "empty" => ["value" =>  -1, "label" => $this->env->getFunction('_T')->getCallable()("Select")]]));
        // line 94
        yield "            </div>
                <div class=\"ui right aligned basic fitted segment field flexend\">
                    <button type=\"submit\"  class=\"tooltip ui labeled icon primary button\" title=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                        <i class=\"search icon\" aria-hidden=\"true\"></i>
                        ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                    </button>
                    <button type=\"submit\" id=\"clear_filter\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                        <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                        ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                    </button>
            </div>
        </div>
    </div>

    ";
        // line 108
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 109
            yield "        <input type=\"hidden\" name=\"ajax\" value=\"true\"/>
        <input type=\"hidden\" name=\"from_contribution\" value=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "from_contribution", [], "any", false, false, false, 110), "html", null, true);
            yield "\"/>
    ";
        } else {
            // line 112
            yield "        ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/scheduledpayments_list.html.twig", 112)->unwrap()->yield($context);
            // line 113
            yield "    ";
        }
        // line 114
        yield "    </form>
";
        return; yield '';
    }

    // line 117
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count shceduled payment", "%count scheduled payments",         // line 119
($context["nb"] ?? null)), ["%count" => ($context["nb"] ?? null)]), "route" => ["name" => "filterScheduledPayments"]];
        // line 124
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 127
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        yield "    ";
        $context["columns"] = [["label" => "#", "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::ORDERBY_ID")], ["label" => $this->env->getFunction('_T')->getCallable()("Member"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::ORDERBY_MEMBER")], ["label" => $this->env->getFunction('_T')->getCallable()("Date"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::ORDERBY_DATE")], ["label" => $this->env->getFunction('_T')->getCallable()("Scheduled date"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::ORDERBY_SCHEDULED_DATE")], ["label" => $this->env->getFunction('_T')->getCallable()("Amount"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::ORDERBY_AMOUNT")], ["label" => $this->env->getFunction('_T')->getCallable()("Payment type"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ScheduledPaymentsList::ORDERBY_PAYMENT_TYPE")]];
        // line 136
        yield "
    ";
        // line 137
        if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 137) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 137)) || (($context["mode"] ?? null) == "ajax"))) {
            // line 138
            yield "        ";
            $context["no_action"] = true;
            // line 139
            yield "    ";
        }
        // line 140
        yield "
    ";
        // line 141
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 144
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        yield "    ";
        if ((($context["nb"] ?? null) != 0)) {
            // line 146
            yield "        <tr>
            <th class=\"right aligned\" colspan=\"";
            // line 147
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 147) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 147)) &&  !array_key_exists("member", $context))) {
                yield "7";
            } else {
                yield "6";
            }
            yield "\">
                ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Found total scheduled %f"), ["%f" => CoreExtension::getAttribute($this->env, $this->source, ($context["scheduled"] ?? null), "getSum", [], "method", false, false, false, 148)]), "html", null, true);
            yield "
            </th>
        </tr>
    ";
        }
        return; yield '';
    }

    // line 154
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["ordre"] => $context["scheduled"]) {
            // line 156
            yield "        ";
            $context["contribution"] = CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getContribution", [], "method", false, false, false, 156);
            // line 157
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isFee", [], "method", false, false, false, 157)) {
                // line 158
                yield "            ";
                $context["ctype"] = Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE");
                // line 159
                yield "        ";
            } else {
                // line 160
                yield "            ";
                $context["ctype"] = Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION");
                // line 161
                yield "        ";
            }
            // line 162
            yield "
        <tr class=\"";
            // line 163
            if ((($context["mode"] ?? null) == "ajax")) {
                yield "schedule_row ";
            }
            yield "\" id=\"row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getId", [], "method", false, false, false, 163), "html", null, true);
            yield "\">
            <td data-scope=\"row\">
                <input type=\"checkbox\" name=\"entries_sel[]\" value=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getId", [], "method", false, false, false, 165), "html", null, true);
            yield "\"/>
                ";
            // line 166
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 166)) {
                // line 167
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getId", [], "method", false, false, false, 167), "html", null, true);
                yield "
                ";
            } else {
                // line 169
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ordre"] + 1) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "current_page", [], "any", false, false, false, 169) - 1) * ($context["numrows"] ?? null))), "html", null, true);
                yield "
                ";
            }
            // line 171
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 171) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 171)) && (($context["mode"] ?? null) != "ajax"))) {
                // line 172
                yield "                    <span>
                        <a href=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editContribution", ["type" => ($context["ctype"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\">
                            <i
                                class=\"ui ";
                // line 175
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isFee", [], "method", false, false, false, 175)) {
                    yield "user check";
                } else {
                    yield "gift";
                }
                yield " grey icon tooltip\"
                                title=\"";
                // line 176
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isFee", [], "method", false, false, false, 176)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contribution"), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Donation"), "html", null, true);
                }
                yield "\"
                            ></i>
                            <span class=\"visually-hidden\">";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Contribution %id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 178)]), "html", null, true);
                yield "</span>
                        </a>
                    </span>
                ";
            }
            // line 182
            yield "            </td>
            <td data-col-label=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('memberName')->getCallable()(["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getContribution", [], "method", false, false, false, 183), "member", [], "any", false, false, false, 183)]), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getCreationDate", [], "method", false, false, false, 184), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Scheduled date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getScheduledDate", [], "method", false, false, false, 185), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getAmount", [], "method", false, false, false, 186), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Payment type"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getPaymentType", [], "method", false, false, false, 187), "html", null, true);
            yield "</td>
            ";
            // line 188
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 188) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 188)) && (($context["mode"] ?? null) != "ajax"))) {
                // line 189
                yield "                <td class=\"actions_row center\">
                    ";
                // line 190
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 190) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 190))) {
                    // line 191
                    yield "                        <a
                            href=\"";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editScheduledPayment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getId", [], "method", false, false, false, 192)]), "html", null, true);
                    yield "\"
                            class=\"action\"
                        >
                            <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit scheduled payment"), "html", null, true);
                    yield "</span>
                        </a>
                        <a
                            href=\"";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeScheduledPayment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["scheduled"], "getId", [], "method", false, false, false, 199)]), "html", null, true);
                    yield "\"
                            class=\"delete\"
                        >
                            <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete scheduled payment"), "html", null, true);
                    yield "</span>
                        </a>
                    ";
                }
                // line 206
                yield "                </td>
            ";
            }
            // line 208
            yield "        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 210
            yield "        <tr><td colspan=\"";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 210) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 210)) &&  !array_key_exists("member", $context))) {
                yield "7";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 210) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 210))) {
                yield "6";
            } else {
                yield "5";
            }
            yield "\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No scheduled payment"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['scheduled'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/scheduledpayments_list.html.twig";
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
        return array (  434 => 210,  428 => 208,  424 => 206,  418 => 203,  411 => 199,  405 => 196,  398 => 192,  395 => 191,  393 => 190,  390 => 189,  388 => 188,  382 => 187,  376 => 186,  370 => 185,  364 => 184,  358 => 183,  355 => 182,  348 => 178,  339 => 176,  331 => 175,  326 => 173,  323 => 172,  320 => 171,  314 => 169,  308 => 167,  306 => 166,  302 => 165,  293 => 163,  290 => 162,  287 => 161,  284 => 160,  281 => 159,  278 => 158,  275 => 157,  272 => 156,  266 => 155,  262 => 154,  252 => 148,  244 => 147,  241 => 146,  238 => 145,  234 => 144,  227 => 141,  224 => 140,  221 => 139,  218 => 138,  216 => 137,  213 => 136,  210 => 128,  206 => 127,  198 => 124,  196 => 119,  194 => 118,  190 => 117,  184 => 114,  181 => 113,  178 => 112,  173 => 110,  170 => 109,  168 => 108,  159 => 102,  154 => 100,  149 => 98,  144 => 96,  140 => 94,  138 => 89,  137 => 88,  126 => 82,  119 => 78,  109 => 73,  102 => 69,  88 => 64,  78 => 63,  73 => 61,  65 => 57,  61 => 56,  56 => 21,  53 => 42,  51 => 33,  49 => 32,  47 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/scheduledpayments_list.html.twig", "/var/www/galette/templates/default/pages/scheduledpayments_list.html.twig");
    }
}
