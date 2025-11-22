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

/* @PluginGaletteObjectslend/objects_list.html.twig */
class __TwigTemplate_66e9139339872911d6e1a266a17e850f extends Template
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
        // line 22
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 22)->unwrap();
        // line 24
        $context["nb"] = ($context["nb_objects"] ?? null);
        // line 26
        $context["form"] = ["order" => ["name" => "objectslend_objects"], "route" => ["name" => "objectslend_batch-objectslist"]];
        // line 392
        if ((($context["nb_objects"] ?? null) > 0)) {
            // line 393
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 393) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 393))) {
                // line 394
                $context["batch"] = ["route" => ["name" => "objectslend_batch-objectslist"], "modal" => ["title" => $this->env->getFunction('_T')->getCallable()("No object selected", "objectslend"), "content" => $this->env->getFunction('_T')->getCallable()("Please make sure to select at least one object from the list to perform this action.", "objectslend")]];
                // line 404
                $context["batch_actions"] = [["name" => "print_list__directdownload", "label" => $this->env->getFunction('_T')->getCallable()("Print objects list", "objectslend"), "icon" => "file pdf"], ["name" => "delete", "label" => $this->env->getFunction('_T')->getCallable()("Delete"), "icon" => "red trash"]];
            }
        }
        // line 21
        $this->parent = $this->loadTemplate("elements/list.html.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_infoline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    ";
        $context["infoline"] = ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_Tn')->getCallable()("%count entry", "%count entries",         // line 37
($context["nb"] ?? null)), ["%count" => ($context["nb"] ?? null)]), "route" => ["name" => "objectslend_filter_objects"]];
        // line 42
        yield "    ";
        yield from $this->yieldParentBlock("infoline", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 45
    public function block_infoline_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 46) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 46))) {
            // line 47
            yield "    <a
            class=\"ui tiny labeled icon button\"
            href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_add"), "html", null, true);
            yield "\"
    >
        <i class=\"plus circle green icon\" aria-hidden=\"true\"></i>
        ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Add an object", "objectslend"), "html", null, true);
            yield "
    </a>
    ";
        }
        return; yield '';
    }

    // line 57
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        $context["columns"] = [];
        // line 59
        yield "
    ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 60) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 60))) {
            // line 61
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => "#"]]);
            // line 64
            yield "    ";
        }
        // line 65
        yield "
    ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["olendsprefs"] ?? null), "imagesInLists", [], "method", false, false, false, 66)) {
            // line 67
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Picture")]]);
            // line 70
            yield "    ";
        }
        // line 71
        yield "
    ";
        // line 72
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Name", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_NAME")]]);
        // line 75
        yield "
    ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_SERIAL", [], "any", false, false, false, 76)) {
            // line 77
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Serial", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_SERIAL")]]);
            // line 80
            yield "    ";
        }
        // line 81
        yield "
    ";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_PRICE", [], "any", false, false, false, 82)) {
            // line 83
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Price", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_PRICE")]]);
            // line 86
            yield "    ";
        }
        // line 87
        yield "
    ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_LEND_PRICE", [], "any", false, false, false, 88)) {
            // line 89
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Borrow price", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_RENTPRICE")]]);
            // line 92
            yield "    ";
        }
        // line 93
        yield "
    ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DIMENSION", [], "any", false, false, false, 94)) {
            // line 95
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Dimensions", "objectslend")]]);
            // line 98
            yield "    ";
        }
        // line 99
        yield "
    ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_WEIGHT", [], "any", false, false, false, 100)) {
            // line 101
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Weight", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_WEIGHT")]]);
            // line 104
            yield "    ";
        }
        // line 105
        yield "
    ";
        // line 106
        $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Status", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_STATUS")], ["label" => $this->env->getFunction('_T')->getCallable()("Since", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_BDATE")], ["label" => $this->env->getFunction('_T')->getCallable()("By", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_MEMBER")]]);
        // line 111
        yield "
    ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DATE_FORECAST", [], "any", false, false, false, 112)) {
            // line 113
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Return", "objectslend"), "order" => Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ORDERBY_FDATE")]]);
            // line 116
            yield "    ";
        }
        // line 117
        yield "
    ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 118) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 118))) {
            // line 119
            yield "        ";
            $context["columns"] = Twig\Extension\CoreExtension::merge(($context["columns"] ?? null), [["label" => $this->env->getFunction('_T')->getCallable()("Active", "objectslend")]]);
            // line 122
            yield "    ";
        }
        // line 123
        yield "
    ";
        // line 124
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 127
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        yield "    <form id=\"filtre\" method=\"POST\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_filter_objects"), "html", null, true);
        yield "\" class=\"ui form filters\">
        <div class=\"ui secondary yellow segment\">
            <div class=\"three fields\">
                <div class=\"field\">
                    <label for=\"filter_str\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search:"), "html", null, true);
        yield "</label>
                    <input type=\"text\" name=\"filter_str\" id=\"filter_str\" value=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "filter_str", [], "any", false, false, false, 133), "html", null, true);
        yield "\" type=\"search\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Enter a value"), "html", null, true);
        yield "\"/>
                </div>
                <div class=\"field\">
                    <label for=\"field_filter\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("in:"), "html", null, true);
        yield "</label>
                    <select name=\"field_filter\" id=\"field_filter\" class=\"ui search dropdown nochosen\">
                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["field_filter_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 139
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"";
            if (($context["key"] == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "field_filter", [], "any", false, false, false, 139))) {
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
        // line 141
        yield "                    </select>
                </div>
                <div class=\"field\">
                    <label for=\"email_filter\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active:", "objectslend"), "html", null, true);
        yield "</label>
                    <div class=\"inline fields\">
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_dc_active\" value=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ALL_OBJECTS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 148) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_DC_EMAIL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_dc_active\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Don't care"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_yes_active\" value=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::ACTIVE_OBJECTS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 154) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_W_EMAIL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_yes_active\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Yes"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                        <div class=\"field inline\">
                            <div class=\"ui radio checkbox\">
                                <input type=\"radio\" name=\"active_filter\" id=\"filter_no_active\" value=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GaletteObjectsLend\\Repository\\Objects::INACTIVE_OBJECTS"), "html", null, true);
        yield "\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active_filter", [], "any", false, false, false, 160) == Twig\Extension\CoreExtension::constant("Galette\\Repository\\Members::FILTER_WO_EMAIL"))) {
            yield " checked=\"checked\"";
        }
        yield ">
                                <label for=\"filter_no_active\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No"), "html", null, true);
        yield "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ui right aligned basic fitted segment field flexend\">
                    <button type=\"submit\"  class=\"ui labeled icon primary button\" title=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Apply filters"), "html", null, true);
        yield "\" name=\"filter\">
                        <i class=\"search icon\"></i>
                        ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Filter"), "html", null, true);
        yield "
                    </button>
                    <button type=\"submit\" name=\"clear_filter\" class=\"ui labeled icon button tooltip\" title=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Reset all filters to defaults"), "html", null, true);
        yield "\">
                        <i class=\"trash alt red icon\" aria-hidden=\"true\"></i>
                        ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Clear filter"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
        ";
        // line 178
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 178)->unwrap()->yield($context);
        // line 179
        yield "    </form>

    ";
        // line 181
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_CATEGORY", [], "any", false, false, false, 181) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0))) {
            // line 182
            yield "        <div class=\"galetteform ui styled fluid accordion field\">
            <div class=\"ui title\">
                <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Categories", "objectslend"), "html", null, true);
            yield "
            </div>
            <div class=\"content\">
                <div class=\"ui huge labels\">
                    <a class=\"ui";
            // line 189
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "category_filter", [], "any", false, false, false, 189) == null)) {
                yield " primary";
            }
            yield " image label\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_objects", ["option" => "category", "value" => 0]), "html", null, true);
            yield "\">
                        <img
                                src=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "category", "mode" => "thumbnail", "id" => 0]), "html", null, true);
            yield "\"
                                alt=\"\"
                        />
                        ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("All"), "html", null, true);
            yield "
                    </a>

                    ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
                // line 198
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "isActive", [], "method", false, false, false, 198) || (CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getId", [], "method", false, false, false, 198) ==  -1))) {
                    // line 199
                    yield "                            <a class=\"ui";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "category_filter", [], "any", false, false, false, 199) == CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getId", [], "method", false, false, false, 199))) {
                        yield " primary";
                    }
                    yield " image label\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_objects", ["option" => "category", "value" => CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getId", [], "method", false, false, false, 199)]), "html", null, true);
                    yield "\">
                                <img
                                    src=\"";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "category", "mode" => "thumbnail", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getId", [], "method", false, false, false, 201)]), "html", null, true);
                    yield "\"
                                    width=\"";
                    // line 202
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getPicture", [], "method", false, false, false, 202), "getOptimalThumbWidth", [($context["olendsprefs"] ?? null)], "method", false, false, false, 202), "html", null, true);
                    yield "\"
                                    height=\"";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getPicture", [], "method", false, false, false, 203), "getOptimalThumbHeight", [($context["olendsprefs"] ?? null)], "method", false, false, false, 203), "html", null, true);
                    yield "\"
                                    alt=\"\"
                                />
                                ";
                    // line 206
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getName", [], "method", false, false, false, 206), "html", null, true);
                    yield "
                            ";
                    // line 207
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_LIST_PRICE_SUM", [], "any", false, false, false, 207) && CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_PRICE", [], "any", false, false, false, 207)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 207) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 207)))) {
                        // line 208
                        yield "                                <div class=\"detail\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getSum", [], "method", false, false, false, 208), "html", null, true);
                        yield " &euro;</div>
                            ";
                    }
                    // line 210
                    yield "                            </a>
                        ";
                }
                // line 212
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "
                </div>
            </div>
        </div>
    ";
        }
        return; yield '';
    }

    // line 220
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["objects"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 222
            yield "        <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 222) % 2 != 0)) {
                yield "even";
            } else {
                yield "odd";
            }
            yield "\">
            ";
            // line 223
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 223) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 223))) {
                // line 224
                yield "                <td class=\"center\" data-scope=\"row\">
                    <input type=\"checkbox\" name=\"entries_sel[]\" value=\"";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getId", [], "method", false, false, false, 225), "html", null, true);
                yield "\">
                </td>
            ";
            }
            // line 228
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["olendsprefs"] ?? null), "imagesInLists", [], "method", false, false, false, 228)) {
                // line 229
                yield "                <td class=\"center\" data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Picture"), "html", null, true);
                yield "\">
                    <img src=\"";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "object", "mode" => "thumbnail", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getId", [], "method", false, false, false, 230)]), "html", null, true);
                yield "\"
                         class=\"picture\"
                         width=\"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getPicture", [], "method", false, false, false, 232), "getOptimalThumbWidth", [($context["olendsprefs"] ?? null)], "method", false, false, false, 232), "html", null, true);
                yield "\"
                         height=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getPicture", [], "method", false, false, false, 233), "getOptimalThumbHeight", [($context["olendsprefs"] ?? null)], "method", false, false, false, 233), "html", null, true);
                yield "\"
                         alt=\"";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object photo", "objectslend"), "html", null, true);
                yield "\"/>
                </td>
            ";
            }
            // line 237
            yield "            <td data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name", "objectslend"), "html", null, true);
            yield "\">
                <strong>";
            // line 238
            yield CoreExtension::getAttribute($this->env, $this->source, $context["object"], "displayName", [($context["filters"] ?? null)], "method", false, false, false, 238);
            yield "</strong>
                ";
            // line 239
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DESCRIPTION", [], "any", false, false, false, 239)) {
                // line 240
                yield "                    <br/>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["object"], "displayDescription", [($context["filters"] ?? null)], "method", false, false, false, 240);
                yield "
                ";
            }
            // line 242
            yield "            </td>
            ";
            // line 243
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_SERIAL", [], "any", false, false, false, 243)) {
                // line 244
                yield "                <td data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Serial", "objectslend"), "html", null, true);
                yield "\">
                    ";
                // line 245
                yield CoreExtension::getAttribute($this->env, $this->source, $context["object"], "displaySerial", [($context["filters"] ?? null)], "method", false, false, false, 245);
                yield "
                </td>
            ";
            }
            // line 248
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_PRICE", [], "any", false, false, false, 248)) {
                // line 249
                yield "                <td class=\"right nowrap\" data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Price", "objectslend"), "html", null, true);
                yield "\">
                    ";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getPrice", [], "method", false, false, false, 250), "html", null, true);
                yield "&euro;
                </td>
            ";
            }
            // line 253
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_LEND_PRICE", [], "any", false, false, false, 253)) {
                // line 254
                yield "                <td class=\"right\" data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Borrow price", "objectslend"), "html", null, true);
                yield "\">
                    ";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getRentPrice", [], "method", false, false, false, 255), "html", null, true);
                yield "&euro;<br/>
                    ";
                // line 256
                if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "isPricePerDay", [], "method", false, false, false, 256)) {
                    // line 257
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(per day)", "objectslend"), "html", null, true);
                    yield "
                    ";
                } else {
                    // line 259
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(at once)", "objectslend"), "html", null, true);
                    yield "
                    ";
                }
                // line 261
                yield "                </td>
            ";
            }
            // line 263
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DIMENSION", [], "any", false, false, false, 263)) {
                // line 264
                yield "                <td data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dimensions", "objectslend"), "html", null, true);
                yield "\">
                    ";
                // line 265
                yield CoreExtension::getAttribute($this->env, $this->source, $context["object"], "displayDimension", [($context["filters"] ?? null)], "method", false, false, false, 265);
                yield "
                </td>
            ";
            }
            // line 268
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_WEIGHT", [], "any", false, false, false, 268)) {
                // line 269
                yield "                <td data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Weight", "objectslend"), "html", null, true);
                yield "\">
                    ";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "weight", [], "any", false, false, false, 270), "html", null, true);
                yield "
                </td>
            ";
            }
            // line 273
            yield "            <td data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Status", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 274
            if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getStatusText", [], "method", false, false, false, 274)) {
                // line 275
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getStatusText", [], "method", false, false, false, 275), "html", null, true);
                if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "inStock", [], "method", false, false, false, 275)) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("In stock", "objectslend"), "html", null, true);
                    yield ")";
                }
                // line 276
                yield "                ";
            } else {
                yield "-";
            }
            // line 277
            yield "            </td>
            <td class=\"center nowrap\" data-col-label=\"";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Since", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getDateBegin", [], "method", false, false, false, 279), "html", null, true);
            yield "
            </td>
            <td data-col-label=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("By", "objectslend"), "html", null, true);
            yield "\">
                ";
            // line 282
            if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getIdAdh", [], "method", false, false, false, 282)) {
                // line 283
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("member", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getIdAdh", [], "method", false, false, false, 283)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('memberName')->getCallable()(["id" => CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getIdAdh", [], "method", false, false, false, 283)]), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 284
                yield "-";
            }
            // line 285
            yield "            </td>
            ";
            // line 286
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DATE_FORECAST", [], "any", false, false, false, 286)) {
                // line 287
                yield "                <td class=\"center nowrap\" data-col-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Return", "objectslend"), "html", null, true);
                yield "\">
                    ";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getDateForecast", [], "method", false, false, false, 288), "html", null, true);
                yield "
                </td>
            ";
            }
            // line 291
            yield "            <td class=\"center\" data-col-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
            yield "\">
                <i
                        class=\"thumbs ";
            // line 293
            if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "isActive", [], "method", false, false, false, 293)) {
                yield "up green";
            } else {
                yield "down red";
            }
            yield " icon tooltip\"
                        title=\"";
            // line 294
            if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "isActive", [], "method", false, false, false, 294)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object is active", "objectslend"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object is inactive", "objectslend"), "html", null, true);
            }
            yield "\">
                </i>
                <span class=\"visually-hidden\">";
            // line 296
            if (CoreExtension::getAttribute($this->env, $this->source, $context["object"], "isActive", [], "method", false, false, false, 296)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Active", "objectslend"), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Inactive", "objectslend"), "html", null, true);
            }
            yield "</span>
            </td>
            <td class=\"center actions_row nowrap\">
                ";
            // line 299
            $context["actions"] = [];
            // line 300
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 300) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 300))) {
                // line 301
                yield "                    ";
                $context["actions"] = [["label" => $this->env->getFunction('_T')->getCallable()("Edit object", "objectslend"), "route" => ["name" => "objectslend_object_edit", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 306
$context["object"], "getId", [], "method", false, false, false, 306)]], "icon" => "edit"], ["label" => $this->env->getFunction('_T')->getCallable()("Duplicate object", "objectslend"), "route" => ["name" => "objectslend_object_clone", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 314
$context["object"], "getId", [], "method", false, false, false, 314)]], "icon" => "clone grey"], ["label" => $this->env->getFunction('_T')->getCallable()("Show object lends", "objectslend"), "extra_class" => "object_hist", "route" => ["name" => "objectslend_show_object_lend", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 323
$context["object"], "getId", [], "method", false, false, false, 323)]], "icon" => "history grey"], ["label" => $this->env->getFunction('_T')->getCallable()("Object card in PDF", "objectslend"), "route" => ["name" => "objectslend_object_print", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 331
$context["object"], "getId", [], "method", false, false, false, 331)]], "icon" => "file pdf grey"], ["label" => Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("Remove %object from database", "objectslend"), ["%object" => CoreExtension::getAttribute($this->env, $this->source,                 // line 336
$context["object"], "getName", [], "method", false, false, false, 336)]), "route" => ["name" => "objectslend_remove_object", "args" => ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 339
$context["object"], "getId", [], "method", false, false, false, 339)]], "icon" => "trash red", "extra_class" => "delete"]];
                // line 345
                yield "                ";
            }
            // line 346
            yield "
                ";
            // line 347
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getRentId", [], "method", false, false, false, 347) || CoreExtension::getAttribute($this->env, $this->source, $context["object"], "inStock", [], "method", false, false, false, 347))) {
                // line 348
                yield "                    ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "ENABLE_MEMBER_RENT_OBJECT", [], "any", false, false, false, 348) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 348)) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 348))) {
                    // line 349
                    yield "                        ";
                    $context["actions"] = Twig\Extension\CoreExtension::merge([["label" => $this->env->getFunction('_T')->getCallable()("Take away", "objectslend"), "route" => ["name" => "objectslend_object_take", "args" => ["action" => "take", "id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 356
$context["object"], "getId", [], "method", false, false, false, 356)]], "icon" => "shopping basket grey"]],                     // line 361
($context["actions"] ?? null));
                    // line 362
                    yield "                    ";
                }
                // line 363
                yield "                ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 363) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 363)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "id", [], "any", false, false, false, 363) == CoreExtension::getAttribute($this->env, $this->source, $context["object"], "getIdAdh", [], "method", false, false, false, 363)))) {
                // line 364
                yield "                    ";
                $context["actions"] = Twig\Extension\CoreExtension::merge([["label" => $this->env->getFunction('_T')->getCallable()("Give back", "objectslend"), "route" => ["name" => "objectslend_object_take", "args" => ["action" => "return", "id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 371
$context["object"], "getId", [], "method", false, false, false, 371)]], "icon" => "share orange"]],                 // line 376
($context["actions"] ?? null));
                // line 377
                yield "                ";
            }
            // line 378
            yield "
                ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 380
                yield "                    ";
                yield CoreExtension::callMacro($macros["macros"], "macro_drawListAction", [CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 380), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "route", [], "any", false, false, false, 380), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 380), (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", true, true, false, 380) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 380)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "extra_class", [], "any", false, false, false, 380)) : (""))], 380, $context, $this->getSourceContext());
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
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
            // line 385
            yield "        ";
            // line 386
            yield "        <tr>
            <td colspan=\"14\" class=\"emptylist\">";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("No object has been found", "objectslend"), "html", null, true);
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 419
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script type=\"text/javascript\">
";
        // line 422
        if ((($context["nb_objects"] ?? null) > 0)) {
            // line 423
            yield "    \$(function(){
        \$('.object_hist').on('click', function(e) {
            e.preventDefault();
            var _this = \$(this);

            \$.ajax({
                url: _this.attr('href'),
                type: 'GET',
                datatype: 'html',
                ";
            // line 432
            yield from             $this->loadTemplate("elements/js/loader.js.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 432)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action"]));
            // line 434
            yield ",
                success: function(res){
                    var _content = \$(\$.parseHTML(res)).find('div.main-content').children();
                    ";
            // line 437
            yield from             $this->loadTemplate("elements/js/modal.js.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 437)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("History of object", "objectslend"), "js"), "modal_content" => "_content", "modal_class" => "fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
            // line 445
            yield "                },
                error: function(){
                    alert(\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred loading history display :(", "objectslend"), "js"), "html", null, true);
            yield "\")
                }
            });
        });
    });

    /*";
            // line 453
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 453) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 453))) {
                // line 454
                yield "        \$('.batch-takeaway').click(function (e) {
            e.preventDefault();
            var _this = \$(this);

            _statusObjects();

            \$.ajax({
                url: '";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_take", ["action" => "take", "id" => ""]), "html", null, true);
                yield "',
                type: 'GET',
                data: {
                    object_ids: get_checked_objets_ids()
                },
                datatype: 'html',
                ";
                // line 467
                yield from                 $this->loadTemplate("elements/js/loader.js.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 467)->unwrap()->yield(CoreExtension::merge($context, ["loader" => "action"]));
                // line 469
                yield ",
                success: function(res){
                    var _content = \$(\$.parseHTML(res)).find('div.main-content').children();
                    ";
                // line 472
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 472)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Take objects", "objectslend"), "js"), "modal_content" => "_content", "modal_class" => "fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
                // line 480
                yield "
                    \$('#lend_window input:submit, #lend_window .button, #lend_window input:reset' ).button({
                      create: function(event, ui) {
                          if ( \$(event.target).hasClass('disabled') ) {
                              \$(event.target).button('disable');
                          }
                      }
                    });

                    _init_takeobject_js();

                },
                error: function(){
                    alert(\"";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred loading 'Take away' display :(", "objectslend"), "js"), "html", null, true);
                yield "\")
                }
            });
        });

        \$('.batch-giveback').click(function (e) {
            e.preventDefault();
            var _this = \$(this);

            _statusObjects();

            \$.ajax({
                url: '";
                // line 505
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_take", ["action" => "return", "id" => ""]), "html", null, true);
                yield "',
                type: 'GET',
                data: {
                    object_ids: get_checked_objets_ids()
                },
                datatype: 'html',
                ";
                // line 511
                yield from                 $this->loadTemplate("elements/js/loader.js.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 511)->unwrap()->yield($context);
                yield ",
                success: function(res){
                    var _content = \$(\$.parseHTML(res)).find('div.main-content').children();
                    ";
                // line 514
                yield from                 $this->loadTemplate("elements/js/modal.js.twig", "@PluginGaletteObjectslend/objects_list.html.twig", 514)->unwrap()->yield(CoreExtension::merge($context, ["modal_title_twig" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Give back objects", "objectslend"), "js"), "modal_content" => "_content", "modal_class" => "fullscreen", "modal_content_class" => "scrolling", "modal_deny_only" => true, "modal_cancel_text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Close"), "js")]));
                // line 522
                yield "
                    \$('#lend_window input:submit, #lend_window .button, #lend_window input:reset' ).button({
                        create: function(event, ui) {
                            if ( \$(event.target).hasClass('disabled') ) {
                                \$(event.target).button('disable');
                            }
                        }
                    });

                    _init_giveobject_js();

                },
                error: function(){
                    alert(\"";
                // line 535
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("An error occurred loading 'Give back' display :(", "objectslend"), "js"), "html", null, true);
                yield "\")
                }
            });
        });

        function _statusObjects(isAway) {
            if (!\$('.listing :checkbox:checked').length) {
                return false;
            }
            var objectsIds = '';
            \$('.listing :checkbox:checked').each(function () {
                objectsIds += \$(this).val() + ',';
            });
            window.location = (isAway ? 'take_more_objects_away' : 'give_more_objects_back') + '.php?object_ids=' + objectsIds;
            return false;
        }*/
    ";
            }
        }
        // line 553
        yield "</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/objects_list.html.twig";
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
        return array (  995 => 553,  974 => 535,  959 => 522,  957 => 514,  951 => 511,  942 => 505,  927 => 493,  912 => 480,  910 => 472,  905 => 469,  903 => 467,  894 => 461,  885 => 454,  883 => 453,  874 => 447,  870 => 445,  868 => 437,  863 => 434,  861 => 432,  850 => 423,  848 => 422,  842 => 420,  838 => 419,  826 => 387,  823 => 386,  821 => 385,  806 => 382,  797 => 380,  793 => 379,  790 => 378,  787 => 377,  785 => 376,  784 => 371,  782 => 364,  779 => 363,  776 => 362,  774 => 361,  773 => 356,  771 => 349,  768 => 348,  766 => 347,  763 => 346,  760 => 345,  758 => 339,  757 => 336,  756 => 331,  755 => 323,  754 => 314,  753 => 306,  751 => 301,  748 => 300,  746 => 299,  736 => 296,  727 => 294,  719 => 293,  713 => 291,  707 => 288,  702 => 287,  700 => 286,  697 => 285,  694 => 284,  686 => 283,  684 => 282,  680 => 281,  675 => 279,  671 => 278,  668 => 277,  663 => 276,  655 => 275,  653 => 274,  648 => 273,  642 => 270,  637 => 269,  634 => 268,  628 => 265,  623 => 264,  620 => 263,  616 => 261,  610 => 259,  604 => 257,  602 => 256,  598 => 255,  593 => 254,  590 => 253,  584 => 250,  579 => 249,  576 => 248,  570 => 245,  565 => 244,  563 => 243,  560 => 242,  554 => 240,  552 => 239,  548 => 238,  543 => 237,  537 => 234,  533 => 233,  529 => 232,  524 => 230,  519 => 229,  516 => 228,  510 => 225,  507 => 224,  505 => 223,  496 => 222,  477 => 221,  473 => 220,  463 => 213,  457 => 212,  453 => 210,  447 => 208,  445 => 207,  441 => 206,  435 => 203,  431 => 202,  427 => 201,  417 => 199,  414 => 198,  410 => 197,  404 => 194,  398 => 191,  389 => 189,  382 => 185,  377 => 182,  375 => 181,  371 => 179,  369 => 178,  361 => 173,  356 => 171,  351 => 169,  346 => 167,  337 => 161,  329 => 160,  321 => 155,  313 => 154,  305 => 149,  297 => 148,  290 => 144,  285 => 141,  270 => 139,  266 => 138,  261 => 136,  253 => 133,  249 => 132,  241 => 128,  237 => 127,  230 => 124,  227 => 123,  224 => 122,  221 => 119,  219 => 118,  216 => 117,  213 => 116,  210 => 113,  208 => 112,  205 => 111,  203 => 106,  200 => 105,  197 => 104,  194 => 101,  192 => 100,  189 => 99,  186 => 98,  183 => 95,  181 => 94,  178 => 93,  175 => 92,  172 => 89,  170 => 88,  167 => 87,  164 => 86,  161 => 83,  159 => 82,  156 => 81,  153 => 80,  150 => 77,  148 => 76,  145 => 75,  143 => 72,  140 => 71,  137 => 70,  134 => 67,  132 => 66,  129 => 65,  126 => 64,  123 => 61,  121 => 60,  118 => 59,  115 => 58,  111 => 57,  102 => 52,  96 => 49,  92 => 47,  89 => 46,  85 => 45,  77 => 42,  75 => 37,  73 => 36,  69 => 35,  64 => 21,  60 => 404,  58 => 394,  56 => 393,  54 => 392,  52 => 26,  50 => 24,  48 => 22,  41 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/objects_list.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/objects_list.html.twig");
    }
}
