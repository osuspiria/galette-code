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

/* pages/contributions_list.html.twig */
class __TwigTemplate_a623e308c96928522461c6dbee7ffa23 extends Template
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
            'footer' => [$this, 'block_footer'],
            'body' => [$this, 'block_body'],
            'legend' => [$this, 'block_legend'],
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
        $context["form"] = ["route" => ["name" => "batch-contributionslist", "args" => ["type" => "contributions"]], "order" => ["name" => "contributions", "args" => ["type" => "contributions"]]];
        // line 36
        if ((((($context["nb"] ?? null) != 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 36) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 36))) && (($context["mode"] ?? null) != "ajax"))) {
            // line 37
            $context["batch"] = ["route" => ["name" => "batch-contributionslist", "args" => ["type" => "contributions"]], "modal" => ["title" => $this->env->getFunction('_T')->getCallable()("No contribution selected"), "content" => $this->env->getFunction('_T')->getCallable()("Please make sure to select at least one contribution from the list to perform this action.")]];
            // line 47
            $context["batch_actions"] = [["name" => "delete", "label" => $this->env->getFunction('_T')->getCallable()("Delete"), "icon" => "trash red"], ["name" => "csv__directdownload", "label" => $this->env->getFunction('_T')->getCallable()("Export as CSV"), "icon" => "file csv"]];
        }
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "pages/contributions_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 61
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("payments_filter", ["type" => "contributions"]), "html", null, true);
        yield "\" method=\"post\" class=\"ui form filters\">
    <div class=\"ui secondary yellow segment\">
        <div class=\"four fields\">
            <div class=\"field\">
                <label for=\"date_field\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show contributions by"), "html", null, true);
        yield "</label>
                <select name=\"date_field\" id=\"date_field\" class=\"ui search dropdown\">
                    <option value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::DATE_BEGIN"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_field", [], "any", false, false, false, 68) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::DATE_BEGIN"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Begin"), "html", null, true);
        yield "</option>
                    <option value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::DATE_END"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_field", [], "any", false, false, false, 69) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::DATE_END"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("End"), "html", null, true);
        yield "</option>
                    <option value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::DATE_RECORD"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_field", [], "any", false, false, false, 70) == Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::DATE_RECORD"))) {
            yield " selected=\"selected\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Record"), "html", null, true);
        yield "</option>
                </select>
            </div>
            <div class=\"two fields\">
                <div class=\"field\">
                    <label for=\"start_date_filter\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("since"), "html", null, true);
        yield "</label>
                    <div class=\"ui calendar\" id=\"contrib-rangestart\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input placeholder=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"start_date_filter\" id=\"start_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "start_date_filter", [], "any", false, false, false, 79), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                </div>
                <div class=\"field\">
                    <label for=\"end_date_filter\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("until"), "html", null, true);
        yield "</label>
                    <div class=\"ui calendar\" id=\"contrib-rangeend\">
                        <div class=\"ui input left icon\">
                            <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                            <input placeholder=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
        yield "\" type=\"text\" name=\"end_date_filter\" id=\"end_date_filter\" maxlength=\"10\" size=\"10\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "end_date_filter", [], "any", false, false, false, 88), "html", null, true);
        yield "\"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"field\">
                ";
        // line 94
        yield from         $this->loadTemplate("components/forms/payment_types.html.twig", "pages/contributions_list.html.twig", 94)->unwrap()->yield(CoreExtension::merge($context, ["current" => CoreExtension::getAttribute($this->env, $this->source,         // line 95
($context["filters"] ?? null), "payment_type_filter", [], "any", false, false, false, 95), "varname" => "payment_type_filter", "classname" => "", "empty" => ["value" =>  -1, "label" => $this->env->getFunction('_T')->getCallable()("Select")]]));
        // line 100
        yield "            </div>
            <div class=\"field\">
                <label for=\"contrib_type_filter\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contribution type:"), "html", null, true);
        yield "</label>
                <select name=\"contrib_type_filter\" class=\"ui search dropdown\">
                    <option value=\"0\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select"), "html", null, true);
        yield "</option>
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["type_cotis_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            // line 106
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "contrib_type_filter", [], "any", false, false, false, 106))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "label", [], "any", false, false, false, 106), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                </select>
            </div>
        </div>

        <div class=\"ui right aligned basic fitted segment field flexend\">
            <button type=\"submit\"  class=\"tooltip ui labeled icon primary button\" title=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                <i class=\"search icon\" aria-hidden=\"true\"></i>
                ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
            </button>
            <button type=\"submit\" id=\"clear_filter\" name=\"clear_filter\" class=\"tooltip ui labeled icon button\" title=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
            </button>
        </div>
    </div>
    ";
        // line 123
        if ((array_key_exists("member", $context) && (($context["mode"] ?? null) != "ajax"))) {
            // line 124
            yield "        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 124) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 124)) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "canShow", [($context["login"] ?? null)], "method", false, false, false, 124))) {
                // line 125
                yield "            <div class=\"ui compact vertically fitted segment\">
            <div class=\"ui horizontal list\">
            <span class=\"ui primary ribbon label\">
            ";
                // line 128
                $context["member_logged_in_as"] = (((((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "name", [], "any", false, false, false, 128) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "surname", [], "any", false, false, false, 128)) . " (") . CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "login", [], "any", false, false, false, 128)) . ")");
                // line 129
                yield "            ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 129) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 129)) || CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 129)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 129) && (($context["member_logged_in_as"] ?? null) != CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [true], "method", false, false, false, 129))))) {
                    // line 130
                    yield "                <a
                    href=\"";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributions", ["type" => "contributions", "option" => "member", "value" => "all"]), "html", null, true);
                    yield "\"
                >
                    <i class=\"icon times tooltip\" aria-hidden=\"true\"></i>
                    <span class=\"ui special popup\">
                        ";
                    // line 135
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasChildren", [], "method", false, false, false, 135) || (CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "hasParent", [], "method", false, false, false, 135) && (($context["member_logged_in_as"] ?? null) != CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "loggedInAs", [true], "method", false, false, false, 135))))) {
                        // line 136
                        yield "                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show all your contributions"), "html", null, true);
                        yield "
                        ";
                    } else {
                        // line 138
                        yield "                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show all members contributions"), "html", null, true);
                        yield "
                        ";
                    }
                    // line 140
                    yield "                    </span>
                </a>
            ";
                }
                // line 143
                yield "        ";
            }
            // line 144
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sname", [], "any", false, false, false, 144), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 144)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive"), "html", null, true);
                yield ")";
            }
            // line 145
            yield "        </span>
        ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 146) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 146))) {
                // line 147
                yield "            <div class=\"item\">
                <a href=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" class=\"ui tiny labeled icon button\">
                    <i class=\"ui user blue icon\" aria-hidden=\"true\"></i>
                    ";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("See member profile"), "html", null, true);
                yield "
                </a>
            </div>
            <div class=\"item\">
                <a href=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE")]), "html", null, true);
                yield "?id_adh=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 154), "html", null, true);
                yield "\" class=\"ui tiny labeled icon button\">
                    <i class=\"ui user check green icon\" aria-hidden=\"true\"></i>
                    ";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a membership fee"), "html", null, true);
                yield "
                </a>
            </div>
            <div class=\"item\">
                <a href=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION")]), "html", null, true);
                yield "?id_adh=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 160), "html", null, true);
                yield "\" class=\"ui tiny labeled icon button\">
                    <i class=\"ui gift green icon\" aria-hidden=\"true\"></i>
                    ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a donation"), "html", null, true);
                yield "
                </a>
            </div>
        ";
            }
            // line 166
            yield "        </div>
        </div>
    ";
        }
        // line 169
        yield "    ";
        if (array_key_exists("member", $context)) {
            // line 170
            yield "        <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getRowClass", [], "method", false, false, false, 170), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "isActive", [], "method", false, false, false, 170)) {
                yield " inactive-account";
            }
            yield " ui center aligned segment\">
            ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "getDues", [], "method", false, false, false, 171), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 174
        yield "
    ";
        // line 175
        if ((($context["mode"] ?? null) == "ajax")) {
            // line 176
            yield "        <input type=\"hidden\" name=\"ajax\" value=\"true\"/>
        <input type=\"hidden\" name=\"max_amount\" value=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "max_amount", [], "any", false, false, false, 177), "html", null, true);
            yield "\"/>
        <input type=\"hidden\" name=\"filtre_transactions\" value=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filtre_transactions", [], "any", false, false, false, 178), "html", null, true);
            yield "\"/>
    ";
        } else {
            // line 180
            yield "        ";
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/contributions_list.html.twig", 180)->unwrap()->yield($context);
            // line 181
            yield "    ";
        }
        // line 182
        yield "    </form>
";
        return; yield '';
    }

    // line 185
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count contribution", "%count contributions",         // line 187
($context["nb"] ?? null)), ["%count" => ($context["nb"] ?? null)]), "route" => ["name" => "payments_filter", "args" => ["type" => "contributions"]]];
        // line 195
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 198
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 199) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 199)) &&  !array_key_exists("member", $context))) {
            // line 200
            yield "        <a
            class=\"ui tiny labeled icon button\"
            href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE")]), "html", null, true);
            yield "\"
        >
            <i class=\"ui user check green icon\" aria-hidden=\"true\"></i>
            ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a membership fee"), "html", null, true);
            yield "
        </a>
        <a
            class=\"ui tiny labeled icon button\"
            href=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION")]), "html", null, true);
            yield "\"
        >
            <i class=\"ui gift green icon\" aria-hidden=\"true\"></i>
            ";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a donation"), "html", null, true);
            yield "
        </a>

    ";
        }
        return; yield '';
    }

    // line 218
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        yield "    ";
        $context["columns"] = [["label" => "#", "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_ID")], ["label" => $this->env->getFunction('_T')->getCallable()("Date"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_DATE")], ["label" => $this->env->getFunction('_T')->getCallable()("Begin"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_BEGIN_DATE")], ["label" => $this->env->getFunction('_T')->getCallable()("End"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_END_DATE")]];
        // line 225
        yield "
    ";
        // line 226
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 226) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 226)) &&  !array_key_exists("member", $context)) || array_key_exists("pmember", $context))) {
            // line 227
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Member"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_MEMBER")]]);
            // line 228
            yield "    ";
        }
        // line 229
        yield "
    ";
        // line 230
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Type"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_TYPE")], ["label" => $this->env->getFunction('_T')->getCallable()("Amount"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_AMOUNT")], ["label" => $this->env->getFunction('_T')->getCallable()("Payment type"), "order" => Twig\Extension\CoreExtension::constant("Galette\\Filters\\ContributionsList::ORDERBY_PAYMENT_TYPE")], ["label" => $this->env->getFunction('_T')->getCallable()("Duration")]]);
        // line 236
        yield "
    ";
        // line 237
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 240
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        yield "    ";
        if ((($context["nb"] ?? null) != 0)) {
            // line 242
            yield "        <tr>
            <th class=\"right aligned\" colspan=\"";
            // line 243
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 243) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 243)) &&  !array_key_exists("member", $context))) {
                yield "10";
            } else {
                yield "9";
            }
            yield "\">
                ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Found contributions total %f"), ["%f" => CoreExtension::getAttribute($this->env, $this->source, ($context["contribs"] ?? null), "getSum", [], "method", false, false, false, 244)]), "html", null, true);
            yield "
            </th>
        </tr>
    ";
        }
        return; yield '';
    }

    // line 250
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["ordre"] => $context["contribution"]) {
            // line 252
            yield "        ";
            $context["mid"] = CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "member", [], "any", false, false, false, 252);
            // line 253
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "isFee", [], "method", false, false, false, 253)) {
                // line 254
                yield "            ";
                $context["ctype"] = Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE");
                // line 255
                yield "        ";
            } else {
                // line 256
                yield "            ";
                $context["ctype"] = Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION");
                // line 257
                yield "        ";
            }
            // line 258
            yield "
        <tr class=\"";
            // line 259
            if ((($context["mode"] ?? null) == "ajax")) {
                yield "contribution_row ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "getRowClass", [], "method", false, false, false, 259), "html", null, true);
            yield "\" id=\"row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 259), "html", null, true);
            yield "\">
            <td data-scope=\"row\">
                ";
            // line 261
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 261) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 261)) || (($context["mode"] ?? null) == "ajax"))) {
                // line 262
                yield "                    <input type=\"checkbox\" name=\"entries_sel[]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 262), "html", null, true);
                yield "\"/>
                ";
            } else {
                // line 264
                yield "                    <input type=\"hidden\" name=\"contrib_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 264), "html", null, true);
                yield "\"/>
                ";
            }
            // line 266
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_show_id", [], "any", false, false, false, 266)) {
                // line 267
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 267), "html", null, true);
                yield "
                ";
            } else {
                // line 269
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ordre"] + 1) + ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "current_page", [], "any", false, false, false, 269) - 1) * ($context["numrows"] ?? null))), "html", null, true);
                yield "
                ";
            }
            // line 271
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 271) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 271)) || (($context["mode"] ?? null) == "ajax"))) {
                // line 272
                yield "                    <span class=\"displaynone\">
                            <a href=\"";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editContribution", ["type" => ($context["ctype"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 273)]), "html", null, true);
                yield "\">
                                ";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Contribution %id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 274)]), "html", null, true);
                yield "
                            </a>
                        </span>
                    ";
                // line 277
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "isTransactionPart", [], "method", false, false, false, 277)) {
                    // line 278
                    yield "                        <a
                                href=\"";
                    // line 279
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editTransaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "transaction", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279)]), "html", null, true);
                    yield "\"
                        >
                            <i class=\"ui linkify icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 282
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Transaction: %s"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "transaction", [], "any", false, false, false, 282), "description", [], "any", false, false, false, 282)]), "html", null, true);
                    yield "</span>
                        </a>
                    ";
                }
                // line 285
                yield "                ";
            } else {
                // line 286
                yield "                    <span class=\"displaynone\">
                            ";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Contribution %id"), ["%id" => CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 287)]), "html", null, true);
                yield "
                        </span>
                    ";
                // line 289
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "isTransactionPart", [], "method", false, false, false, 289)) {
                    // line 290
                    yield "                        <i class=\"ui link icon\" aria-hidden=\"true\"></i>
                        <span class=\"visually-hidden\">";
                    // line 291
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Transaction: %s"), ["%s" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "transaction", [], "any", false, false, false, 291), "description", [], "any", false, false, false, 291)]), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 293
                yield "                ";
            }
            // line 294
            yield "                ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "isTransactionPart", [], "method", false, false, false, 294)) {
                // line 295
                yield "                    <i class=\"ui icon\">&nbsp;</i>
                ";
            }
            // line 297
            yield "            </td>
            <td data-col-label=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "date", [], "any", false, false, false, 298), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Begin"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "begin_date", [], "any", false, false, false, 299), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("End"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "end_date", [], "any", false, false, false, 300), "html", null, true);
            yield "</td>
            ";
            // line 301
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 301) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 301)) &&  !array_key_exists("member", $context)) || array_key_exists("pmember", $context))) {
                // line 302
                yield "                <td data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member"), "html", null, true);
                yield "\">
                    ";
                // line 303
                if (array_key_exists("member", $context)) {
                    // line 304
                    yield "                        ";
                    $context["mname"] = CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "sname", [], "any", false, false, false, 304);
                    // line 305
                    yield "                    ";
                } else {
                    // line 306
                    yield "                        ";
                    // line 307
                    yield "                        ";
                    $context["mname"] = $this->env->getFunction('memberName')->getCallable()(["id" => ($context["mid"] ?? null)]);
                    // line 308
                    yield "                    ";
                }
                // line 309
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filtre_cotis_adh", [], "any", false, false, false, 309) == "")) {
                    // line 310
                    yield "                        <a
                                href=\"";
                    // line 311
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributions", ["type" => "contributions", "option" => "member", "value" => ($context["mid"] ?? null)]), "html", null, true);
                    yield "\"
                                title=\"";
                    // line 312
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Show only '%name' contributions"), ["%name" => ($context["mname"] ?? null)]), "html", null, true);
                    yield "\"
                        >
                            <i class=\"ui filter grey small icon\" aria-hidden=\"true\"></i>
                        </a>
                    ";
                }
                // line 317
                yield "                    <a
                            href=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => ($context["mid"] ?? null)]), "html", null, true);
                yield "\"
                            title=\"";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Show '%name' card"), ["%name" => ($context["mname"] ?? null)]), "html", null, true);
                yield "\"
                    >
                        ";
                // line 321
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mname"] ?? null), "html", null, true);
                yield "
                    </a>
                </td>
            ";
            }
            // line 325
            yield "            <td data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "type", [], "any", false, false, false, 325), "libelle", [], "any", false, false, false, 325), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "amount", [], "any", false, false, false, 326), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Payment type"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "getPaymentType", [], "method", false, false, false, 327), "html", null, true);
            yield "</td>
            <td data-col-label=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Duration"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "duration", [], "any", false, false, false, 328), "html", null, true);
            yield "</td>
            ";
            // line 329
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 330
                yield "                <td class=\"actions_row center\">
                    <a
                            href=\"";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("printContribution", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 332)]), "html", null, true);
                yield "\"
                    >
                        <i class=\"ui file pdf green icon tooltip\" aria-hidden=\"true\"></i>
                        <span class=\"ui special popup\">";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Print an invoice or a receipt (depending on contribution type)"), "html", null, true);
                yield "</span>
                    </a>
                    ";
                // line 337
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 337) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 337))) {
                    // line 338
                    yield "                        <a
                                href=\"";
                    // line 339
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editContribution", ["type" => ($context["ctype"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 339)]), "html", null, true);
                    yield "\"
                                class=\"action\"
                        >
                            <i class=\"ui edit icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 343
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Edit the contribution"), "html", null, true);
                    yield "</span>
                        </a>
                        <a
                                href=\"";
                    // line 346
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("removeContribution", ["type" => "contributions", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["contribution"], "id", [], "any", false, false, false, 346)]), "html", null, true);
                    yield "\"
                                class=\"delete\"
                        >
                            <i class=\"ui trash red icon tooltip\" aria-hidden=\"true\"></i>
                            <span class=\"ui special popup\">";
                    // line 350
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Delete the contribution"), "html", null, true);
                    yield "</span>
                        </a>
                    ";
                }
                // line 353
                yield "                </td>
            ";
            }
            // line 355
            yield "        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 357
            yield "        <tr><td colspan=\"";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 357) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 357)) &&  !array_key_exists("member", $context))) {
                yield "10";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 357) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 357))) {
                yield "11";
            } else {
                yield "10";
            }
            yield "\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("no contribution"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['contribution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 361
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 362
        yield "    <div id=\"legende\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Legend"), "html", null, true);
        yield "\" class=\"ui modal\">
        <div class=\"header\">";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Legend"), "html", null, true);
        yield "</div>
        <div class=\"content\">
            <table class=\"ui stripped table\">
                ";
        // line 366
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 366) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 366)) && (($context["mode"] ?? null) != "ajax"))) {
            // line 367
            yield "                    <tr>
                        <th class=\"action\">
                            <i class=\"ui edit blue icon\" aria-hidden=\"true\"></i>
                        </th>
                        <td class=\"back\">";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Modification"), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <th class=\"delete\">
                            <i class=\"ui trash red icon\" aria-hidden=\"true\"></i>
                        </th>
                        <td class=\"back\">";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Deletion"), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        // line 380
        yield "                <tr>
                    <th class=\"cotis-normal color-sample\">&nbsp;</th>
                    <td class=\"back\">";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contribution"), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th class=\"cotis-give color-sample\">&nbsp;</th>
                    <td class=\"back\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Gift"), "html", null, true);
        yield "</td>
                </tr>
            </table>
        </div>
        <div class=\"actions\"><div class=\"ui labeled icon deny button\"><i class=\"times icon\" aria-hidden=\"true\"></i> ";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "html", null, true);
        yield "</div></div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/contributions_list.html.twig";
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
        return array (  860 => 390,  853 => 386,  846 => 382,  842 => 380,  836 => 377,  827 => 371,  821 => 367,  819 => 366,  813 => 363,  808 => 362,  804 => 361,  784 => 357,  778 => 355,  774 => 353,  768 => 350,  761 => 346,  755 => 343,  748 => 339,  745 => 338,  743 => 337,  738 => 335,  732 => 332,  728 => 330,  726 => 329,  720 => 328,  714 => 327,  708 => 326,  701 => 325,  694 => 321,  689 => 319,  685 => 318,  682 => 317,  674 => 312,  670 => 311,  667 => 310,  664 => 309,  661 => 308,  658 => 307,  656 => 306,  653 => 305,  650 => 304,  648 => 303,  643 => 302,  641 => 301,  635 => 300,  629 => 299,  623 => 298,  620 => 297,  616 => 295,  613 => 294,  610 => 293,  605 => 291,  602 => 290,  600 => 289,  595 => 287,  592 => 286,  589 => 285,  583 => 282,  577 => 279,  574 => 278,  572 => 277,  566 => 274,  562 => 273,  559 => 272,  556 => 271,  550 => 269,  544 => 267,  541 => 266,  535 => 264,  529 => 262,  527 => 261,  517 => 259,  514 => 258,  511 => 257,  508 => 256,  505 => 255,  502 => 254,  499 => 253,  496 => 252,  490 => 251,  486 => 250,  476 => 244,  468 => 243,  465 => 242,  462 => 241,  458 => 240,  451 => 237,  448 => 236,  446 => 230,  443 => 229,  440 => 228,  437 => 227,  435 => 226,  432 => 225,  429 => 219,  425 => 218,  415 => 212,  409 => 209,  402 => 205,  396 => 202,  392 => 200,  389 => 199,  385 => 198,  377 => 195,  375 => 187,  373 => 186,  369 => 185,  363 => 182,  360 => 181,  357 => 180,  352 => 178,  348 => 177,  345 => 176,  343 => 175,  340 => 174,  334 => 171,  326 => 170,  323 => 169,  318 => 166,  311 => 162,  304 => 160,  297 => 156,  290 => 154,  283 => 150,  278 => 148,  275 => 147,  273 => 146,  270 => 145,  262 => 144,  259 => 143,  254 => 140,  248 => 138,  242 => 136,  240 => 135,  233 => 131,  230 => 130,  227 => 129,  225 => 128,  220 => 125,  217 => 124,  215 => 123,  208 => 119,  203 => 117,  198 => 115,  193 => 113,  186 => 108,  171 => 106,  167 => 105,  163 => 104,  158 => 102,  154 => 100,  152 => 95,  151 => 94,  140 => 88,  133 => 84,  123 => 79,  116 => 75,  102 => 70,  92 => 69,  82 => 68,  77 => 66,  69 => 62,  65 => 61,  60 => 21,  57 => 47,  55 => 37,  53 => 36,  51 => 25,  49 => 23,  42 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contributions_list.html.twig", "/var/www/galette/templates/default/pages/contributions_list.html.twig");
    }
}
