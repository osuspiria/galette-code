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

/* pages/transaction_form.html.twig */
class __TwigTemplate_63b6b3d2caf67280da3ffbfb298a48d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "pages/transaction_form.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", true, true, false, 24)) {
            // line 25
            yield "    <form action=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 25)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editTransaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 25)]), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addTransaction"), "html", null, true);
            }
            yield "\" enctype=\"multipart/form-data\" method=\"post\" class=\"ui form\">
        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Transaction details"), "html", null, true);
            yield "
            </div>
            <div class=\"active content\">
                <div class=\"ui mobile reversed stackable grid\">
                    <div class=\"";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 33)) {
                yield "five wide ";
            }
            yield "column\">
                        <div class=\"field inline";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_desc", [], "any", true, true, false, 34) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_desc", [], "any", false, false, false, 34) == 1))) {
                yield " required";
            }
            yield "\">
                            <label for=\"trans_desc\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Description:"), "html", null, true);
            yield "</label>
                            <input type=\"text\" name=\"trans_desc\" id=\"trans_desc\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "description", [], "any", false, false, false, 36), "html", null, true);
            yield "\" maxlength=\"150\" size=\"30\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_desc", [], "any", true, true, false, 36) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_desc", [], "any", false, false, false, 36) == 1))) {
                yield " required=\"required\"";
            }
            yield "/>
                        </div>
                        ";
            // line 38
            yield from             $this->loadTemplate("components/forms/member_dropdown.html.twig", "pages/transaction_form.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["required" => (CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["required"] ?? null), "id_adh", [], "any", true, true, false, 39) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_adh", [], "any", false, false, false, 39) == 1)), "id" => "id_adh", "label" => $this->env->getFunction('_T')->getCallable()("Originator:"), "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["transaction"] ?? null), "member", [], "any", false, false, false, 42), "component_class" => "inline field"]));
            // line 45
            yield "                        <div class=\"field inline";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_date", [], "any", true, true, false, 45) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_date", [], "any", false, false, false, 45) == 1))) {
                yield " required";
            }
            yield "\">
                            <label for=\"trans_date\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date:"), "html", null, true);
            yield "</label>
                            <div class=\"ui calendar\" id=\"transaction-rangestart\">
                                <div class=\"ui input left icon\">
                                    <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                    <input type=\"text\" class=\"date-pick\" name=\"trans_date\" id=\"trans_date\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "date", [], "any", false, false, false, 50), "html", null, true);
            yield "\" maxlength=\"10\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_date", [], "any", true, true, false, 50) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_date", [], "any", false, false, false, 50) == 1))) {
                yield " required=\"required\"";
            }
            yield " placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
            yield "\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"field inline";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_amount", [], "any", true, true, false, 54) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_amount", [], "any", false, false, false, 54) == 1))) {
                yield " required";
            }
            yield "\">
                            <label for=\"trans_amount\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount:"), "html", null, true);
            yield "</label>
                            <input type=\"text\" name=\"trans_amount\" id=\"trans_amount\" value=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "amount", [], "any", false, false, false, 56), "html", null, true);
            yield "\" maxlength=\"10\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_amount", [], "any", true, true, false, 56) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_amount", [], "any", false, false, false, 56) == 1))) {
                yield " required=\"required\"";
            }
            yield "/>
                        </div>
                        <div class=\"field inline";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_payment_type", [], "any", true, true, false, 58) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "trans_payment_type", [], "any", false, false, false, 58) == 1))) {
                yield " required";
            }
            yield "\">
                            ";
            // line 60
            yield "                            ";
            $context["ptype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "payment_type", [], "any", false, false, false, 60);
            // line 61
            yield "                            ";
            yield from             $this->loadTemplate("components/forms/payment_types.html.twig", "pages/transaction_form.html.twig", 61)->unwrap()->yield(CoreExtension::merge($context, ["current" =>             // line 62
($context["ptype"] ?? null), "varname" => "type_paiement_trans", "show_inline" => true, "empty" => ["label" => $this->env->getFunction('_T')->getCallable()("None"), "value" => "0"]]));
            // line 70
            yield "                        </div>
                        ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 71) == null)) {
                // line 72
                yield "                        <div class=\"field inline\">
                            <label class=\"inline\" title=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a contribution type to create for dispatch transaction"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dispatch type:"), "html", null, true);
                yield "</label>
                            <i class=\"circular inverted primary small icon info tooltip\" title=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a contribution type to create for dispatch transaction"), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                            <input type=\"radio\" name=\"contrib_type\" id=\"contrib_type_fee\" value=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"), "html", null, true);
                yield "\"/> <label for=\"contrib_type_fee\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership fee"), "html", null, true);
                yield "</label>
                            <input type=\"radio\" name=\"contrib_type\" id=\"contrib_type_donation\" value=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION"), "html", null, true);
                yield "\"/> <label for=\"contrib_type_donation\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Donation"), "html", null, true);
                yield "</label>
                        </div>
    ";
            }
            // line 79
            yield "                    </div>
    ";
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 80)) {
                // line 81
                yield "                    <div class=\"eleven wide column\">
                        <div class=\"ui tiny header\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Attached contributions"), "html", null, true);
                yield "</div>
                        <table class=\"listing ui very compact small celled yellow table\">
                            <thead>
                                <tr>
                                    <th class=\"id_row\">#</th>
                                    <th class=\"left date_row\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
                yield "</th>
                                    <th class=\"left date_row\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Begin"), "html", null, true);
                yield "</th>
                                    <th class=\"left date_row\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("End"), "html", null, true);
                yield "</th>
                                    <th class=\"left\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Duration"), "html", null, true);
                yield "</th>
            ";
                // line 91
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 91) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 91))) {
                    // line 92
                    yield "                                    <th class=\"left\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member"), "html", null, true);
                    yield "</th>
            ";
                }
                // line 94
                yield "                                    <th class=\"left\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Type"), "html", null, true);
                yield "</th>
                                    <th class=\"left\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
                yield "</th>
            ";
                // line 96
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 96) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 96))) {
                    // line 97
                    yield "                                    <th class=\"actions_row\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Actions"), "html", null, true);
                    yield "</th>
            ";
                }
                // line 99
                yield "                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class=\"right bgfree\" colspan=\"";
                // line 103
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 103) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 103))) {
                    yield "7";
                } else {
                    yield "5";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dispatched amount:"), "html", null, true);
                yield "</th>
                                    <th class=\"right bgfree\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "getDispatchedAmount", [], "method", false, false, false, 104), "html", null, true);
                yield "</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class=\"right bgfree\" colspan=\"";
                // line 108
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 108) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 108))) {
                    yield "7";
                } else {
                    yield "5";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not dispatched amount:"), "html", null, true);
                yield "</th>
                                    <th class=\"right bgfree\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "getMissingAmount", [], "method", false, false, false, 109), "html", null, true);
                yield "</th>
                                    <td></td>
                                </tr>
            ";
                // line 112
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "getMissingAmount", [], "method", false, false, false, 112) > 0)) {
                    // line 113
                    yield "                                <tr>
                                    <th colspan=\"";
                    // line 114
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 114) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 114))) {
                        yield "9";
                    } else {
                        yield "7";
                    }
                    yield "\">
                                        <div class=\"ui basic fitted right aligned segment\">
                                            <a
                                                href=\"";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE")]), "html", null, true);
                    yield "?trans_id=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 117), "html", null, true);
                    yield "\"
                                                class=\"ui icon green compact button tooltip\"
                                                title=\"";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new fee that will be attached to the current transaction"), "html", null, true);
                    yield "\"
                                            >
                                                <i class=\"plus tiny icon\" aria-hidden=\"true\"></i>
                                                <i class=\"user check icon\" aria-hidden=\"true\"></i>
                                                <span class=\"visually-hidden\">";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new fee that will be attached to the current transaction"), "html", null, true);
                    yield "</span>
                                            </a>
                                            <a
                                                href=\"";
                    // line 126
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION")]), "html", null, true);
                    yield "?trans_id=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 126), "html", null, true);
                    yield "\"
                                                class=\"ui icon green compact button tooltip\"
                                                title=\"";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new donation that will be attached to the current transaction"), "html", null, true);
                    yield "\"
                                            >
                                                <i class=\"plus tiny icon\" aria-hidden=\"true\"></i>
                                                <i class=\"gift icon\" aria-hidden=\"true\"></i>
                                                <span class=\"visually-hidden\">";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new donation that will be attached to the current transaction"), "html", null, true);
                    yield "</span>
                                            </a>
                                            <a
                                                href=\"#\"
                                                class=\"ui icon blue compact button tooltip\"
                                                title=\"";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select an existing contribution in the database, and attach it to the current transaction"), "html", null, true);
                    yield "\"
                                                id=\"contribslist\"
                                            >
                                                <i class=\"receipt icon\" aria-hidden=\"true\"></i>
                                                <span class=\"visually-hidden\">";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select an existing contribution in the database, and attach it to the current transaction"), "html", null, true);
                    yield "</span>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
            ";
                }
                // line 147
                yield "                            </tfoot>
                            <tbody>
            ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["contribs"] ?? null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["ordre"] => $context["contrib"]) {
                    // line 150
                    yield "                ";
                    $context["mid"] = CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "member", [], "any", false, false, false, 150);
                    // line 151
                    yield "                                <tr class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "getRowClass", [], "method", false, false, false, 151), "html", null, true);
                    yield "\">
                                    <td class=\"center\">
                                        ";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ordre"] + 1), "html", null, true);
                    yield "
                                    </td>
                                    <td class=\"center\">";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "date", [], "any", false, false, false, 155), "html", null, true);
                    yield "</td>
                                    <td class=\"center\">";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "begin_date", [], "any", false, false, false, 156), "html", null, true);
                    yield "</td>
                                    <td class=\"center\">";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "end_date", [], "any", false, false, false, 157), "html", null, true);
                    yield "</td>
                                    <td>";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "duration", [], "any", false, false, false, 158), "html", null, true);
                    yield "</td>
                ";
                    // line 159
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 159) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 159))) {
                        // line 160
                        yield "                                    <td>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('memberName')->getCallable()(["id" => ($context["mid"] ?? null)]), "html", null, true);
                        yield "</td>
                ";
                    }
                    // line 162
                    yield "                                    <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "type", [], "any", false, false, false, 162), "libelle", [], "any", false, false, false, 162), "html", null, true);
                    yield "</td>
                                    <td class=\"right\">";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "amount", [], "any", false, false, false, 163), "html", null, true);
                    yield "</td>
                ";
                    // line 164
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 164) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 164))) {
                        // line 165
                        yield "                                    <td class=\"actions_row\">
                                        <a
                                            href=\"";
                        // line 167
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("detach_contribution", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 167), "cid" => CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "id", [], "any", false, false, false, 167)]), "html", null, true);
                        yield "\"
                                            class=\"delete\"
                                        >
                                            <i class=\"ui red trash icon tooltip\" aria-hidden=\"true\"></i>
                                            <span class=\"ui special popup\">";
                        // line 171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Detach contribution from this transaction"), "html", null, true);
                        yield "</span>
                                        </a>
                                    </td>
                ";
                    }
                    // line 175
                    yield "                                </tr>
            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 177
                    yield "                                <tr><td colspan=\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 177) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 177))) {
                        yield "9";
                    } else {
                        yield "7";
                    }
                    yield "\" class=\"emptylist\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("no contribution"), "html", null, true);
                    yield "</td></tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['ordre'], $context['contrib'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                yield "                            </tbody>
                        </table>
                    </div>
    ";
            }
            // line 183
            yield "                </div>
            </div>
        </div>

        ";
            // line 187
            yield from             $this->loadTemplate("components/dynamic_fields.html.twig", "pages/transaction_form.html.twig", 187)->unwrap()->yield(CoreExtension::merge($context, ["object" => ($context["transaction"] ?? null)]));
            // line 188
            yield "
        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" name=\"valid\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
            yield "
            </button>
            <input type=\"hidden\" name=\"trans_id\" value=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 193), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"valid\" value=\"1\"/>
            ";
            // line 195
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "pages/transaction_form.html.twig", 195)->unwrap()->yield($context);
            // line 196
            yield "        </div>
    </form>
";
        } else {
            // line 198
            yield " ";
            // line 199
            yield "    <div class=\"ui warning message\" id=\"warningbox\">
        <h3>";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member registered!"), "html", null, true);
            yield "</h3>
        <p>
            ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unfortunately, there is no member in your database yet,"), "html", null, true);
            yield "
            <br/>
            <a href=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addMember"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("please create a member"), "html", null, true);
            yield "</a>
        </p>
    </div>
";
        }
        return; yield '';
    }

    // line 210
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 211
        yield "    <script type=\"text/javascript\">
        ";
        // line 212
        yield from         $this->loadTemplate("elements/js/choose_adh.js.twig", "pages/transaction_form.html.twig", 212)->unwrap()->yield($context);
        // line 213
        yield "        document.getElementById('id_adh_input').type = 'hidden';

        \$(function(){
";
        // line 216
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 216)) {
            // line 217
            yield "            ";
            // line 218
            yield "            var _btnuser_mapping = function(){
                \$('#contribslist').click(function(){
                    \$.ajax({
                        url: '";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("contributions", ["type" => "contributions"]), "html", null, true);
            yield "',
                        type: \"GET\",
                        data: {
                            ajax: true,
                            max_amount: '";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "getMissingAmount", [], "method", false, false, false, 225), "html", null, true);
            yield "'
                        },
                        ";
            // line 227
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/transaction_form.html.twig", 227)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#contribslist", "loader" => "button"]));
            // line 230
            yield ",
                        success: function(res){
                            _contribs_dialog(res, '";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "getMissingAmount", [], "method", false, false, false, 232), "html", null, true);
            yield "');
                        },
                        error: function() {
                            ";
            // line 235
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/transaction_form.html.twig", 235)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 243
            yield "                        }
                    });
                });
            }
            _btnuser_mapping();

            var _contribs_dialog = function(res, max_amount){
                ";
            // line 250
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/transaction_form.html.twig", 250)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contributions selection"), "js"), "modal_content" => "res", "modal_class" => "contributions-selection fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 258
            yield "                _contribs_ajax_mapper(res, max_amount);
            }

            var _contribs_ajax_mapper = function(res, max_amount){
                \$('.contributions-selection .filter.icon').remove();
                \$('.contributions-selection .infoline .button').remove();
                \$('.contributions-selection .contribution_row input[type=checkbox]').hide();

                //Initialize Fomantic components
                \$('.contributions-selection .dropdown').dropdown();
                ";
            // line 268
            yield from             $this->loadTemplate("elements/js/calendar.js.twig", "pages/transaction_form.html.twig", 268)->unwrap()->yield($context);
            // line 269
            yield "
                //Deactivate contributions list links
                \$('.contributions-selection tbody a').click(function(){
                    //for links in body (members links), we de nothing
                    return false;
                });

                //Use JS to send forms
                \$('.contributions-selection form').on('submit', function(){
                    var _form = \$(this);
                    \$.ajax({
                        url: _form.attr('action'),
                        type: \"POST\",
                        data: _form.serialize(),
                        ";
            // line 283
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/transaction_form.html.twig", 283)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".contributions-selection"]));
            // line 285
            yield ",
                        success: function(res){
                            \$('#main-container').remove();
                            \$('.contributions-selection .content').append(res);
                            _contribs_ajax_mapper(res, max_amount);
                        },
                        error: function() {
                            ";
            // line 292
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/transaction_form.html.twig", 292)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 300
            yield "                        }
                    });
                    return false;
                });

                _bindDropdownsAutosubmit();

                //Bind pagination and ordering links
                \$('.contributions-selection .pagination a, .contributions-selection thead a').click(function() {
                    \$.ajax({
                        url: this.href,
                        type: \"GET\",
                        data: {
                            ajax: true,
                            max_amount: max_amount
                        },
                        ";
            // line 316
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/transaction_form.html.twig", 316)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".contributions-selection"]));
            // line 318
            yield ",
                        success: function(res){
                            \$('#main-container').remove();
                            \$('.contributions-selection .content').append(res);
                            _contribs_ajax_mapper(res, max_amount);
                        },
                        error: function() {
                            ";
            // line 325
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/transaction_form.html.twig", 325)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 333
            yield "                        },
                    });
                    return false;
                });

                //Bind reset filters button
                \$('#clear_filter').click(function(event) {
                    var _this = \$(this);
                    _this.closest('form').submit(function(event) {
                        var _form = \$(this);
                        \$.ajax({
                            url: _form.attr('action'),
                            type: \"POST\",
                            data: {
                                clear_filter: true
                            },
                            ";
            // line 349
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/transaction_form.html.twig", 349)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".contributions-selection"]));
            // line 351
            yield ",
                            success: function(res){
                                \$('#main-container').remove();
                                \$('.contributions-selection .content').append(res);
                                _contribs_ajax_mapper(res, max_amount);
                            },
                            error: function() {
                                ";
            // line 358
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/transaction_form.html.twig", 358)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 366
            yield "                            }
                        });
                    });
                });

                //Select a row
                \$('.contributions-selection .contribution_row').click(function(){
                    \$('.contributions-selection').modal('hide');
                    var _cid = \$(this).find('input[name=\"entries_sel[]\"]').val();
                    window.location.href = '";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("attach_contribution", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["transaction"] ?? null), "id", [], "any", false, false, false, 375), "cid" => "%cid"]), "html", null, true);
            yield "'.replace(/%cid/, _cid);
                }).css('cursor', 'pointer').attr('title', '";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Click on a contribution row to attach it to the current transaction"), "js"), "html", null, true);
            yield "');
            }
";
        }
        // line 379
        yield "        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/transaction_form.html.twig";
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
        return array (  708 => 379,  702 => 376,  698 => 375,  687 => 366,  685 => 358,  676 => 351,  674 => 349,  656 => 333,  654 => 325,  645 => 318,  643 => 316,  625 => 300,  623 => 292,  614 => 285,  612 => 283,  596 => 269,  594 => 268,  582 => 258,  580 => 250,  571 => 243,  569 => 235,  563 => 232,  559 => 230,  557 => 227,  552 => 225,  545 => 221,  540 => 218,  538 => 217,  536 => 216,  531 => 213,  529 => 212,  526 => 211,  522 => 210,  510 => 204,  505 => 202,  500 => 200,  497 => 199,  495 => 198,  490 => 196,  488 => 195,  483 => 193,  478 => 191,  473 => 188,  471 => 187,  465 => 183,  459 => 179,  444 => 177,  438 => 175,  431 => 171,  424 => 167,  420 => 165,  418 => 164,  414 => 163,  409 => 162,  403 => 160,  401 => 159,  397 => 158,  393 => 157,  389 => 156,  385 => 155,  380 => 153,  374 => 151,  371 => 150,  366 => 149,  362 => 147,  353 => 141,  346 => 137,  338 => 132,  331 => 128,  324 => 126,  318 => 123,  311 => 119,  304 => 117,  294 => 114,  291 => 113,  289 => 112,  283 => 109,  273 => 108,  266 => 104,  256 => 103,  250 => 99,  244 => 97,  242 => 96,  238 => 95,  233 => 94,  227 => 92,  225 => 91,  221 => 90,  217 => 89,  213 => 88,  209 => 87,  201 => 82,  198 => 81,  196 => 80,  193 => 79,  185 => 76,  179 => 75,  175 => 74,  169 => 73,  166 => 72,  164 => 71,  161 => 70,  159 => 62,  157 => 61,  154 => 60,  148 => 58,  139 => 56,  135 => 55,  129 => 54,  116 => 50,  109 => 46,  102 => 45,  100 => 42,  99 => 39,  98 => 38,  89 => 36,  85 => 35,  79 => 34,  73 => 33,  66 => 29,  54 => 25,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/transaction_form.html.twig", "/var/www/galette/templates/default/pages/transaction_form.html.twig");
    }
}
