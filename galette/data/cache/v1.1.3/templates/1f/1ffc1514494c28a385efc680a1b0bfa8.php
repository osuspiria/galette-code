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

/* @PluginGaletteObjectslend/categories_list.html.twig */
class __TwigTemplate_9b0974b8e5431b732c29c4b5a9c90f0b extends Template
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
        // line 22
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "@PluginGaletteObjectslend/categories_list.html.twig", 22)->unwrap();
        // line 24
        $context["nb"] = ($context["nb_categories"] ?? null);
        // line 26
        $context["form"] = ["order" => ["name" => "objectslend_categories"]];
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "@PluginGaletteObjectslend/categories_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count category", "%count categories",         // line 34
($context["nb"] ?? null), "events"), ["%count" => ($context["nb"] ?? null)])];
        // line 36
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 39
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "    <a
            class=\"ui tiny labeled icon button\"
            href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_category_add"), "html", null, true);
        yield "\"
    >
        <i class=\"plus circle green icon\" aria-hidden=\"true\"></i>
        ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add a category", "objectslend"), "html", null, true);
        yield "
    </a>
";
        return; yield '';
    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "    ";
        $context["columns"] = [["label" => "#"], ["label" => $this->env->getFunction('_T')->getCallable()("Name", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Categories::ORDERBY_NAME")], ["label" => $this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Categories::ORDERBY_ACTIVITY")]];
        // line 55
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 58
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_filter_categories"), "html", null, true);
        yield "\" method=\"post\" id=\"filtre\" class=\"ui form filters\">
        <div class=\"ui secondary yellow segment\">
            <div class=\"ui three fields\">
                <div class=\"field\">
                    <label for=\"filter_str\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search:"), "html", null, true);
        yield "</label>
                    <input type=\"text\" name=\"filter_str\" id=\"filter_str\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_str", [], "any", false, false, false, 64), "html", null, true);
        yield "\" type=\"search\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a value"), "html", null, true);
        yield "\"/>
                </div>
                <div class=\"field\">
                    <label for=\"email_filter\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active:", "objectslend"), "html", null, true);
        yield "</label>
                    <div class=\"inline fields\">
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_dc_active\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Categories::ALL_CATEGORIES"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 71) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ALL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_dc_active\" >";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_yes_active\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Categories::ACTIVE_CATEGORIES"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 77) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::ACTIVE"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_yes_active\" >";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_no_active\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Categories::INACTIVE_CATEGORIES"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 83) == Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Status::INACTIVE"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_no_active\" >";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui right aligned basic fitted segment field flexend\">
                    <button type=\"submit\"  class=\"tooltip action ui labeled icon primary button\" title=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                        <i class=\"search icon\"></i>
                        ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                    </button>
                    <button type=\"submit\" name=\"clear_filter\" class=\"ui labeled icon button tooltip\" title=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                        <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                        ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
        ";
        // line 101
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/categories_list.html.twig", 101)->unwrap()->yield($context);
        // line 102
        yield "    </form>
";
        return; yield '';
    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 107
            yield "            <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107) % 2 != 0)) {
                yield "odd";
            } else {
                yield "even";
            }
            yield "\">
                <td  data-col-label=\"#\">
                    ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "category_id", [], "any", false, false, false, 109), "html", null, true);
            yield "
                </td>
                <td data-col-label=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name", "objectslend"), "html", null, true);
            yield "\">
        ";
            // line 112
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["olendsprefs"] ?? null), "imagesInLists", [], "method", false, false, false, 112)) {
                // line 113
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "category", "mode" => "thumbnail", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "category_id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\"
                        class=\"ui middle aligned image\"
                        width=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "picture", [], "any", false, false, false, 115), "getOptimalThumbWidth", [($context["olendsprefs"] ?? null)], "method", false, false, false, 115), "html", null, true);
                yield "\"
                        height=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "picture", [], "any", false, false, false, 116), "getOptimalThumbHeight", [($context["olendsprefs"] ?? null)], "method", false, false, false, 116), "html", null, true);
                yield "\"
                        alt=\"\"/>
        ";
            }
            // line 119
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "name", [], "any", false, false, false, 119), "html", null, true);
            yield "
                </td>
                <td class=\"center\" data-col-label=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
            yield "\">
                    <i class=\"thumbs ";
            // line 122
            if (CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "is_active", [], "any", false, false, false, 122)) {
                yield "up green";
            } else {
                yield "down red";
            }
            yield " icon tooltip\" data-html=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "is_active", [], "any", false, false, false, 122)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive", "objectslend"), "html", null, true);
            }
            yield "\"></i>
                    <span class=\"visually-hidden\">";
            // line 123
            if (CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "is_active", [], "any", false, false, false, 123)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive", "objectslend"), "html", null, true);
            }
            yield "</span>
                </td>
        ";
            // line 125
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 125) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 125))) {
                // line 126
                yield "                <td class=\"center actions_row nowrap\">
                    ";
                // line 127
                $context["actions"] = [["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Edit \"%category\"", "objectslend"), ["%category" => CoreExtension::getAttribute($this->env, $this->source,                 // line 129
$context["categ"], "name", [], "any", false, false, false, 129)]), "route" => ["name" => "objectslend_category_edit", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 132
$context["categ"], "category_id", [], "any", false, false, false, 132)]], "icon" => "edit"]];
                // line 137
                yield "
                    ";
                // line 138
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 138)) {
                    // line 139
                    yield "                        ";
                    $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), [["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove \"%category\"", "events"), ["%category" => CoreExtension::getAttribute($this->env, $this->source,                     // line 141
$context["categ"], "name", [], "any", false, false, false, 141)]), "route" => ["name" => "objectslend_remove_category", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 144
$context["categ"], "category_id", [], "any", false, false, false, 144)]], "icon" => "trash red", "extra_class" => "delete"]]);
                    // line 150
                    yield "                    ";
                }
                // line 151
                yield "
                    ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 153
                    yield "                        ";
                    yield CoreExtension::callMacro($macros["macros"], "macro_drawListAction", [CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 153), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "route", [], "any", false, false, false, 153), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 153), ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 153), "")) : (""))], 153, $context, $this->getSourceContext());
                    yield "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                yield "                </td>
        ";
            }
            // line 157
            yield "            </tr>
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
            // line 159
            yield "            <tr>
                <td colspan=\"4\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No category", "objectslend"), "html", null, true);
            yield "</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "</table>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/categories_list.html.twig";
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
        return array (  383 => 163,  374 => 160,  371 => 159,  357 => 157,  353 => 155,  344 => 153,  340 => 152,  337 => 151,  334 => 150,  332 => 144,  331 => 141,  329 => 139,  327 => 138,  324 => 137,  322 => 132,  321 => 129,  320 => 127,  317 => 126,  315 => 125,  306 => 123,  292 => 122,  288 => 121,  282 => 119,  276 => 116,  272 => 115,  266 => 113,  264 => 112,  260 => 111,  255 => 109,  245 => 107,  226 => 106,  222 => 105,  216 => 102,  214 => 101,  206 => 96,  201 => 94,  196 => 92,  191 => 90,  182 => 84,  174 => 83,  166 => 78,  158 => 77,  150 => 72,  142 => 71,  135 => 67,  127 => 64,  123 => 63,  115 => 59,  111 => 58,  103 => 55,  100 => 50,  96 => 49,  88 => 45,  82 => 42,  78 => 40,  74 => 39,  66 => 36,  64 => 34,  62 => 33,  58 => 32,  53 => 21,  51 => 26,  49 => 24,  47 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/categories_list.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/categories_list.html.twig");
    }
}
