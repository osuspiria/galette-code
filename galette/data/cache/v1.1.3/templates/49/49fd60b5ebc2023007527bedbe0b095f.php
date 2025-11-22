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

/* @PluginGaletteObjectslend/status_list.html.twig */
class __TwigTemplate_15b189d410a2ec6ceb686a1b82ddb1ab extends Template
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
        $context["nb"] = ($context["nb_status"] ?? null);
        // line 25
        $context["form"] = ["order" => ["name" => "objectslend_statuses"]];
        // line 31
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "@PluginGaletteObjectslend/status_list.html.twig", 31)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "@PluginGaletteObjectslend/status_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count status", "%count statuses",         // line 35
($context["nb"] ?? null)), ["%count" => ($context["nb"] ?? null)]), "route" => ["name" => "objectslend_filter_statuses"]];
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
            class=\"ui tiny labeled icon button\"
            href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_status_add"), "html", null, true);
        yield "\"
    >
        <i class=\"plus circle green icon\" aria-hidden=\"true\"></i>
        ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a status", "objectslend"), "html", null, true);
        yield "
    </a>
";
        return; yield '';
    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        $context["columns"] = [["label" => "#", "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ORDERBY_ID")], ["label" => $this->env->getFunction('_T')->getCallable()("Status", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ORDERBY_NAME")], ["label" => $this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ORDERBY_ACTIVE")], ["label" => $this->env->getFunction('_T')->getCallable()("Stock", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ORDERBY_STOCK")], ["label" => $this->env->getFunction('_T')->getCallable()("Days for rent", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ORDERBY_RENTDAYS")]];
        // line 61
        yield "
    ";
        // line 62
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 65
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_filter_statuses"), "html", null, true);
        yield "\" method=\"post\" id=\"filtre\" class=\"ui form filters\">
        <div class=\"ui secondary yellow segment\">
            <div class=\"ui four fields\">
                <div class=\"field\">
                    <label for=\"event_filter\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search:"), "html", null, true);
        yield "</label>
                    <input type=\"text\" name=\"filter_str\" id=\"filter_str\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_str", [], "any", false, false, false, 71), "html", null, true);
        yield "\" type=\"search\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a value"), "html", null, true);
        yield "\"/>
                </div>
                <div class=\"field\">
                    <label for=\"email_filter\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active:", "objectslend"), "html", null, true);
        yield "</label>
                    <div class=\"inline fields\">
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_dc_active\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ALL"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 78) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ALL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_dc_active\" >";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_yes_active\" value=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ACTIVE"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 84) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ACTIVE"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_yes_active\" >";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_no_active\" value=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::INACTIVE"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 90) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::INACTIVE"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_no_active\" >";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"field\">
                    <label for=\"email_filter\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In stock:", "objectslend"), "html", null, true);
        yield "</label>
                    <div class=\"inline fields\">
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"stock_filter\" id=\"filter_dc_stock\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::DC_STOCK"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "stock_filter", [], "any", false, false, false, 101) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::DC_STOCK"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_dc_stock\" >";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"stock_filter\" id=\"filter_yes_stock\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::IN_STOCK"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "stock_filter", [], "any", false, false, false, 107) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::IN_STOCK"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_yes_stock\" >";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"stock_filter\" id=\"filter_no_stock\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::OUT_STOCK"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "stock_filter", [], "any", false, false, false, 113) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::OUT_STOCK"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_no_stock\" >";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui right aligned basic fitted segment field flexend\">
                    <button type=\"submit\"  class=\"tooltip action ui labeled icon primary button\" title=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                        <i class=\"search icon\"></i>
                        ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                    </button>
                    <button type=\"submit\" name=\"clear_filter\" class=\"ui labeled icon button tooltip\" title=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                        <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                        ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
        ";
        // line 131
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/status_list.html.twig", 131)->unwrap()->yield($context);
        // line 132
        yield "    </form>
";
        return; yield '';
    }

    // line 135
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 137
            yield "        <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137) % 2 != 0)) {
                yield "even";
            } else {
                yield "odd";
            }
            yield "\">
            <td data-scope=\"id\">
                ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "status_id", [], "any", false, false, false, 139), "html", null, true);
            yield "
            </td>
            <td data-col-label=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Status", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "status_text", [], "any", false, false, false, 142), "html", null, true);
            yield "
            </td>
            <td class=\"center\" data-col-label=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 145
            if (CoreExtension::getAttribute($this->env, $this->source, $context["status"], "is_active", [], "any", false, false, false, 145)) {
                // line 146
                yield "                    <i class=\"thumbs up green icon tooltip\" data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
                yield "\"></i>
                    <span class=\"visually-hidden\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 149
                yield "                    <i class=\"thumbs down red icon tooltip\" data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive", "objectslend"), "html", null, true);
                yield "\"></i>
                    <span class=\"visually-hidden\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive", "objectslend"), "html", null, true);
                yield "</span>
                ";
            }
            // line 152
            yield "            </td>
            <td class=\"center\" data-col-label=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Stock", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 154
            if (CoreExtension::getAttribute($this->env, $this->source, $context["status"], "in_stock", [], "any", false, false, false, 154)) {
                // line 155
                yield "                    <i class=\"thumbs up green icon tooltip\" data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In stock", "objectslend"), "html", null, true);
                yield "\"></i>
                    <span class=\"visually-hidden\">";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In stock", "objectslend"), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 158
                yield "                    <i class=\"thumbs down red icon tooltip\" data-html=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not in stock", "objectslend"), "html", null, true);
                yield "\"></i>
                    <span class=\"visually-hidden\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Not in stock", "objectslend"), "html", null, true);
                yield "</span>
                ";
            }
            // line 161
            yield "            </td>
            <td data-col-label=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Days for rent", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 163
            if (CoreExtension::getAttribute($this->env, $this->source, $context["status"], "rent_day_number", [], "any", false, false, false, 163)) {
                // line 164
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("%days days", "objectslend"), ["%days" => CoreExtension::getAttribute($this->env, $this->source, $context["status"], "rent_day_number", [], "any", false, false, false, 164)]), "html", null, true);
                yield "
                ";
            } else {
                // line 166
                yield "                    -
                ";
            }
            // line 168
            yield "            </td>
            <td class=\"center actions_row nowrap\">
                ";
            // line 170
            $context["actions"] = [["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit %status", "objectslend"), ["%status" => CoreExtension::getAttribute($this->env, $this->source,             // line 172
$context["status"], "status_text", [], "any", false, false, false, 172)]), "route" => ["name" => "objectslend_status_edit", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 175
$context["status"], "status_id", [], "any", false, false, false, 175)]], "icon" => "edit"], ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove %status from database", "objectslend"), ["%status" => CoreExtension::getAttribute($this->env, $this->source,             // line 180
$context["status"], "status_text", [], "any", false, false, false, 180)]), "route" => ["name" => "objectslend_remove_status", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 183
$context["status"], "status_id", [], "any", false, false, false, 183)]], "icon" => "trash red", "extra_class" => "delete"]];
            // line 189
            yield "
                ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 191
                yield "                    ";
                yield CoreExtension::callMacro($macros["macros"], "macro_drawListAction", [CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 191), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "route", [], "any", false, false, false, 191), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 191), (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", true, true, false, 191) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 191)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 191)) : (""))], 191, $context, $this->getSourceContext());
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
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
            // line 196
            yield "        <tr><td colspan=\"6\" class=\"emptylist\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No status has been found", "objectslend"), "html", null, true);
            yield "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/status_list.html.twig";
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
        return array (  442 => 196,  427 => 193,  418 => 191,  414 => 190,  411 => 189,  409 => 183,  408 => 180,  407 => 175,  406 => 172,  405 => 170,  401 => 168,  397 => 166,  391 => 164,  389 => 163,  385 => 162,  382 => 161,  377 => 159,  372 => 158,  367 => 156,  362 => 155,  360 => 154,  356 => 153,  353 => 152,  348 => 150,  343 => 149,  338 => 147,  333 => 146,  331 => 145,  327 => 144,  322 => 142,  318 => 141,  313 => 139,  303 => 137,  284 => 136,  280 => 135,  274 => 132,  272 => 131,  264 => 126,  259 => 124,  254 => 122,  249 => 120,  240 => 114,  232 => 113,  224 => 108,  216 => 107,  208 => 102,  200 => 101,  193 => 97,  184 => 91,  176 => 90,  168 => 85,  160 => 84,  152 => 79,  144 => 78,  137 => 74,  129 => 71,  125 => 70,  117 => 66,  113 => 65,  106 => 62,  103 => 61,  100 => 54,  96 => 53,  88 => 49,  82 => 46,  78 => 44,  74 => 43,  66 => 40,  64 => 35,  62 => 34,  58 => 33,  53 => 21,  51 => 31,  49 => 25,  47 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/status_list.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/status_list.html.twig");
    }
}
