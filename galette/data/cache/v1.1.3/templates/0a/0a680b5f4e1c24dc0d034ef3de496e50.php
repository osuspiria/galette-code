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

/* @PluginGaletteObjectslend/objects_edit.html.twig */
class __TwigTemplate_fe1ad162d34b6c8256c79d0d16c7f371 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <form action=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getId", [], "method", false, false, false, 24)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_action_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getId", [], "method", false, false, false, 24)]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_action_add"), "html", null, true);
        }
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"ui form\">
        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"icon dropdown\"></i>
                ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object", "objectslend"), "html", null, true);
        yield "
            </div>
            <div class=\"active content\">
                ";
        // line 31
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["id" => "name", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["object"] ?? null), "name", [], "any", false, false, false, 33), "label" => $this->env->getFunction('_T')->getCallable()("Name:", "objectslend"), "required" => true]));
        // line 37
        yield "
                ";
        // line 38
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["id" => "description", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["object"] ?? null), "description", [], "any", false, false, false, 40), "label" => $this->env->getFunction('_T')->getCallable()("Description:", "objectslend")]));
        // line 43
        yield "
                ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lendsprefs"] ?? null), "VIEW_CATEGORY", [], "any", false, false, false, 44)) {
            // line 45
            yield "                    ";
            $context["category_list_values"] = [$this->env->getFunction('_T')->getCallable()("--- Select a category ---", "objectslend")];
            // line 46
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
                // line 47
                yield "                        ";
                $context["category_list_values"] = (($context["category_list_values"] ?? null) + [CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getId", [], "method", false, false, false, 47) => CoreExtension::getAttribute($this->env, $this->source, $context["categ"], "getName", [], "method", false, false, false, 47)]);
                // line 48
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "
                    ";
            // line 50
            yield from             $this->loadTemplate("components/forms/select.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["id" => "category_id", "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 52
($context["object"] ?? null), "getCategoryId", [], "method", false, false, false, 52), "values" =>             // line 53
($context["category_list_values"] ?? null), "label" => $this->env->getFunction('_T')->getCallable()("Category:", "objectslend")]));
            // line 56
            yield "
                ";
        }
        // line 58
        yield "
                ";
        // line 59
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 59)->unwrap()->yield(CoreExtension::merge($context, ["id" => "serial", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["object"] ?? null), "getSerialNumber", [], "method", false, false, false, 61), "label" => $this->env->getFunction('_T')->getCallable()("Serial number:", "objectslend")]));
        // line 64
        yield "
                ";
        // line 65
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 65)->unwrap()->yield(CoreExtension::merge($context, ["id" => "price", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["object"] ?? null), "price", [], "any", false, false, false, 67), "label" => $this->env->getFunction('_T')->getCallable()("Price:", "objectslend"), "rightlabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["object"] ?? null), "getCurrency", [], "method", false, false, false, 69)]));
        // line 71
        yield "
                ";
        // line 72
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 72)->unwrap()->yield(CoreExtension::merge($context, ["id" => "rent_price", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["object"] ?? null), "rent_price", [], "any", false, false, false, 74), "label" => $this->env->getFunction('_T')->getCallable()("Borrow price:", "objectslend"), "rightlabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["object"] ?? null), "getCurrency", [], "method", false, false, false, 76)]));
        // line 78
        yield "
                ";
        // line 79
        yield from         $this->loadTemplate("components/forms/checkbox.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 79)->unwrap()->yield(CoreExtension::merge($context, ["id" => "price_per_day", "value" => 1, "label" => $this->env->getFunction('_T')->getCallable()("Price per rental day:", "objectslend"), "tip" => $this->env->getFunction('_T')->getCallable()("The price applies on each rental day if checked, only once otherwise", "objectslend"), "checked" => CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["object"] ?? null), "price_per_day", [], "any", false, false, false, 84)]));
        // line 86
        yield "
                ";
        // line 87
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 87)->unwrap()->yield(CoreExtension::merge($context, ["id" => "dimension", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["object"] ?? null), "dimension", [], "any", false, false, false, 89), "label" => $this->env->getFunction('_T')->getCallable()("Dimensions:", "objectslend"), "rightlabel" => $this->env->getFunction('_T')->getCallable()("Cm", "objectslend")]));
        // line 93
        yield "
                ";
        // line 94
        yield from         $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 94)->unwrap()->yield(CoreExtension::merge($context, ["id" => "weight", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["object"] ?? null), "weight", [], "any", false, false, false, 96), "label" => $this->env->getFunction('_T')->getCallable()("Weight:", "objectslend"), "rightlabel" => $this->env->getFunction('_T')->getCallable()("Kg", "objectslend")]));
        // line 100
        yield "
                ";
        // line 101
        yield from         $this->loadTemplate("components/forms/checkbox.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 101)->unwrap()->yield(CoreExtension::merge($context, ["id" => "is_active", "value" => 1, "label" => $this->env->getFunction('_T')->getCallable()("Active:", "objectslend"), "checked" => CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["object"] ?? null), "is_active", [], "any", false, false, false, 105)]));
        // line 107
        yield "

                ";
        // line 109
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 109)) {
            // line 110
            yield "                    ";
            $context["state_list_values"] = [$this->env->getFunction('_T')->getCallable()("--- Select a status ---", "objectslend")];
            // line 111
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sta"]) {
                // line 112
                yield "                        ";
                $context["state_list_values"] = (($context["state_list_values"] ?? null) + [CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_id", [], "any", false, false, false, 112) => CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_text", [], "any", false, false, false, 112)]);
                // line 113
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "
                    ";
            // line 115
            yield from             $this->loadTemplate("components/forms/select.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 115)->unwrap()->yield(CoreExtension::merge($context, ["id" => "1st_status", "value" => "", "values" =>             // line 118
($context["state_list_values"] ?? null), "label" => $this->env->getFunction('_T')->getCallable()("Where is the object?", "objectslend")]));
            // line 121
            yield "                ";
        }
        // line 122
        yield "            </div>
        </div>

        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"icon dropdown\"></i>
                ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object's photo", "objectslend"), "html", null, true);
        yield "
            </div>
            <div class=\"active content\">
                <img
                        src=\"";
        // line 132
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 132)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "object", "mode" => "thumbnail", "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 132)]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_photo", ["type" => "object", "mode" => "thumbnail"]), "html", null, true);
        }
        yield "\"
                        class=\"picture\"
                        width=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "picture", [], "any", false, false, false, 134), "getOptimalThumbWidth", [($context["olendsprefs"] ?? null)], "method", false, false, false, 134), "html", null, true);
        yield "\"
                        height=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "picture", [], "any", false, false, false, 135), "getOptimalThumbHeight", [($context["olendsprefs"] ?? null)], "method", false, false, false, 135), "html", null, true);
        yield "\"
                        alt=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Object's photo", "objectslend"), "html", null, true);
        yield "\"/>
                <br/>
                ";
        // line 138
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "picture", [], "any", false, false, false, 138), "hasPicture", [], "method", false, false, false, 138)) {
            // line 139
            yield "                    ";
            yield from             $this->loadTemplate("components/forms/checkbox.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 139)->unwrap()->yield(CoreExtension::merge($context, ["id" => "del_picture", "value" => 1, "label" => $this->env->getFunction('_T')->getCallable()("Delete image"), "required" => false]));
            // line 145
            yield "                ";
        }
        // line 146
        yield "                <div class=\"ui file action input\">
                    <input id=\"picture_file\" type=\"file\" name=\"picture\"/>
                    <label for=\"picture_file\" class=\"ui button\">
                        <i class=\"blue upload icon\"></i>
                        ";
        // line 150
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "picture", [], "any", false, false, false, 150), "hasPicture", [], "method", false, false, false, 150)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose another file"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Choose a file"), "html", null, true);
        }
        // line 151
        yield "                    </label>
                </div>
            </div>
        </div>

        <div class=\"ui basic center aligned segment\">
            <button type=\"submit\" class=\"ui labeled icon primary button action\">
                <i class=\"save icon\"></i> ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Save"), "html", null, true);
        yield "
            </button>
    ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 160) != "")) {
            // line 161
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_clone", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 161)]), "html", null, true);
            yield "\" class=\"ui labeled icon button\">
                <i class=\"clone icon\"></i> ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Duplicate", "objectslend"), "html", null, true);
            yield "
            </a>
            <a href=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 164)]), "html", null, true);
            yield "\" class=\"ui labeled icon button\">
                <i class=\"print icon\"></i> ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Print object", "objectslend"), "html", null, true);
            yield "
            </a>
    ";
        }
        // line 168
        yield "            <input type=\"hidden\" name=\"object_id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getId", [], "method", false, false, false, 168), "html", null, true);
        yield "\">
        </div>
        ";
        // line 170
        yield from         $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 170)->unwrap()->yield($context);
        // line 171
        yield "    </form>

    ";
        // line 173
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getId", [], "method", false, false, false, 173)) {
            // line 174
            yield "        <div class=\"ui styled fluid accordion field\">
            <div class=\"active title\">
                <i class=\"icon dropdown\"></i>
                ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("History", "objectslend"), "html", null, true);
            yield "
            </div>
            <div class=\"active content\">
                ";
            // line 180
            yield from             $this->loadTemplate("@PluginGaletteObjectslend/list_lent_object.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 180)->unwrap()->yield(CoreExtension::merge($context, ["rents" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "rents", [], "any", false, false, false, 180), "mode" => "ajax"]));
            // line 181
            yield "            </div>
        </div>

        ";
            // line 185
            yield "        <div class=\"ui basic horizontally fitted segment\">
            <form action=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("objectslend_object_updatestatus", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "getId", [], "method", false, false, false, 186)]), "html", null, true);
            yield "\" method=\"post\" class=\"ui form\">
                <div class=\"ui styled fluid accordion field\">
                    <div class=\"active title\">
                        <i class=\"icon dropdown\"></i>
                        ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change status", "objectslend"), "html", null, true);
            yield "
                    </div>
                    <div class=\"active content\">
                        ";
            // line 193
            $context["state_list_values"] = [ -1 => $this->env->getFunction('_T')->getCallable()("--- Select a status ---", "objectslend")];
            // line 194
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sta"]) {
                // line 195
                yield "                            ";
                $context["text"] = CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_text", [], "any", false, false, false, 195);
                // line 196
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "in_stock", [], "any", false, false, false, 196)) {
                    // line 197
                    yield "                                ";
                    $context["text"] = (((($context["text"] ?? null) . " (") . $this->env->getFunction('_T')->getCallable()("In stock", "objectslend")) . ")");
                    // line 198
                    yield "                            ";
                }
                // line 199
                yield "                            ";
                $context["state_list_values"] = (($context["state_list_values"] ?? null) + [CoreExtension::getAttribute($this->env, $this->source, $context["sta"], "status_id", [], "any", false, false, false, 199) => ($context["text"] ?? null)]);
                // line 200
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "
                        ";
            // line 202
            yield from             $this->loadTemplate("components/forms/select.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 202)->unwrap()->yield(CoreExtension::merge($context, ["id" => "new_status", "value" => "", "values" =>             // line 205
($context["state_list_values"] ?? null), "label" => $this->env->getFunction('_T')->getCallable()("Status", "objectslend")]));
            // line 208
            yield "
                        ";
            // line 209
            yield from             $this->loadTemplate("components/forms/text.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 209)->unwrap()->yield(CoreExtension::merge($context, ["id" => "new_comment", "value" => "", "label" => $this->env->getFunction('_T')->getCallable()("Comments", "objectslend"), "size" => 100, "maxlength" => 200]));
            // line 216
            yield "
                        <div class=\"inline field\">
                            <div id=\"id_adh\" class=\"jsonly search-dropdown ui input nochosen paginated\">
                                <input id=\"id_adh_input\" type=\"text\" name=\"new_adh\" value=\"\" placeholder=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Member ID"), "html", null, true);
            yield "\">
                                <i class=\"jsonly displaynone dropdown icon\" aria-hidden=\"true\"></i>
                                <span class=\"ui mini compact icon disabled button prev-results\"><i class=\"jsonly displaynone chevron circle left icon disabled button tooltip\" title=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Load previous members..."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i></span>
                                <span class=\"ui mini compact icon disabled button next-results\"><i class=\"jsonly displaynone chevron circle right icon disabled button tooltip\" title=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Load following members..."), "html", null, true);
            yield "\" aria-hidden=\"true\"></i></span>
                                <div class=\"jsonly displaynone default text\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Search for name or ID and pick member"), "html", null, true);
            yield "</div>
                                <div class=\"jsonly displaynone menu\">
                                ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 225));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 226
                yield "                                    <div class=\"item\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "</div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"ui basic center aligned segment\">
                    <button type=\"submit\" class=\"ui labeled icon primary button action\">
                        <i class=\"save icon\"></i> ";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('_T')->getCallable()("Change status", "objectslend"), "html", null, true);
            yield "
                    </button>
                </div>
                <input type=\"hidden\" name=\"object_id\" value=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["object"] ?? null), "object_id", [], "any", false, false, false, 240), "html", null, true);
            yield "\">
                ";
            // line 241
            yield from             $this->loadTemplate("components/forms/csrf.html.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 241)->unwrap()->yield($context);
            // line 242
            yield "            </form>
        </div>
    ";
        }
        return; yield '';
    }

    // line 247
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        yield "        <script type=\"text/javascript\">
            ";
        // line 249
        yield from         $this->loadTemplate("elements/js/choose_adh.js.twig", "@PluginGaletteObjectslend/objects_edit.html.twig", 249)->unwrap()->yield($context);
        // line 250
        yield "        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PluginGaletteObjectslend/objects_edit.html.twig";
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
        return array (  446 => 250,  444 => 249,  441 => 248,  437 => 247,  429 => 242,  427 => 241,  423 => 240,  417 => 237,  406 => 228,  395 => 226,  391 => 225,  386 => 223,  382 => 222,  378 => 221,  373 => 219,  368 => 216,  366 => 209,  363 => 208,  361 => 205,  360 => 202,  357 => 201,  351 => 200,  348 => 199,  345 => 198,  342 => 197,  339 => 196,  336 => 195,  331 => 194,  329 => 193,  323 => 190,  316 => 186,  313 => 185,  308 => 181,  306 => 180,  300 => 177,  295 => 174,  293 => 173,  289 => 171,  287 => 170,  281 => 168,  275 => 165,  271 => 164,  266 => 162,  261 => 161,  259 => 160,  254 => 158,  245 => 151,  239 => 150,  233 => 146,  230 => 145,  227 => 139,  225 => 138,  220 => 136,  216 => 135,  212 => 134,  203 => 132,  196 => 128,  188 => 122,  185 => 121,  183 => 118,  182 => 115,  179 => 114,  173 => 113,  170 => 112,  165 => 111,  162 => 110,  160 => 109,  156 => 107,  154 => 105,  153 => 101,  150 => 100,  148 => 96,  147 => 94,  144 => 93,  142 => 89,  141 => 87,  138 => 86,  136 => 84,  135 => 79,  132 => 78,  130 => 76,  129 => 74,  128 => 72,  125 => 71,  123 => 69,  122 => 67,  121 => 65,  118 => 64,  116 => 61,  115 => 59,  112 => 58,  108 => 56,  106 => 53,  105 => 52,  104 => 50,  101 => 49,  95 => 48,  92 => 47,  87 => 46,  84 => 45,  82 => 44,  79 => 43,  77 => 40,  76 => 38,  73 => 37,  71 => 33,  70 => 31,  64 => 28,  52 => 24,  48 => 23,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PluginGaletteObjectslend/objects_edit.html.twig", "/var/www/galette/plugins/plugin-objectslend/templates/default/objects_edit.html.twig");
    }
}
