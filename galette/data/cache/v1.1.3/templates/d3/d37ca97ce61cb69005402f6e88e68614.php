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

/* @PluginGaletteObjectslend/take_object.html.twig */
class __TwigTemplate_70b98e3400acdd4c2ff372e303663975 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "<form action=\"";
        if ((($context["takeorgive"] ?? null) == "take")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_dotake", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 24)]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_doreturn", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 24)]), "html", null, true);
        }
        yield "\" method=\"post\" id=\"form_take_object\" class=\"ui form info\">
    <div class=\"ui styled fluid accordion field\">
        <div class=\"active title\">
            <i class=\"icon dropdown\"></i>
            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object", "objectslend"), "html", null, true);
        yield "
        </div>
        <div class=\"active content\">
            <div class=\"inline field\">
                <label>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Name:", "objectslend"), "html", null, true);
        yield "</label>
                ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "
                <img src=\"";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 34)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "object", "mode" => "thumbnail", "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 34)]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "object", "mode" => "thumbnail"]), "html", null, true);
        }
        yield "\"
                class=\"picture fright\"
                width=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "picture", [], "any", false, false, false, 36), "getOptimalThumbWidth", [($context["olendsprefs"] ?? null)], "method", false, false, false, 36), "html", null, true);
        yield "\"
                height=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "picture", [], "any", false, false, false, 37), "getOptimalThumbHeight", [($context["olendsprefs"] ?? null)], "method", false, false, false, 37), "html", null, true);
        yield "\"
                alt=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object photo", "objectslend"), "html", null, true);
        yield "\"/>
            </div>

    ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DESCRIPTION", [], "any", false, false, false, 41)) {
            // line 42
            yield "            <div class=\"inline field\">
                <label>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Description:", "objectslend"), "html", null, true);
            yield "</label>
                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "description", [], "any", false, false, false, 44), "html", null, true);
            yield "
            </div>
    ";
        }
        // line 47
        yield "
    ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_SERIAL", [], "any", false, false, false, 48)) {
            // line 49
            yield "            <div class=\"inline field\">
                <label>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Serial number:", "objectslend"), "html", null, true);
            yield "</label>
                ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "serial_number", [], "any", false, false, false, 51), "html", null, true);
            yield "
            </div>
    ";
        }
        // line 54
        yield "
    ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_PRICE", [], "any", false, false, false, 55)) {
            // line 56
            yield "            <div class=\"inline field\">
                <label>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Price:", "objectslend"), "html", null, true);
            yield "</label>
                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "price", [], "any", false, false, false, 58), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "currency", [], "any", false, false, false, 58), "html", null, true);
            yield "
            </div>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_DIMENSION", [], "any", false, false, false, 62)) {
            // line 63
            yield "            <div class=\"inline field\">
                <label>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Dimensions:", "objectslend"), "html", null, true);
            yield "</label>
                ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "dimension", [], "any", false, false, false, 65) != "")) {
                // line 66
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "dimension", [], "any", false, false, false, 66), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Cm", "objectslend"), "html", null, true);
                yield "
                ";
            } else {
                // line 68
                yield "                -
                ";
            }
            // line 70
            yield "            </div>
    ";
        }
        // line 72
        yield "
    ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_WEIGHT", [], "any", false, false, false, 73)) {
            // line 74
            yield "            <div class=\"inline field\">
                <label>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Weight:", "objectslend"), "html", null, true);
            yield "</label>
                ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "weight", [], "any", false, false, false, 76) != "")) {
                // line 77
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "weight", [], "any", false, false, false, 77), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Kg", "objectslend"), "html", null, true);
                yield "
                ";
            } else {
                // line 79
                yield "                    -
                ";
            }
            // line 81
            yield "            </div>
    ";
        }
        // line 83
        yield "
            <div class=\"inline field\">
                <label>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Borrow price:", "objectslend"), "html", null, true);
        yield "</label>
                ";
        // line 86
        if (((($context["takeorgive"] ?? null) == "take") && (CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 86) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 86)))) {
            // line 87
            yield "                    <input type=\"text\" name=\"rent_price\" id=\"rent_price\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "rent_price", [], "any", false, false, false, 87), "html", null, true);
            yield "\" size=\"10\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "currency", [], "any", false, false, false, 87), "html", null, true);
            yield "
                ";
        } else {
            // line 89
            yield "                    <input type=\"hidden\" name=\"rent_price\" id=\"rent_price\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "rent_price", [], "any", false, false, false, 89), "html", null, true);
            yield "\">
                    <span id=\"rent_price_label\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "rent_price", [], "any", false, false, false, 90), "html", null, true);
            yield "</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "currency", [], "any", false, false, false, 90), "html", null, true);
            yield "
                ";
        }
        // line 92
        yield "
                ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "isPricePerDay", [], "method", false, false, false, 93)) {
            // line 94
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(per day)", "objectslend"), "html", null, true);
            yield "
                ";
        } else {
            // line 96
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("(at once)", "objectslend"), "html", null, true);
            yield "
                ";
        }
        // line 98
        yield "            </div>

        </div>
    </div>

    ";
        // line 103
        if ((($context["takeorgive"] ?? null) == "take")) {
            // line 104
            yield "        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"icon dropdown\"></i>
                ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Borrow information", "objectslend"), "html", null, true);
            yield "
            </div>
            <div class=\"active content\">
                ";
            // line 110
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isAdmin", [], "method", false, false, false, 110) || CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isStaff", [], "method", false, false, false, 110))) {
                // line 111
                yield "                <div class=\"inline field\">
                    <label for=\"id_adh\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member:", "objectslend"), "html", null, true);
                yield "</label>
                    <div id=\"id_adh\" class=\"jsonly search-dropdown ui input nochosen paginated\">
                        <input id=\"id_adh_input\" type=\"text\" name=\"id_adh\" value=\"";
                // line 114
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "isSuperAdmin", [], "method", false, false, false, 114)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["login"] ?? null), "id", [], "any", false, false, false, 114), "html", null, true);
                }
                yield "\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member ID"), "html", null, true);
                yield "\">
                        <i class=\"jsonly displaynone dropdown icon\"></i>
                        <span class=\"ui mini compact icon disabled button prev-results\"><i class=\"jsonly displaynone chevron circle left icon disabled button tooltip\" title=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Load previous members..."), "html", null, true);
                yield "\"></i></span>
                        <span class=\"ui mini compact icon disabled button next-results\"><i class=\"jsonly displaynone chevron circle right icon disabled button tooltip\" title=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Load following members..."), "html", null, true);
                yield "\"></i></span>
                        <div class=\"jsonly displaynone default text\">";
                // line 118
                if ((($context["adh_selected"] ?? null) == 0)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search for name or ID and pick member"), "html", null, true);
                }
                yield "</div>
                        <div class=\"jsonly displaynone menu\">
                            ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 121
                    yield "                                <div class=\"item\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                    yield "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                yield "                        </div>
                    </div>
                </div>
                ";
            }
            // line 127
            yield "
                <div class=\"inline field\">
                    ";
            // line 129
            $context["state_list_values"] = [ -1 => $this->env->getFunction('_T')->getCallable()("--- Select a status ---", "objectslend")];
            // line 130
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sta"]) {
                // line 131
                yield "                        ";
                $context["text"] = CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_text", [], "any", false, false, false, 131);
                // line 132
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "rent_day_number", [], "any", false, false, false, 132) != "")) {
                    // line 133
                    yield "                            ";
                    $context["text"] = (((($context["text"] ?? null) . " (") . Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("%days days", "objectslend"), ["%days" => CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "rent_day_number", [], "any", false, false, false, 133)])) . ")");
                    // line 134
                    yield "                        ";
                }
                // line 135
                yield "                        ";
                $context["state_list_values"] = (($context["state_list_values"] ?? null) + [CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_id", [], "any", false, false, false, 135) => ($context["text"] ?? null)]);
                // line 136
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "
                    ";
            // line 138
            yield from             $this->loadTemplate("components/forms/select.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 138)->unwrap()->yield(CoreExtension::merge($context, ["id" => "status", "value" => "", "values" =>             // line 141
($context["state_list_values"] ?? null), "label" => $this->env->getFunction('_T')->getCallable()("Status:", "objectslend")]));
            // line 144
            yield "                </div>

                <div class=\"inline field\">
                    ";
            // line 147
            yield from             $this->loadTemplate("components/forms/date.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 147)->unwrap()->yield(CoreExtension::merge($context, ["id" => "expected_return", "value" =>             // line 149
($context["date_forecast"] ?? null), "label" => $this->env->getFunction('_T')->getCallable()("Expected return:", "objectslend")]));
            // line 152
            yield "                </div>

                ";
            // line 154
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "AUTO_GENERATE_CONTRIBUTION", [], "any", false, false, false, 154)) {
                // line 155
                yield "                <div class=\"inline field\">
                    ";
                // line 156
                yield from                 $this->loadTemplate("components/forms/payment_types.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 156)->unwrap()->yield(CoreExtension::merge($context, ["show_inline" => true, "current" => CoreExtension::getAttribute($this->env, $this->source,                 // line 158
($context["contribution"] ?? null), "payment_type", [], "any", false, false, false, 158), "varname" => "payment_type"]));
                // line 161
                yield "                </div>
                ";
            }
            // line 163
            yield "            </div>
        </div>
    ";
        } else {
            // line 166
            yield "        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"icon dropdown\"></i>
                ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Return information", "objectslend"), "html", null, true);
            yield "
            </div>
            <div class=\"active content\">
                <div class=\"inline field\">
                    ";
            // line 173
            $context["state_list_values"] = [ -1 => $this->env->getFunction('_T')->getCallable()("--- Select a status ---", "objectslend")];
            // line 174
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sta"]) {
                // line 175
                yield "                        ";
                $context["state_list_values"] = (($context["state_list_values"] ?? null) + [CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_id", [], "any", false, false, false, 175) => CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_text", [], "any", false, false, false, 175)]);
                // line 176
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            yield "
                    ";
            // line 178
            yield from             $this->loadTemplate("components/forms/select.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 178)->unwrap()->yield(CoreExtension::merge($context, ["id" => "status", "value" => "", "values" =>             // line 181
($context["state_list_values"] ?? null), "label" => $this->env->getFunction('_T')->getCallable()("Status:", "objectslend")]));
            // line 184
            yield "                </div>

                <div class=\"inline field\">
                    <label>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Time:", "objectslend"), "html", null, true);
            yield "</label>
                    ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getFunction('_T')->getCallable()("From %begindate to %enddate", "objectslend"), ["%begindate" => CoreExtension::getAttribute($this->env, $this->source, ($context["last_rent"] ?? null), "date_begin", [], "any", false, false, false, 188), "%enddate" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", $this->env->getFunction('_T')->getCallable()("Y-m-d"))]), "html", null, true);
            yield "
                </div>
                <div>
                    ";
            // line 191
            yield from             $this->loadTemplate("components/forms/textarea.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 191)->unwrap()->yield(CoreExtension::merge($context, ["id" => "comments", "value" => "", "label" => $this->env->getFunction('_T')->getCallable()("Comments:", "objectslend")]));
            // line 196
            yield "                    <span class=\"exemple\"><span id=\"remaining\">200</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("remaining characters", "objectslend"), "html", null, true);
            yield "</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 201
        yield "
    ";
        // line 202
        if ((($context["takeorgive"] ?? null) == "take")) {
            // line 203
            yield "    <div class=\"disclaimer center\">
        <div class=\"ui checkbox\">
            <input type=\"checkbox\" name=\"agreement\" id=\"agreement\" value=\"1\" required=\"required\"/>
            <label for=\"agreement\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("I have read and I agree with terms and conditions", "objectslend"), "html", null, true);
            yield "</label>
        </div>
        <div id=\"attach-checkbox\" class=\"ui toggle checkbox\">
            <input type=\"checkbox\" name=\"show_terms\" id=\"show_terms\" value=\"1\"/>
            <label for=\"show_terms\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Show terms and conditions", "objectslend"), "html", null, true);
            yield "</label>
        </div>
        <div id=\"show_terms_elt\" class=\"\">
            <div class=\"ui info message\">
                ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("The items offered for rent are in good condition and verification rental contradictory to their status is at the time of withdrawal. No claims will be accepted after the release of the object. Writing by the store a list of reservation does not exempt the customer checking his retrait. The payment of rent entitles the purchaser to make normal use of the loaned object. If the object is rendered in a degraded state, the seller reserves the right to collect all or part of the security deposit. In case of deterioration of the rented beyond the standard object, a financial contribution will be required for additional cleaning caused. In case of damage, loss or theft of the rented property, the deposit will not be refunded automatically to 'the company as damages pursuant to Article 1152 of the Civil Code and without that it need for any other judicial or extra-judicial formality. In some other cases not listed above and at the discretion of the seller, the deposit check may also be collected in whole or party.", "objectslend"), "html", null, true);
            yield "
            </div>
        </div>
    </div>
    ";
        }
        // line 219
        yield "
    <div class=\"ui basic center aligned fitted segment\">
        <button type=\"submit\" name=\"valid\" class=\"action ui labeled icon primary button\">
            <i class=\"save icon\"></i> ";
        // line 222
        if ((($context["takeorgive"] ?? null) == "take")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Borrow object", "objectslend"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Return object", "objectslend"), "html", null, true);
        }
        // line 223
        yield "        </button>
        <input type=\"hidden\" name=\"mode\" value=\"";
        // line 224
        if (($context["ajax"] ?? null)) {
            yield "ajax";
        }
        yield "\"/>
        ";
        // line 225
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/take_object.html.twig", 225)->unwrap()->yield($context);
        // line 226
        yield "    </div>
</form>
";
        return; yield '';
    }

    // line 230
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        yield "<script type=\"text/javascript\">
    ";
        // line 232
        yield from         $this->loadTemplate("elements/js/choose_adh.js.twig", "@PluginGaletteObjectslend/take_object.html.twig", 232)->unwrap()->yield($context);
        // line 233
        yield "
    ";
        // line 234
        if ((($context["takeorgive"] ?? null) == "take")) {
            // line 235
            yield "    var _init_takeobject_js = function() {
        \$('button[name=\"valid\"]').addClass('disabled');

    ";
            // line 238
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["olendsprefs"] ?? null), "showFullsize", [], "method", false, false, false, 238)) {
                // line 239
                yield "        _init_fullimage();
    ";
            }
            // line 241
            yield "
        \$('#id_adh, #status, #payment_type').on('change',function() {
            validStatus()
        });

        \$('button[name=\"valid\"]').on('click', function(e) {
            if (!\$('#agreement').is(':checked')) {
                e.preventDefault();
                alert('";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("You must agree with terms and conditions in order to borrow.", "objectslend"), "js"), "html", null, true);
            yield "');
            }
        });

        \$('#terms_conditions').hide();
        \$('.show_agreement').on('click', function() {
            \$('#terms_conditions').toggle();
        });

        \$('#show_terms_elt').addClass('displaynone');
        \$('#attach-checkbox').checkbox({
            onChecked: function() {
                \$('#show_terms_elt').removeClass('displaynone');
            },
            onUnchecked: function() {
                \$('#show_terms_elt').addClass('displaynone');
            }
        });
    }

    ";
            // line 269
            if ( !($context["ajax"] ?? null)) {
                // line 270
                yield "    \$(function () {
        _init_takeobject_js();
    });
    ";
            }
            // line 274
            yield "
    function completeZero(n) {
        return n < 10 ? '0' + n : n;
    }

    function validStatus() {
        var _disabled = false;
        if (\$('#status').val() === 'null') {
            _disabled = true;
        }
        if (\$('#id_adh').val() === 'null') {
            _disabled = true;
        }
        if (\$('#payment_type').val() === 'null') {
            _disabled = true;
        }

        var _lyes = \$('button[name=\"valid\"]');
        if (_disabled) {
            _lyes.addClass('disabled');
        } else {
            _lyes.removeClass('disabled');
        }

        ";
            // line 317
            yield "    }
";
        } else {
            // line 319
            yield "    var _init_giveobject_js = function() {
        \$('button[name=\"valid\"]').addClass('disabled');

        \$('#comments').keyup(function() {
            if (\$('#comments').val().length > 200) {
                \$('#comments').val(\$('#comments').val().substr(0, 200));
            }
            \$('#remaining').text(200 - \$('#comments').val().length);
        });

        \$('#status').on('change',function() {
            validStatus()
        });
    }

    {if not \$ajax}
    \$(function () {
        _init_giveobject_js();
    });
    {/if}

    function validStatus() {
        var _lyes = \$('button[name=\"valid\"]');
        if (\$('#status').val() === 'null') {
            _lyes.addClass('disabled');
        } else {
            _lyes.removeClass('disabled');
        }
    }

";
        }
        // line 350
        yield "</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/take_object.html.twig";
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
        return array (  654 => 350,  621 => 319,  617 => 317,  591 => 274,  585 => 270,  583 => 269,  560 => 249,  550 => 241,  546 => 239,  544 => 238,  539 => 235,  537 => 234,  534 => 233,  532 => 232,  529 => 231,  525 => 230,  518 => 226,  516 => 225,  510 => 224,  507 => 223,  501 => 222,  496 => 219,  488 => 214,  481 => 210,  474 => 206,  469 => 203,  467 => 202,  464 => 201,  455 => 196,  453 => 191,  447 => 188,  443 => 187,  438 => 184,  436 => 181,  435 => 178,  432 => 177,  426 => 176,  423 => 175,  418 => 174,  416 => 173,  409 => 169,  404 => 166,  399 => 163,  395 => 161,  393 => 158,  392 => 156,  389 => 155,  387 => 154,  383 => 152,  381 => 149,  380 => 147,  375 => 144,  373 => 141,  372 => 138,  369 => 137,  363 => 136,  360 => 135,  357 => 134,  354 => 133,  351 => 132,  348 => 131,  343 => 130,  341 => 129,  337 => 127,  331 => 123,  320 => 121,  316 => 120,  309 => 118,  305 => 117,  301 => 116,  292 => 114,  287 => 112,  284 => 111,  282 => 110,  276 => 107,  271 => 104,  269 => 103,  262 => 98,  256 => 96,  250 => 94,  248 => 93,  245 => 92,  238 => 90,  233 => 89,  225 => 87,  223 => 86,  219 => 85,  215 => 83,  211 => 81,  207 => 79,  199 => 77,  197 => 76,  193 => 75,  190 => 74,  188 => 73,  185 => 72,  181 => 70,  177 => 68,  169 => 66,  167 => 65,  163 => 64,  160 => 63,  158 => 62,  155 => 61,  147 => 58,  143 => 57,  140 => 56,  138 => 55,  135 => 54,  129 => 51,  125 => 50,  122 => 49,  120 => 48,  117 => 47,  111 => 44,  107 => 43,  104 => 42,  102 => 41,  96 => 38,  92 => 37,  88 => 36,  79 => 34,  75 => 33,  71 => 32,  64 => 28,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/take_object.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/take_object.html.twig");
    }
}
