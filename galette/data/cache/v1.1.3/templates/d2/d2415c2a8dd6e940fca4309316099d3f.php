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

/* pages/contribution_form.html.twig */
class __TwigTemplate_1afd54ce9b53356f5fca4686477c4135 extends Template
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
        return $this->loadTemplate((((($context["mode"] ?? null) == "ajax")) ? ("ajax.html.twig") : ("page.html.twig")), "pages/contribution_form.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", true, true, false, 24) || ($context["require_mass"] ?? null))) {
            // line 25
            yield "    ";
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 26
                yield "        <form action=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 26)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doEditContribution", ["type" => ($context["type"] ?? null), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 26)]), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("doAddContribution", ["type" => ($context["type"] ?? null)]), "html", null, true);
                }
                yield "\" enctype=\"multipart/form-data\" method=\"post\" class=\"ui form\">
    ";
            }
            // line 28
            yield "            <div class=\"ui styled fluid accordion field\">
                <div class=\"active title\">
                    <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
    ";
            // line 31
            if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"))) {
                // line 32
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select contributor and membership fee type"), "html", null, true);
                yield "
    ";
            } else {
                // line 34
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select contributor and donation type"), "html", null, true);
                yield "
    ";
            }
            // line 36
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isTransactionPart", [], "method", false, false, false, 36)) {
                // line 37
                yield "                    <span class=\"ui teal horizontal label\">
                        ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Transaction related"), "html", null, true);
                yield "
                    </span>
    ";
            }
            // line 41
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "hasSchedule", [], "method", false, false, false, 41)) {
                // line 42
                yield "                    <span class=\"ui teal horizontal label\">
                        ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Has scheduled payments"), "html", null, true);
                yield "
                    </span>
    ";
            }
            // line 46
            yield "                </div>
                <div class=\"active content\">
                    <div class=\"ui mobile reversed stackable grid\">
                        <div class=\"";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isTransactionPart", [], "method", false, false, false, 49) || CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "hasSchedule", [], "method", false, false, false, 49))) {
                yield "six wide ";
            }
            yield "column\">
    ";
            // line 50
            if ( !($context["require_mass"] ?? null)) {
                // line 51
                yield "                            ";
                yield from                 $this->loadTemplate("components/forms/member_dropdown.html.twig", "pages/contribution_form.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["required" => true, "label" => $this->env->getFunction('_T')->getCallable()("Contributor:"), "id" => "id_adh", "value" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
($context["contribution"] ?? null), "member", [], "any", false, false, false, 55), "component_class" => "inline field"]));
                // line 58
                yield "    ";
            }
            // line 59
            yield "                            <div class=\"inline field";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_type_cotis", [], "any", true, true, false, 59) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_type_cotis", [], "any", false, false, false, 59) == 1))) {
                yield " required";
            }
            yield "\">
                                <label for=\"id_type_cotis\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Contribution type:"), "html", null, true);
            yield "</label>
                                <div id=\"id_type_cotis\" class=\"ui dropdown selection\">
                                    ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "type", [], "any", false, false, false, 62)) {
                // line 63
                yield "                                        ";
                $context["selectedid"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "type", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63);
                // line 64
                yield "                                    ";
            } else {
                // line 65
                yield "                                        ";
                $context["selectedid"] = null;
                // line 66
                yield "                                    ";
            }
            // line 67
            yield "                                    <input id=\"id_type_cotis_input\" type=\"hidden\" name=\"id_type_cotis\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedid"] ?? null), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_type_cotis", [], "any", true, true, false, 67) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "id_type_cotis", [], "any", false, false, false, 67) == 1))) {
                yield " required=\"required\"";
            }
            yield ">
                                    <i class=\"dropdown icon\"></i>
                                    <div class=\"text\">";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["type_cotis_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                if (($context["key"] == ($context["selectedid"] ?? null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "label", [], "any", false, false, false, 69), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</div>
                                    <div class=\"menu\">
                                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["type_cotis_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 72
                yield "                                        <div class=\"item";
                if (($context["key"] == ($context["selectedid"] ?? null))) {
                    yield " active selected";
                }
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "label", [], "any", false, false, false, 72), "html", null, true);
                yield "</div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
    ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isTransactionPart", [], "method", false, false, false, 78) || CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "hasSchedule", [], "method", false, false, false, 78))) {
                // line 79
                yield "                        <div class=\"ten wide column\">
        ";
                // line 80
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isTransactionPart", [], "method", false, false, false, 80)) {
                    // line 81
                    yield "                            <div class=\"ui yellow segment\">
                                <div class=\"ui tiny header\">
                                    <a
                                        href=\"";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("editTransaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)]), "html", null, true);
                    yield "\"
                                        class=\"ui mini icon blue compact button tooltip\"
                                    >
                                        <i class=\"eye icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("View transaction"), "html", null, true);
                    yield "</span>
                                    </a>
                                    ";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Related transaction information"), "html", null, true);
                    yield "
                                </div>
                                <div class=\"content\">
                                    <div class=\"ui relaxed horizontal list\">
                                        <div class=\"item\">
                                            <div class=\"content\">
                                                <div class=\"header\">";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date"), "html", null, true);
                    yield "</div>
                                                ";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 97), "date", [], "any", false, false, false, 97), "html", null, true);
                    yield "
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"content\">
                                                <div class=\"header\">";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member"), "html", null, true);
                    yield "</div>
                                                ";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('memberName')->getCallable()(["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 103), "member", [], "any", false, false, false, 103)]), "html", null, true);
                    yield "
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"content\">
                                                <div class=\"header\">";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
                    yield "</div>
                                                ";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 109), "amount", [], "any", false, false, false, 109), "html", null, true);
                    yield "
                                            </div>
                                        </div>
            ";
                    // line 112
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 112), "getMissingAmount", [], "method", false, false, false, 112) > 0)) {
                        // line 113
                        yield "                                        <div class=\"item\">
                                            <div class=\"content\">
                                                <div class=\"header\">";
                        // line 115
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not dispatched amount"), "html", null, true);
                        yield "</div>
                                                ";
                        // line 116
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 116), "getMissingAmount", [], "method", false, false, false, 116), "html", null, true);
                        yield "
                ";
                        // line 117
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 117) != "")) {
                            // line 118
                            yield "                                                    <a
                                                        href=\"";
                            // line 119
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE")]), "html", null, true);
                            yield "?trans_id=";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
                            yield "\"
                                                        class=\"ui mini icon green compact button tooltip\"
                                                        title=\"";
                            // line 121
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new fee that will be attached to the current transaction"), "html", null, true);
                            yield "\"
                                                    >
                                                        <i class=\"plus tiny icon\" aria-hidden=\"true\"></i>
                                                        <i class=\"user check icon\" aria-hidden=\"true\"></i>
                                                        <span class=\"visually-hidden\">";
                            // line 125
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new fee that will be attached to the current transaction"), "html", null, true);
                            yield "</span>
                                                    </a>
                                                    <a
                                                        href=\"";
                            // line 128
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addContribution", ["type" => Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION")]), "html", null, true);
                            yield "?trans_id=";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
                            yield "\"
                                                        class=\"ui mini icon green compact button tooltip\"
                                                        title=\"";
                            // line 130
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new donation that will be attached to the current transaction"), "html", null, true);
                            yield "\"
                                                    >
                                                        <i class=\"plus tiny icon\" aria-hidden=\"true\"></i>
                                                        <i class=\"gift icon\" aria-hidden=\"true\"></i>
                                                        <span class=\"visually-hidden\">";
                            // line 134
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new donation that will be attached to the current transaction"), "html", null, true);
                            yield "</span>
                                                    </a>
                ";
                        }
                        // line 137
                        yield "                                            </div>
                                        </div>
            ";
                    }
                    // line 140
                    yield "                                    </div>
            ";
                    // line 141
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 141) == "")) {
                        // line 142
                        yield "                                    <div class=\"inline field\">
                                        <label>";
                        // line 143
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dispatch type:"), "html", null, true);
                        yield "</label>
                                        <i class=\"circular inverted primary small icon info tooltip\" title=\"";
                        // line 144
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Select a contribution type to create for dispatch transaction"), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
                                        <input type=\"radio\" name=\"contrib_type\" id=\"contrib_type_fee\" value=\"";
                        // line 145
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"), "html", null, true);
                        yield "\"";
                        if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"))) {
                            yield " checked=\"checked\"";
                        }
                        yield "/> <label for=\"contrib_type_fee\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership fee"), "html", null, true);
                        yield "</label>
                                        <input type=\"radio\" name=\"contrib_type\" id=\"contrib_type_donation\" value=\"";
                        // line 146
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION"), "html", null, true);
                        yield "\"";
                        if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_DONATION"))) {
                            yield " checked=\"checked\"";
                        }
                        yield "/> <label for=\"contrib_type_donation\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Donation"), "html", null, true);
                        yield "</label>
                                    </div>
            ";
                    }
                    // line 149
                    yield "                                </div>
                            </div>
        ";
                }
                // line 152
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "hasSchedule", [], "method", false, false, false, 152)) {
                    // line 153
                    yield "            ";
                    $context["scheduled_amount"] = CoreExtension::getAttribute($this->env, $this->source, ($context["scheduled"] ?? null), "getAllocation", [CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 153)], "method", false, false, false, 153);
                    // line 154
                    yield "                            <div class=\"ui yellow segment\">
                                <div class=\"ui tiny header\">
                                    <a
                                        href=\"#\"
                                        class=\"ui mini icon blue compact button tooltip\"
                                        id=\"scheduledslist\"
                                    >
                                        <i class=\"eye icon tooltip\" aria-hidden=\"true\"></i>
                                        <span class=\"ui special popup\">";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("View scheduled payments"), "html", null, true);
                    yield "</span>
                                    </a>
                                    ";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Scheduled payments"), "html", null, true);
                    yield "
                                </div>
            ";
                    // line 166
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isScheduleFullyAllocated", [], "method", false, false, false, 166)) {
                        // line 167
                        yield "                                <div class=\"content\">
                                    <div class=\"ui relaxed horizontal list\">
                                        <div class=\"item\">
                                            <div class=\"content\">
                                                <div class=\"header\">";
                        // line 171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount"), "html", null, true);
                        yield "</div>
                                                ";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["scheduled_amount"] ?? null), "html", null, true);
                        yield "
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"content\">
                                                <div class=\"header\">";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not dispatched amount"), "html", null, true);
                        yield "</div>
                                                ";
                        // line 178
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "amount", [], "any", false, false, false, 178) - ($context["scheduled_amount"] ?? null)), "html", null, true);
                        yield "
                                                <a
                                                    href=\"";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("addScheduledPayment", ["id_cotis" => CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 180)]), "html", null, true);
                        yield "\"
                                                    class=\"ui mini icon green compact button tooltip\"
                                                    title=\"";
                        // line 182
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new scheduled payment"), "html", null, true);
                        yield "\"
                                                >
                                                    <i class=\"plus tiny icon\" aria-hidden=\"true\"></i>
                                                    <i class=\"money bill wave icon\" aria-hidden=\"true\"></i>
                                                    <span class=\"visually-hidden\">";
                        // line 186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Create a new scheduled payment"), "html", null, true);
                        yield "</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            ";
                    }
                    // line 193
                    yield "                            </div>
        ";
                }
                // line 195
                yield "                        </div>
    ";
            }
            // line 197
            yield "                    </div>
                </div>
            </div>

            <div class=\"ui styled fluid accordion field\">
                <div class=\"active title\">
                    <i class=\"jsonly displaynone icon dropdown\" aria-hidden=\"true\"></i>
    ";
            // line 204
            if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"))) {
                // line 205
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Details of membership fee"), "html", null, true);
                yield "
    ";
            } else {
                // line 207
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Details of donation"), "html", null, true);
                yield "
    ";
            }
            // line 209
            yield "                </div>
                <div class=\"active content field\">
                    <div id=\"contribdetails\" class=\"ui basic fitted segment\">
                        <div class=\"two fields\">
                            <div class=\"field";
            // line 213
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "montant_cotis", [], "any", true, true, false, 213) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "montant_cotis", [], "any", false, false, false, 213) == 1))) {
                yield " required";
            }
            yield "\">
                                <label for=\"montant_cotis\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Amount:"), "html", null, true);
            yield "</label>
                                <input type=\"text\" name=\"montant_cotis\" id=\"montant_cotis\" value=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "amount", [], "any", false, false, false, 215), "html", null, true);
            yield "\" maxlength=\"10\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "montant_cotis", [], "any", true, true, false, 215) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "montant_cotis", [], "any", false, false, false, 215) == 1))) {
                yield " required=\"required\"";
            }
            yield "/>
                            </div>
                            ";
            // line 218
            yield "                            ";
            $context["ptype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "payment_type", [], "any", false, false, false, 218);
            // line 219
            yield "                            ";
            if ((($context["ptype"] ?? null) == null)) {
                // line 220
                yield "                                ";
                $context["ptype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_default_paymenttype", [], "any", false, false, false, 220);
                // line 221
                yield "                            ";
            }
            // line 222
            yield "                            ";
            yield from             $this->loadTemplate("components/forms/payment_types.html.twig", "pages/contribution_form.html.twig", 222)->unwrap()->yield(CoreExtension::merge($context, ["current" =>             // line 223
($context["ptype"] ?? null), "varname" => "type_paiement_cotis", "disabled" => CoreExtension::getAttribute($this->env, $this->source,             // line 225
($context["contribution"] ?? null), "hasSchedule", [], "method", false, false, false, 225)]));
            // line 227
            yield "                        </div>
                        <div class=\"";
            // line 228
            if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"))) {
                yield "three";
            } else {
                yield "two";
            }
            yield " fields\">
                            <div class=\"field";
            // line 229
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_enreg", [], "any", true, true, false, 229) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_enreg", [], "any", false, false, false, 229) == 1))) {
                yield " required";
            }
            yield "\">
                                <label for=\"date_enreg\">
                                    ";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Record date:"), "html", null, true);
            yield "
                                </label>
                                <div class=\"ui calendar\" id=\"contribution-rangestart\">
                                    <div class=\"ui input left icon\">
                                        <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                        <input type=\"text\" name=\"date_enreg\" id=\"date_enreg\" value=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "date", [], "any", false, false, false, 236), "html", null, true);
            yield "\" maxlength=\"10\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_enreg", [], "any", true, true, false, 236) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_enreg", [], "any", false, false, false, 236) == 1))) {
                yield " required=\"required\"";
            }
            yield " placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
            yield "\" />
                                    </div>
                                </div>
                            </div>
                            <div class=\"field";
            // line 240
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_debut_cotis", [], "any", true, true, false, 240) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_debut_cotis", [], "any", false, false, false, 240) == 1))) {
                yield " required";
            }
            yield "\">
                                <label for=\"date_debut_cotis\">
                                ";
            // line 242
            if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"))) {
                // line 243
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Start date of membership:"), "html", null, true);
                yield "
                                ";
            } else {
                // line 245
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Date of contribution:"), "html", null, true);
                yield "
                                ";
            }
            // line 247
            yield "                                </label>
                                <div class=\"ui calendar\" id=\"contribution-rangeend\">
                                    <div class=\"ui input left icon\">
                                        <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                        <input type=\"text\" name=\"date_debut_cotis\" id=\"date_debut_cotis\" value=\"";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "begin_date", [], "any", false, false, false, 251), "html", null, true);
            yield "\" maxlength=\"10\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_debut_cotis", [], "any", false, false, false, 251) == 1)) {
                yield " required=\"required\"";
            }
            yield " placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
            yield "\" />
                                    </div>
                                </div>
                            </div>
            ";
            // line 255
            if ((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE"))) {
                // line 256
                yield "                            <div class=\"field";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_fin_cotis", [], "any", true, true, false, 256) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_fin_cotis", [], "any", false, false, false, 256) == 1))) {
                    yield " required";
                }
                yield "\">
                ";
                // line 257
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_membership_ext", [], "any", false, false, false, 257) != "")) {
                    // line 258
                    yield "                                <label for=\"duree_mois_cotis\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Membership extension:"), "html", null, true);
                    yield "</label>
                                <input type=\"text\" name=\"duree_mois_cotis\" id=\"duree_mois_cotis\" value=\"";
                    // line 259
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "duration", [], "any", false, false, false, 259), "html", null, true);
                    yield "\" maxlength=\"3\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_fin_cotis", [], "any", true, true, false, 259) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_fin_cotis", [], "any", false, false, false, 259) == 1))) {
                        yield " required=\"required\"";
                    }
                    yield "/>
                                <span class=\"exemple\">";
                    // line 260
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("months"), "html", null, true);
                    yield "</span>
                ";
                } else {
                    // line 262
                    yield "                                <label for=\"date_fin_cotis\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("End date of membership:"), "html", null, true);
                    yield "</label>
                                <div class=\"ui calendar\" id=\"membership-rangeend\">
                                    <div class=\"ui input left icon\">
                                        <i class=\"calendar icon\" aria-hidden=\"true\"></i>
                                        <input type=\"text\" name=\"date_fin_cotis\" id=\"date_fin_cotis\" value=\"";
                    // line 266
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "end_date", [], "any", false, false, false, 266), "html", null, true);
                    yield "\" maxlength=\"10\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_fin_cotis", [], "any", true, true, false, 266) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "date_fin_cotis", [], "any", false, false, false, 266) == 1))) {
                        yield " required=\"required\"";
                    }
                    yield " placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("yyyy-mm-dd format"), "html", null, true);
                    yield "\" />
                                    </div>
                                </div>
                ";
                }
                // line 270
                yield "                            </div>
            ";
            }
            // line 272
            yield "                        </div>
                        <div class=\"field";
            // line 273
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "info_cotis", [], "any", true, true, false, 273) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "info_cotis", [], "any", false, false, false, 273) == 1))) {
                yield " required";
            }
            yield "\">
                            <label for=\"info_cotis\">";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Comments:"), "html", null, true);
            yield "</label>
                            <textarea name=\"info_cotis\" id=\"info_cotis\" cols=\"61\" rows=\"6\"";
            // line 275
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "info_cotis", [], "any", true, true, false, 275) && (CoreExtension::getAttribute($this->env, $this->source, ($context["required"] ?? null), "info_cotis", [], "any", false, false, false, 275) == 1))) {
                yield " required=\"required\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "info", [], "any", false, false, false, 275), "html", null, true);
            yield "</textarea>
                        </div>
                    </div>
                </div>
            </div>

        ";
            // line 281
            yield from             $this->loadTemplate("components/dynamic_fields.html.twig", "pages/contribution_form.html.twig", 281)->unwrap()->yield(CoreExtension::merge($context, ["object" => ($context["contribution"] ?? null)]));
            // line 282
            yield "
    ";
            // line 283
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 283) && (CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_mail_method", [], "any", false, false, false, 283) != Twig\Extension\CoreExtension::constant("Galette\\Core\\GaletteMail::METHOD_DISABLED")))) {
                // line 284
                yield "        ";
                if ( !($context["require_mass"] ?? null)) {
                    // line 285
                    yield "            <div class=\"ui center aligned yellow segment\">
                <div class=\"inline field\">
                    <div class=\"ui toggle checkbox\">
                        <input type=\"checkbox\" name=\"mail_confirm\" id=\"mail_confirm\" value=\"1\"";
                    // line 288
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["preferences"] ?? null), "pref_bool_mailowner", [], "any", false, false, false, 288) || CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "sendEMail", [], "method", false, false, false, 288))) {
                        yield " checked=\"checked\"";
                    }
                    yield "/>
                        <label for=\"mail_confirm\">
                            ";
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Notify member"), "html", null, true);
                    yield "
                        </label>
                        <br/>
                        <span class=\"exemple\">
                            ";
                    // line 294
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member will receive a notification by email, if he has an address."), "html", null, true);
                    yield "
                        </span>
                    </div>
                </div>
            </div>
        ";
                }
                // line 300
                yield "    ";
            }
            // line 301
            yield "    ";
            if ( !($context["require_mass"] ?? null)) {
                // line 302
                yield "        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" name=\"valid\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\" aria-hidden=\"true\"></i> ";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
                yield "
            </button>
            <input type=\"hidden\" name=\"id_cotis\" value=\"";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 306), "html", null, true);
                yield "\"/>
            <input type=\"hidden\" name=\"valid\" value=\"1\"/>
            <input type=\"hidden\" name=\"trans_id\" value=\"";
                // line 308
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 308) != null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 308), "id", [], "any", false, false, false, 308), "html", null, true);
                }
                yield "\"/>
        </div>
    ";
            }
            // line 311
            yield "    ";
            if ((($context["mode"] ?? null) != "ajax")) {
                // line 312
                yield "            ";
                yield from                 $this->loadTemplate("components/forms/csrf.html.twig", "pages/contribution_form.html.twig", 312)->unwrap()->yield($context);
                // line 313
                yield "        </form>
    ";
            }
        } elseif ((        // line 315
($context["mode"] ?? null) != "ajax")) {
            yield " ";
            // line 316
            yield "    <div class=\"ui warning message\" id=\"warningbox\">
        <h3>";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No member registered!"), "html", null, true);
            yield "</h3>
        <p>
            ";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Unfortunately, there is no member in your database yet,"), "html", null, true);
            yield "
            <br/>
            <a href=\"";
            // line 321
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

    // line 327
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 328
        yield "<script type=\"text/javascript\">
    ";
        // line 329
        if (((($context["type"] ?? null) == Twig\Extension\CoreExtension::constant("Galette\\Entity\\Contribution::TYPE_FEE")) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 329))) {
            // line 330
            yield "        ";
            yield from             $this->loadTemplate("elements/js/choose_adh.js.twig", "pages/contribution_form.html.twig", 330)->unwrap()->yield(CoreExtension::merge($context, ["new_contrib_onchange" => true]));
            // line 333
            yield "    ";
        } else {
            // line 334
            yield "        ";
            yield from             $this->loadTemplate("elements/js/choose_adh.js.twig", "pages/contribution_form.html.twig", 334)->unwrap()->yield($context);
            // line 335
            yield "    ";
        }
        // line 336
        yield "
    \$(function() {
    ";
        // line 338
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 338)) {
            // line 339
            yield "var _types_amounts = {";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["type_cotis_options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 341
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "amount", [], "any", false, false, false, 341) > 0)) {
                    // line 342
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield ": ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "amount", [], "any", false, false, false, 342), "html", null, true);
                    yield ",";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            yield "};
        \$('#id_type_cotis').dropdown({
            onChange: function(value) {
                //change to predefined amount if there is one, and if user has not entered data himself
                if (\$('#montant_cotis').data('userset') != true && _types_amounts[value]) {
                    var _amount = _types_amounts[value];
                    \$('#montant_cotis').val(_amount);
                }
            }
        });
        \$('#montant_cotis').on('keyup', function() {
            //keep trace of user entered data
            if (\$(this).val() == '') {
                \$(this).data('userset', false);
            } else {
                \$(this).data('userset', true);
            }
        });";
        }
        // line 364
        yield "
        ";
        // line 365
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "isTransactionPart", [], "method", false, false, false, 365) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 365), "getMissingAmount", [], "method", false, false, false, 365))) {
            // line 366
            yield "        \$('#transaction_related').hide();
        \$('#montant_cotis').on('change', function() {
            var _amount = ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 368), "getMissingAmount", [], "method", false, false, false, 368), "html", null, true);
            yield ";
            var _current = \$(this).val();
            if (_current < _amount) {
                \$('#transaction_related').show();
            } else if (_current > _amount) {
                ";
            // line 373
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/contribution_form.html.twig", 373)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Contribution amount should not be greater than %max"), ["%max" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 374
($context["contribution"] ?? null), "transaction", [], "any", false, false, false, 374), "getMissingAmount", [], "method", false, false, false, 374)]), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 381
            yield "            } else {
                \$('#transaction_related').hide();
            }
        });
    ";
        }
        // line 386
        yield "
    ";
        // line 387
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "hasSchedule", [], "method", false, false, false, 387)) {
            // line 388
            yield "            ";
            // line 389
            yield "            var _btnuser_mapping = function(){
                \$('#scheduledslist').click(function(){
                    \$.ajax({
                        url: '";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("scheduledPayments"), "html", null, true);
            yield "',
                        type: \"GET\",
                        data: {
                            ajax: true,
                            id_cotis: '";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 396), "html", null, true);
            yield "'
                        },
                        ";
            // line 398
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/contribution_form.html.twig", 398)->unwrap()->yield(CoreExtension::merge($context, ["selector" => "#scheduledslist", "loader" => "button"]));
            // line 401
            yield ",
                        success: function(res){
                            _contribs_dialog(res, '";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contribution"] ?? null), "id", [], "any", false, false, false, 403), "html", null, true);
            yield "');
                        },
                        error: function() {
                            ";
            // line 406
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/contribution_form.html.twig", 406)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying scheduled payments :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 414
            yield "                        }
                    });
                });
            }
            _btnuser_mapping();

            var _contribs_dialog = function(res, id_cotis){
                ";
            // line 421
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/contribution_form.html.twig", 421)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Scheduled payments"), "js"), "modal_content" => "res", "modal_class" => "scheduledpayments fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 429
            yield "                _contribs_ajax_mapper(res, id_cotis);
            }

            var _contribs_ajax_mapper = function(res, id_cotis){
                /*\$('.scheduledpayments .filter.icon').remove();
                \$('.scheduledpayments .infoline .button').remove();
                \$('.scheduledpayments .contribution_row input[type=checkbox]').hide();

                //Initialize Fomantic components
                \$('.scheduledpayments .dropdown').dropdown();
                ";
            // line 439
            yield from             $this->loadTemplate("elements/js/calendar.js.twig", "pages/contribution_form.html.twig", 439)->unwrap()->yield($context);
            // line 440
            yield "
                //Deactivate contributions list links
                \$('.scheduledpayments tbody a').click(function(){
                    //for links in body (members links), we de nothing
                    return false;
                });

                //Use JS to send forms
                \$('.scheduledpayments form').on('submit', function(){
                    var _form = \$(this);
                    \$.ajax({
                        url: _form.attr('action'),
                        type: \"POST\",
                        data: _form.serialize(),
                        ";
            // line 454
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/contribution_form.html.twig", 454)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".scheduledpayments"]));
            // line 456
            yield ",
                        success: function(res){
                            \$('#main-container').remove();
                            \$('.scheduledpayments .content').append(res);
                            _contribs_ajax_mapper(res, max_amount);
                        },
                        error: function() {
                            ";
            // line 463
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/contribution_form.html.twig", 463)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 471
            yield "                        }
                    });
                    return false;
                });

                _bindDropdownsAutosubmit();*/

                //Bind pagination and ordering links
                /*\$('.scheduledpayments .pagination a, .scheduledpayments thead a').click(function() {
                    \$.ajax({
                        url: this.href,
                        type: \"GET\",
                        data: {
                            ajax: true,
                            max_amount: max_amount
                        },
                        ";
            // line 487
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/contribution_form.html.twig", 487)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".scheduledpayments"]));
            // line 489
            yield ",
                        success: function(res){
                            \$('#main-container').remove();
                            \$('.scheduledpayments .content').append(res);
                            _contribs_ajax_mapper(res, max_amount);
                        },
                        error: function() {
                            ";
            // line 496
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/contribution_form.html.twig", 496)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 504
            yield "                        },
                    });
                    return false;
                });*/

                //Bind reset filters button
                /*\$('#clear_filter').click(function(event) {
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
            // line 520
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "pages/contribution_form.html.twig", 520)->unwrap()->yield(CoreExtension::merge($context, ["selector" => ".scheduledpayments"]));
            // line 522
            yield ",
                            success: function(res){
                                \$('#main-container').remove();
                                \$('.scheduledpayments .content').append(res);
                                _contribs_ajax_mapper(res, max_amount);
                            },
                            error: function() {
                                ";
            // line 529
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "pages/contribution_form.html.twig", 529)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred displaying contributions :("), "js"), "modal_without_content" => true, "modal_class" => "mini", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js"), "modal_classname" => "redalert"]));
            // line 537
            yield "                            }
                        });
                    });
                });*/
            }
    ";
        }
        // line 543
        yield "    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/contribution_form.html.twig";
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
        return array (  1045 => 543,  1037 => 537,  1035 => 529,  1026 => 522,  1024 => 520,  1006 => 504,  1004 => 496,  995 => 489,  993 => 487,  975 => 471,  973 => 463,  964 => 456,  962 => 454,  946 => 440,  944 => 439,  932 => 429,  930 => 421,  921 => 414,  919 => 406,  913 => 403,  909 => 401,  907 => 398,  902 => 396,  895 => 392,  890 => 389,  888 => 388,  886 => 387,  883 => 386,  876 => 381,  874 => 374,  873 => 373,  865 => 368,  861 => 366,  859 => 365,  856 => 364,  836 => 345,  826 => 342,  824 => 341,  820 => 340,  818 => 339,  816 => 338,  812 => 336,  809 => 335,  806 => 334,  803 => 333,  800 => 330,  798 => 329,  795 => 328,  791 => 327,  779 => 321,  774 => 319,  769 => 317,  766 => 316,  763 => 315,  759 => 313,  756 => 312,  753 => 311,  745 => 308,  740 => 306,  735 => 304,  731 => 302,  728 => 301,  725 => 300,  716 => 294,  709 => 290,  702 => 288,  697 => 285,  694 => 284,  692 => 283,  689 => 282,  687 => 281,  674 => 275,  670 => 274,  664 => 273,  661 => 272,  657 => 270,  644 => 266,  636 => 262,  631 => 260,  623 => 259,  618 => 258,  616 => 257,  609 => 256,  607 => 255,  594 => 251,  588 => 247,  582 => 245,  576 => 243,  574 => 242,  567 => 240,  554 => 236,  546 => 231,  539 => 229,  531 => 228,  528 => 227,  526 => 225,  525 => 223,  523 => 222,  520 => 221,  517 => 220,  514 => 219,  511 => 218,  502 => 215,  498 => 214,  492 => 213,  486 => 209,  480 => 207,  474 => 205,  472 => 204,  463 => 197,  459 => 195,  455 => 193,  445 => 186,  438 => 182,  433 => 180,  428 => 178,  424 => 177,  416 => 172,  412 => 171,  406 => 167,  404 => 166,  399 => 164,  394 => 162,  384 => 154,  381 => 153,  378 => 152,  373 => 149,  361 => 146,  351 => 145,  347 => 144,  343 => 143,  340 => 142,  338 => 141,  335 => 140,  330 => 137,  324 => 134,  317 => 130,  310 => 128,  304 => 125,  297 => 121,  290 => 119,  287 => 118,  285 => 117,  281 => 116,  277 => 115,  273 => 113,  271 => 112,  265 => 109,  261 => 108,  253 => 103,  249 => 102,  241 => 97,  237 => 96,  228 => 90,  223 => 88,  216 => 84,  211 => 81,  209 => 80,  206 => 79,  204 => 78,  198 => 74,  183 => 72,  179 => 71,  165 => 69,  155 => 67,  152 => 66,  149 => 65,  146 => 64,  143 => 63,  141 => 62,  136 => 60,  129 => 59,  126 => 58,  124 => 55,  122 => 51,  120 => 50,  114 => 49,  109 => 46,  103 => 43,  100 => 42,  97 => 41,  91 => 38,  88 => 37,  85 => 36,  79 => 34,  73 => 32,  71 => 31,  66 => 28,  56 => 26,  53 => 25,  51 => 24,  47 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/contribution_form.html.twig", "/var/www/galette/templates/default/pages/contribution_form.html.twig");
    }
}
